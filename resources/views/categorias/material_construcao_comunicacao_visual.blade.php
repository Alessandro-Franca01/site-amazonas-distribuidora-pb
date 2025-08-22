@extends('categorias.layout')

@php
$products = [
    [
        'name' => 'ACM - Aluminio Composto',
        'image' => 'images/produtos/acms/acm.jpeg',
        'description' => 'O ACM (Alumínio Composto) Amazonas é um material de construção versátil, utilizado em fachadas, revestimentos e peças decorativas.',
        'url' => '/produtos/acm'
    ],
    [
        'name' => 'Fita Dupla Face - Alta Performace',
        'image' => 'images/produtos/fitas/fita_dupla_face_alta_performace.jpeg',
        'description' => 'A fita dupla face de alta performance é uma ótima opção para quem busca praticidade e eficiência na hora de fixar objeto.',
        'url' => '/produtos/fita_dupla_face_alta_performance'
    ],
    [
        'name' => 'Fita Forte Adere - Dupla Face',
        'image' => 'images/produtos/fitas/fita_forte_adere_dupla_face.jpeg',
        'description' => 'A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos.',
        'url' => '/produtos/fita_forte_adere_dupla_face'
    ],
    [
        'name' => 'Ilhoseira Semi Automática 10mm',
        'image' => 'images/produtos/ilhoseira_semi_auto_10mm.jpeg',
        'description' => 'A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade.',
        'url' => '/produtos/ilhoseira_semi_auto_10mm'
    ],
    [
        'name' => 'Ilhós 10mm',
        'image' => 'images/produtos/ilhos_10mm.jpeg',
        'description' => 'A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade.',
        'url' => '/produtos/ilhos_10mm'
    ],
    [
        'name' => 'Luz Led 12v',
        'image' => 'images/produtos/luz_led_12v.jpeg',
        'description' => 'Módulo LED 6013, 12V para letras caixa luminosos..',
        'url' => '/produtos/luz_led_12v'
    ],
    [
        'name' => 'Chapa de PVC Expandido',
        'image' => 'images/produtos/pvc/pvc_expandido_branco.jpeg',
        'description' => 'Seu acabamento liso e uniforme facilitam a impressão, o que proporciona excelentes resultados nos mais diversos processos produtivos.',
        'url' => '/produtos/pvc_expandido'
    ],
    [
        'name' => 'Adesivo Branco Brilho e Fosco',
        'image' => 'images/produtos/adesivo/adesivo_branco_brilho.jpeg',
        'description' => 'O Vinil Adesivo Branco Brilho é um material perfeito para àqueles que buscam unir praticidade na produção, com uma qualidade de produto superior.',
        'url' => '/produtos/adesivo_branco'
    ],
    [
        'name' => 'Adesivo Perfurado',
        'image' => 'images/produtos/adesivo/adesivo_perfurado_01.jpeg',
        'description' => 'A Película Perfurada oferece controle de luminosidade e temperatura devido as perfurações serem pequenas elas bloqueiam parte da luz solar e dos raios UV.',
        'url' => '/produtos/adesivo_perfurado'
    ],
    [
        'name' => 'Silicone Neutro',
        'image' => 'images/produtos/silicone_neutro_incolor_260g.jpeg',
        'description' => 'Vedação interna e externa com alto desempenhoVedação interna e externa com alto desempenho.',
        'url' => '/produtos/silicone_neutro_incolor_260g'
    ],
    [
        'name' => 'Poxpur Flex PU Colors',
        'image' => 'images/produtos/poxpur_flex_pu_colors_base_poliuretano.jpeg',
        'description' => 'Poxpur Flex PU Colors é um selante e adesivo elástico monocomponente de alta performance, à base de poliuretano.',
        'url' => '/produtos/poxpur_flex_pu_colors_base_poliuretano'
    ],
];

// Sidebar: Nao esta sendo usado
$categories = [
    'Impressão & Fitas',
    'Comunicação Visual',
    'Construção Civil',
    'Serigrafia e Brindes',
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
                <span class="text-gray-700">Material de Construção e Comunicação Visual</span>
            </nav>
        </div>
    </div>
@endsection

@section('hero')
    <!-- Hero Section for Products -->
    <section class="bg-white py-20 text-center relative overflow-hidden">
        <div class="gradient-overlay-produtos absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Gama de Produtos para Comunicação Visual</h1>
            <p class="text-lg md:text-xl">Explore nossa vasta gama de produtos de alta qualidade.</p>
        </div>
    </section>
@endsection

@section('principal')
<div class="container mx-auto px-6 py-12 flex flex-col md:flex-row gap-8 justify-center">
    <!-- Product Listing -->
    <section class="w-full md:w-3/4">
        <div id="contrucao-comunicacao" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-center mb-6">Nossos Produtos</h2>
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

@section('scripts')
    <script>
        // Scroll to Top Button functionality
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    </script>
@endsection