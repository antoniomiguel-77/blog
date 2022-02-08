<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**Paginas View */
Route::get('/',[pageController::class,'index']);
Route::get('/about',[pageController::class,'about']);
Route::get('/services',[pageController::class,'services']);

/**Formularios View */
Route::get('/usuario.novo',[userController::class,'create']);
Route::get('/postagem.novo',[pageController::class,'create']);
Route::get('/login',[userController::class,'login']);
/**Acoes  */
Route::post('user.create',[userController::class,'store']);
Route::post('logar',[userController::class,'logar']);
Route::get('Sair',[userController::class,'logout']);

/**Postagens */
Route::post('postar',[userController::class,'post']);
Route::get('postagem/{id}',[userController::class,'show']);

/**Admin Dashboard */
Route::get('admin',[userController::class,'admin']);





