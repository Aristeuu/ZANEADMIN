<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\LocaisController;
use App\Http\Controllers\DepoimentosController;
use App\Http\Controllers\UsuariosController;


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

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('showLogin');
})->name('welcome');



Route::post('/register',[registerController::class, 'register'])->name('register');


Route::get('/login',function()
{
    return view('login');
})->name('showLogin')->middleware('guest');

Route::post('/login',[loginController::class, 'login'])->name('login.send');

Route::middleware(['auth'])->group(function(){

    Route::get('/home',[homeController::class, 'index' ])->name('home');

    Route::get('admin/banners',[BannerController::class, 'index'])->name('banners.show');
    Route::post('admin/banners',[BannerController::class, 'store'])->name('banners.store');
    Route::put('admin/banners/update/{id}',[BannerController::class, 'update'])->name('banners.update');
    Route::delete('admin/banners/delete/{id}',[BannerController::class, 'destroy'])->name('banners.delete');
    
    /////////////////////////////////////////////////////////////
    
    Route::get('admin/produtos',[ProdutosController::class, 'index'])->name('produtos.show');
    Route::post('admin/produtos',[ProdutosController::class, 'store'])->name('produtos.store');
    Route::put('admin/produtos/update/{id}',[ProdutosController::class, 'update'])->name('produtos.update');
    Route::delete('admin/produtos/delete/{id}',[ProdutosController::class, 'destroy'])->name('produtos.delete');
    

    /////////////////////////////////////////////////////////////
    Route::get('admin/locais',[LocaisController::class, 'index'])->name('locais.show');
    Route::post('admin/locais',[LocaisController::class, 'store'])->name('locais.store');
    Route::put('admin/locais/update/{id}',[LocaisController::class, 'update'])->name('locais.update');
    Route::delete('admin/locais/delete/{id}',[LocaisController::class, 'destroy'])->name('locais.delete');


    ////////////////////////////////////////////////////////////
    Route::get('admin/depoimentos',[DepoimentosController::class,'index'])->name('depoimentos.show');
    Route::post('admin/depoimentos',[DepoimentosController::class,'store'])->name('depoimentos.store');
    Route::put('admin/depoimentos/update/{id}',[DepoimentosController::class,'update'])->name('depoimentos.update');
    Route::delete('admin/depoimentos/delete/{id}',[DepoimentosController::class,'destroy'])->name('depoimentos.delete');

    Route::get('admin/usuarios',[UsuariosController::class,'index'])->name('usuarios.show');

    /////////////////////////////////////////////////////////////////////
    Route::get('logout',[homeController::class, 'logout'])->name('logout');
    
    Route::get('/registar', function(){
        Auth()->logout();
        return view('welcome');
    })->name('showRegister');

});
