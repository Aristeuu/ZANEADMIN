<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;

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
    return view('welcome');
});

Route::post('/register',[registerController::class, 'register'])->name('register');


Route::get('/login',function()
{
    return view('login');
})->name('showLogin');;

Route::post('/login',[loginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function(){

    Route::get('/home',[homeController::class, 'index' ])->name('home');
    Route::get('admin/banners')->name('banners.show');
    Route::get('admin/produtos')->name('produtos.show');
    Route::get('admin/locais')->name('locais.show');
    Route::get('admin/depoimentos')->name('depoimentos.show');
    Route::get('logout',[homeController::class, 'logout'])->name('logout');

});
