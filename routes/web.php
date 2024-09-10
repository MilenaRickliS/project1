<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cidades', 'App\Http\Controllers\CidadeController@index') -> name('cidades.index');
Route::get('/cidades/{nome}', 'App\Http\Controllers\CidadeController@show') -> name('cidades.show');