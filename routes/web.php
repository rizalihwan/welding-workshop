<?php

Route::get('/', 'PemesananController@index')->name('landingPage');

Route::get('/pendaftaran', 'Homecontroller@daftar_view')->name('pendaftaran');
Route::post('/pendaftaranbaru', 'Homecontroller@daftar')->name('daftar');
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/data-user', 'HomeController@user')->name('user');
    Route::delete('/{user}/destroy', 'HomeController@user_destroy')->name('user.destroy');

    Route::resource('product', 'ProductController');
    Route::resource('model', 'ModelingController');
});
