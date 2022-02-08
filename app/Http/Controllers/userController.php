<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**Form Add User */
    public function create(){
        $action = "user.create";
        return view('users.create',['action'=>$action]);
    }
    /**Chamar form login */
    public function login(){
        $action = "logar";
        return view('users.login',['action'=>$action]);
    }
    /**Logar no sistema */
    public function logar(Request $request){

        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($data)){
           return  redirect('/');
        }

        return redirect()->back()->withInput()->withErrors(['Credenciais Invalidas']);
    }

    /**Terminar sessao */
    public function logout(){

        Auth::logout();

        return redirect('/');
    }
    /**Cadastrar Usuario */
    public function store(Request $request){

         $data = $request->all();
        if(!($request->password === $request->password_confirmation)){
                
            return redirect()->back()->withInput()->withErrors(['Password Diferentes!']);

        }
        $password_hash = password_hash($request->password,PASSWORD_DEFAULT); 
        $data['password'] = $password_hash;
        User::create($data);

        return redirect('/login');
    }

    /**Fazer Postagens */

    public function post(Request $request){

        $data = $request->all();
        if($request->has('image') && $request->hasFile('image')){
            $imageRequest = $request->image;
            $extension = $imageRequest->extension();
            $imageName = md5($imageRequest).strtotime('now').'.'.$extension;
            $request->file('image')->storeAs('public/images',$imageName);

            $data['image'] = $imageName;

        }
            $user_id = Auth::User()->id;
            $date = new DateTime('now');
            $data['date'] = $date;
            $data['user_id'] = $user_id;

            Post::create($data);
            
     


        return redirect()->back()->with('success','Conteúdo Postado com sucesso');
    }

    /**Mostrar postagens */
    public function show($id){
        $post = Post::FindOrFail($id);

        return view('/pages.show',['post'=>$post]);
    }
    /**Admin dashboard */
    public function admin(){
        if(Auth::User()->level === 1){
            $users = User::all();
            $posts = Post::all();
        return view('users.admin.dashboard',compact('users','posts'));
    }
    return redirect('/');
    }
}
