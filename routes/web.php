<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','\App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos','\App\Http\Controllers\SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', '\App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/login', function (){ return 'Login!';})->name('site.login');

//Agrupamento de rotas do App
Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){ return 'Clientes!';})->name('app.clientes');
    Route::get('/fornecedores', function (){ return 'fornecedores!';})->name('app.fornecedores');
    Route::get('/produtos', function (){ return 'Produtos!';})->name('app/produtos');
});
