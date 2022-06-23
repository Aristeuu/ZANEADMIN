<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\LocaisController;
use App\Http\Controllers\DepoimentosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\PortalController;


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

Route::get('/', [PortalController::class, 'inicio'])->name('welcome');


Route::get('/sobre', [PortalController::class, 'sobre'])->name('sobre');

Route::get('/servicos', function() {
    return view('portal.servico');
})->name('servicos');


Route::get('/feature', function(){
    return view('portal.feature');
})->name('feature');

Route::get('/projectos', function(){
    return view('portal.projectos');
})->name('projectos');

Route::get('/equipe', function(){
    return view('portal.equipe');
})->name('equipe');

Route::get('/reuniao', function(){
    return view('portal.reuniao');
})->name('reuniao');



Route::post('/register',[registerController::class, 'register'])->name('register');


Route::get('/login',function()
{
    return view('login');
})->name('showLogin')->middleware('guest');

Route::get('/registar', function(){    
    return view('welcome');
})->name('showRegister')->middleware('guest');

Route::post('/login',[loginController::class, 'login'])->name('login');

Route::post('agendamento',[AgendamentoController::class,'enviar'])->name('agendamento.enviar');


Route::middleware(['auth'])->group(function(){

    Route::get('/home',[homeController::class, 'index' ])->name('home');

    Route::get('admin/banners',[BannerController::class, 'index'])->name('banners.show');
    Route::post('admin/banners',[BannerController::class, 'store'])->name('banners.store');
    Route::put('admin/banners/update/{id}',[BannerController::class, 'update'])->name('banners.update');
    Route::delete('admin/banners/delete/{id}',[BannerController::class, 'destroy'])->name('banners.delete');
    
    /////////////////////////////////////////////////////////////
    Route::get('admin/servicos',[ServicosController::class, 'index'])->name('servicos.show');
    Route::post('admin/servicos',[ServicosController::class, 'store'])->name('servicos.store');
    Route::put('admin/servicos/update/{id}',[ServicosController::class, 'update'])->name('servicos.update');
    Route::delete('admin/servicos/delete/{id}',[ServicosController::class, 'destroy'])->name('servicos.delete');


    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('admin/projectos',[ProjectsController::class, 'index'])->name('produtos.show');
    Route::post('admin/projectos',[ProjectsController::class, 'store'])->name('produtos.store');
    Route::put('admin/projectos/update/{id}',[ProjectsController::class, 'update'])->name('produtos.update');
    Route::delete('admin/projectos/delete/{id}',[ProjectsController::class, 'destroy'])->name('produtos.delete');

    Route::get('admin/feature',[FeatureController::class, 'index'])->name('feature.show');
    Route::post('admin/feature',[FeatureController::class, 'store'])->name('feature.store');
    Route::put('admin/feature/update/{id}',[FeatureController::class, 'update'])->name('feature.update');
    Route::delete('admin/feature/delete/{id}',[FeatureController::class, 'destroy'])->name('feature.delete');
    

    /////////////////////////////////////////////////////////////
    Route::get('admin/categorias',[CategoriaController::class, 'index'])->name('categorias.show');
    Route::post('admin/categorias',[CategoriaController::class, 'store'])->name('categorias.store');
    Route::put('admin/categorias/update/{id}',[CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('admin/categorias/delete/{id}',[CategoriaController::class, 'destroy'])->name('categorias.delete');
    Route::put('admin/categorias/background/{id}',[CategoriaController::class, 'setBackground'])->name('categorias.background');


    Route::get('admin/fotos',[FotoController::class, 'index'])->name('fotos.show');
    Route::post('admin/fotos',[FotoController::class, 'store'])->name('fotos.store');
    Route::put('admin/fotos/update/{id}',[FotoController::class, 'update'])->name('fotos.update');
    Route::delete('admin/fotos/delete/{id}',[FotoController::class, 'destroy'])->name('fotos.delete');

    Route::get('admin/equipe',[EquipeController::class, 'index'])->name('equipe.show');
    Route::post('admin/equipe',[EquipeController::class, 'store'])->name('equipe.store');
    Route::put('admin/equipe/update/{id}',[EquipeController::class, 'update'])->name('equipe.update');
    Route::delete('admin/equipe/delete/{id}',[EquipeController::class, 'destroy'])->name('equipe.delete');


    ////////////////////////////////////////////////////////////
    Route::get('admin/depoimentos',[DepoimentosController::class,'index'])->name('depoimentos.show');
    Route::post('admin/depoimentos',[DepoimentosController::class,'store'])->name('depoimentos.store');
    Route::put('admin/depoimentos/update/{id}',[DepoimentosController::class,'update'])->name('depoimentos.update');
    Route::delete('admin/depoimentos/delete/{id}',[DepoimentosController::class,'destroy'])->name('depoimentos.delete');

    Route::get('admin/usuarios',[UsuariosController::class,'index'])->name('usuarios.show');

    Route::get('admin/parceiros',[ParceirosController::class, 'index'])->name('parceiros.show');
    Route::post('admin/parceiros',[ParceirosController::class, 'store'])->name('parceiros.store');
    Route::put('admin/parceiros/update/{id}',[ParceirosController::class, 'update'])->name('parceiros.update');
    Route::delete('admin/parceiros/delete/{id}',[ParceirosController::class, 'destroy'])->name('parceiros.delete');

    

    /////////////////////////////////////////////////////////////////////
    Route::get('logout',[homeController::class, 'logout'])->name('logout');

    /*
    Route::get('/registar', function(){
        Auth()->logout();
        return view('welcome');
    })->name('showRegister');
    */

});
