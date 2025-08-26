<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSearchController;

Route::get('/', function () {
    return view('home');
});

Route::view('/quem_somos', 'quem_somos');
Route::get('/contato', function () {
    return view('contato');
});
Route::post('/contato', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/error', function () {
    return view('error');
})->name('error');

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
Route::view('/produtos/silicone_neutro_incolor_260g', 'produtos.silicone_neutro_incolor_260g');
Route::view('/produtos/tinta_sublimática_marabu', 'produtos.tinta_sublimática_marabu');
Route::view('/produtos/tinta_mara_jet_cyan_500ml', 'produtos.tinta_mara_jet_cyan_500ml');
Route::view('/produtos/poxpur_flex_pu_colors_base_poliuretano', 'produtos.poxpur_flex_pu_colors_base_poliuretano');

// Rota para a página de busca de produtos
Route::view('/categorias/material_construcao_comunicacao_visual', 'categorias.material_construcao_comunicacao_visual');
Route::view('/categorias/tintas', 'categorias.tintas');
Route::view('/categorias/produtos_quimicos_e_limpeza', 'categorias.produtos_quimicos_e_limpeza');

Route::get('/produtos', function () {
    return view('categorias.index');
})->name('produtos');

Route::get('/buscar', [ProductSearchController::class, 'search'])->name('product.search');
Route::get('/api/products', [ProductSearchController::class, 'getProducts'])->name('api.products');
