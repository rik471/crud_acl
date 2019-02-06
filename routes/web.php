<?php

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

Route::get('/produtos', 'ProdutosController@index')
    ->name('produtos.index');
Route::get('/create', 'ProdutosController@create')
    ->name('produtos.create');
Route::post('/store', 'ProdutosController@store')
    ->name('produtos.create.store');
