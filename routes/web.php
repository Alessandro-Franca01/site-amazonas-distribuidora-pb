<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/quem_somos', 'quem_somos');
Route::view('/contato', 'contato');
Route::view('/produtos/alcool-isopropanol-st-900', 'produtos.alcool_isopropanol_st_900');
Route::get('/produtos', function () {
    return view('produtos.produtos_categoria');
});