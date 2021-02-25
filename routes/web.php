<?php

use Illuminate\Support\Facades\Route;



//Route::get('/', 'App\Http\Controllers\ClienteController@index')->name('cliente.index'); 

Route::get('/solicitud','App\Http\Controllers\ClienteController@show')->name('cliente.solicitud');

Route::get('/','App\Http\Controllers\ClienteController@formulario');

Route::post('crear','App\Http\Controllers\ClienteController@crear')->name('cliente.crear');
?>  