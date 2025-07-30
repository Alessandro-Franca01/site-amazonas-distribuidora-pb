<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\ProdutoEnum;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('q', ''));

        if (empty($query)) {
            return redirect()->route('produtos');
        }

        $queryLower = strtolower($query);
        $produtos = ProdutoEnum::getProdutos();

        foreach ($produtos as $productName => $url) {
            if (strtolower($productName) === $queryLower) {
                return redirect()->to($url);
            }
        }

        return redirect()->route('produtos')->with('searchError', 'Produto não encontrado');
    }

    public function getProducts()
    {
        return response()->json(ProdutoEnum::getNomesProdutos());
    }
}
