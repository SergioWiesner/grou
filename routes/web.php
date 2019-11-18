<?php

Route::get('/', 'HomeController@index');
Route::get('/oferta/{id}', 'HomeController@verOferta')->name('verOferta');

Auth::routes();
Route::get('/home', 'ofertasController@index')->name('home');
Route::middleware(['auth'])->prefix('sistema')->group(function () {
    Route::get('/aplicar/oferta/{id}', 'HomeController@generarPago')->name('generarPago');
    Route::get('/aplicar/oferta/{idoferta}/{idusuario}', 'HomeController@aplicarOferta')->name('aplicarOferta');
    Route::resource('ofertas', 'ofertasController');
    Route::resource('productos', 'productosController');
    Route::resource('historial/compras', 'historialComprasController');
});
