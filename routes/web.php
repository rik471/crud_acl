<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('web', 'auth')->get('/admin', 'AdminController@index')->name('admin');
