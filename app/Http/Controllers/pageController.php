<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
     
    public function index()
    {
        
        $posts = Post::all();

        return view('pages.index',['posts'=>$posts]);
    }
    public function about(){

        return view('pages.about');
    }
    public function create(){
        if(Auth::check()){
              $action = "postar";
        return view('pages.postcreate',['action'=>$action]);
        }
          
        return redirect('/');
    }

    
    
    
}
