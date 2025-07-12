<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/quem_somos', 'quem_somos');
Route::view('/contato', 'contato');
Route::view('/produtos/alcool-isopropanol-st-900', 'produtos.alcool_isopropilico_st_900_ml');
Route::view('/produtos/acm', 'produtos.acm');
Route::view('/produtos/fita_forte_adere_dupla_face', 'produtos.fita_forte_adere_dupla_face');

Route::get('/produtos/fita_dupla_face_alta_performance', function () {
    return view('produtos.fita_dupla_face_alta_performance');
});

Route::get('/produtos', function () {
    return view('produtos.produtos_categoria');
});