<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', 'Homecontroller@daftar_view')->name('pendaftaran');
Route::post('/pendaftaranbaru', 'Homecontroller@daftar')->name('daftar');
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/data-user', 'HomeController@user')->name('user');
    Route::delete('/{user}/destroy', 'HomeController@user_destroy')->name('user.destroy');
});
