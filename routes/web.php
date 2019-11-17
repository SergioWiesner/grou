<?php

Route::get('/', 'HomeController@index');
Route::get('/oferta/{id}', 'HomeController@verOferta')->name('verOferta');

Auth::routes();
Route::get('/home', 'ofertasController@index')->name('home');
Route::middleware(['auth'])->prefix('sistema')->group(function () {
    Route::get('/aplicar/oferta', 'ofertasController@generarPago');
    Route::post('/aplicar/oferta', 'ofertasController@aplicarOferta');
    Route::resource('ofertas', 'ofertasController');
    Route::resource('productos', 'productosController');
});
