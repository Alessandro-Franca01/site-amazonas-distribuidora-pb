<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/quem_somos', 'quem_somos');
Route::view('/contato', 'contato');