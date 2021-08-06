<?php

Route::get('/', 'PemesananController@index')->name('landingPage');

Route::get('/pendaftaran', 'Homecontroller@daftar_view')->name('pendaftaran');
Route::post('/pendaftaranbaru', 'Homecontroller@daftar')->name('daftar');
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/data-user', 'HomeController@user')->name('user');
    Route::delete('/{user}/destroy', 'HomeController@user_destroy')->name('user.destroy');

    Route::get('/edit-product', 'ProductController@edit')->name('product-edit');
    Route::put('/update-product{id}', 'ProductController@update')->name('product-update');
    Route::resource('product', 'ProductController');
    Route::resource('model', 'ModelingController');

    Route::get('/edit-model', 'ModelingController@edit')->name('model-edit');
});
