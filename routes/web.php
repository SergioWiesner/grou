<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'ofertasController@index')->name('home');

Route::prefix('sistema')->group(function () {
    Route::resource('ofertas', 'ofertasController');
});
