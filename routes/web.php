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
Route::view('/produtos/tinta_sublimatica_kian_1l', 'produtos.tinta_sublimatica_kian_1l');
Route::view('/produtos/primer_pa02_940ml', 'produtos.primer_pa02_940ml');
Route::view('/produtos/laca_alt_pro_brilho_1l', 'produtos.laca_alt_pro_brilho_1l');
Route::view('/produtos/luz_led_12v', 'produtos.luz_led_12v');
Route::view('/produtos/ilhoseira_semi_auto_10mm', 'produtos.ilhoseira_semi_auto_10mm');
Route::view('/produtos/ponteira', 'produtos.ponteira');
Route::view('/produtos/adesivo_branco', 'produtos.adesivo_branco');
Route::view('/produtos/adesivo_perfurado', 'produtos.adesivo_perfurado');
Route::view('/produtos/pvc_expandido', 'produtos.pvc_expandido');
Route::view('/produtos/fita_dupla_face_alta_performance', 'produtos.fita_dupla_face_alta_performance');

Route::get('/produtos', function () {
    return view('produtos.produtos_categoria');
});
