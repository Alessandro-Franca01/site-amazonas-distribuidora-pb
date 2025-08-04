@extends('categorias.layout')

@php
$products = [
    [
        'name' => 'Primer PA02 940ml',
        'image' => 'images/produtos/primer_pa02_940ml.jpeg',
        'description' => 'O Primer PA02 ACM tem a função de promover a adesão das Fitas Adesivas de Espuma Acrílica.',
        'url' => '/produtos/primer_pa02_940ml'
    ],
    [
        'name' => 'Álcool Isopropílico ST 900ml',
        'image' => 'images/produtos/alcool_isopropilico_st_900_ml.jpeg',
        'description' => 'Produto de alta qualidade para limpeza de componentes eletrônicos.',
        'url' => '/produtos/alcool_isopropilico_st_900_ml'
    ],
    [
        'name' => 'Laca Alt Pro Brilho 1L',
        'image' => 'images/produtos/laca_alt_pro_brilho_1l.jpeg',
        'description' => 'Produto de alta qualidade para limpeza de componentes eletrônicos.',
        'url' => '/produtos/laca_alt_pro_brilho_1l'
    ],
];

@endphp

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <nav class="flex items-center text-sm text-gray-500">
                <a href="/" class="hover:text-green-600">Início</a>
                <span class="mx-2">/</span>
                <a href="/produtos" class="hover:text-green-600">Categorias</a>
                <span class="mx-2">/</span>
                <span class="text-gray-700">Produtos Quimicos e Limpeza</span>
            </nav>
        </div>
    </div>
@endsection

@section('hero')
    <!-- Hero Section for Products -->
    <section class="bg-cover bg-center py-20 text-white text-center relative" style="background-image: url('{{ asset('images/produtos/banner_produtos.jpeg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Produtos Quimicos e Limpeza</h1>
            <p class="text-lg md:text-xl">Explore nossa vasta gama de produtos de alta qualidade.</p>
        </div>
    </section>
@endsection

@section('principal')
<div class="container justify-center mx-auto px-6 py-12 flex flex-col md:flex-row gap-8">

    <!-- Product Listing -->
    <section class="w-full md:w-3/4">
        <div id="contrucao-comunicacao" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-3xl text-center font-bold mb-6">Nossos Produtos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($products as $product)
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2 text-gray-800">{{ $product['name'] }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ $product['description'] }}</p>
                            <a href="{{ url($product['url']) }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition-colors duration-300">Ver Detalhes</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection

