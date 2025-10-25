<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/icones/logo.png')}}" >
    <title>AMZ - Amazonas Distribuidora PB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
      <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .breadcrumb a {
            color: #4a5568; /* gray-700 */
            text-decoration: none;
        }
        .breadcrumb a:hover {
            color: #38a169; /* green-600 */
        }
        .breadcrumb span {
            color: #718096; /* gray-500 */
        }
        .gradient-overlay-destaques {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.4) 100%);
        }
        .gradient-overlay {
            background: linear-gradient(to right, rgba(12, 105, 57, 0.9), rgba(0, 0, 0, 0.6));
        }
        .gradient-overlay-horario {
            background: linear-gradient(to right, rgba(17, 70, 42, 0.31), rgba(0, 0, 0, 0.8)); /* Aumenta a opacidade do preto para 0.8 */
        }
        .gradient-overlay-produtos {
            background: linear-gradient(to right, rgba(84, 85, 84, 0.6), rgba(0, 0, 0, 0.1)); /* Opacidade do preto ajustada para 0.4 */
        }
        .gradient-overlay-quem-somos {
            background: linear-gradient(to right, rgba(186, 187, 186, 0.6), rgba(0, 0, 0, 0.1)); /* Opacidade do preto ajustada para 0.4 */
        }
        .hero-section {
            background-image: "url('{{ asset('images/carrosel_01.jpg') }}')"; /* Placeholder, replace with actual hero image */
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .category-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #333;
            text-decoration: none;
            transition: background-color 0.2s;
        }
        .category-link:hover {
            background-color: #f0f0f0;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 0.5rem;
            overflow: hidden;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        h1{
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: green;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .sidebar-header {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-nav {
            padding: 1rem;
        }

        .sidebar-nav a {
            display: block;
            padding: 0.75rem 0;
            color: #333;
            border-bottom: 1px solid #f5f5f5;
            text-decoration: none;
            transition: all 0.2s;
        }

        .sidebar-nav a:hover {
            color: #2e7d32; /* Verde similar ao seu tema */
            padding-left: 0.5rem;
        }

        .close-sidebar {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        /* Adicione estas regras ao seu CSS existente */
        .category-container {
            position: relative;
        }

        .category-products {
            position: absolute;
            left: 100%;
            top: 0;
            width: 300px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 1rem;
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            max-height: 80vh;
            overflow-y: auto;
        }

        .category-link:hover + .category-products,
        .category-products:hover {
            opacity: 1;
            visibility: visible;
        }

        .product-preview {
            display: flex;
            align-items: center;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s;
        }

        .product-preview:hover {
            background-color: #f8fafc;
        }

        .product-preview img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 0.25rem;
            margin-right: 0.75rem;
        }

        .product-preview-info {
            flex: 1;
        }

        .product-preview-title {
            font-weight: 500;
            font-size: 0.875rem;
            color: #1e293b;
        }

        .product-preview-link {
            font-size: 0.75rem;
            color: #3b82f6;
            text-decoration: none;
        }

        @media (max-width: 1024px) {
            .category-products {
                position: static;
                width: auto;
                box-shadow: none;
                border: none;
                padding: 0.5rem 0 0 1rem;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease, opacity 0.3s ease;
            }

            .category-link:hover + .category-products,
            .category-products:hover {
                max-height: 1000px;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Side bar -->
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <img alt="Logo Amazonas Distribuidora PB" class="h-10" src="{{url('images/icones/logo.png')}}"/>
            <button class="close-sidebar">
                <span class="material-icons">close</span>
            </button>
        </div>
        <nav class="sidebar-nav">
            <a href="/">Início</a>
            <a href="/quem_somos">Quem Somos</a>
            <details class="group">
                <summary class="flex justify-between items-center cursor-pointer list-none py-2 text-gray-700 hover:text-green-600 transition duration-300">
                    <span class="text-gray-700 hover:text-green-600 transition duration-300"><a class="text-gray-700 hover:text-green-600 transition duration-300 cursor-pointer" href="{{url('/produtos')}}">Produtos</a></span>
                    <span class="material-icons group-open:rotate-90 transition-transform">chevron_right</span>
                </summary>
                <ul class="ml-4 mt-2 space-y-2">
                    <li><a href="{{ url('/categorias/material_construcao_comunicacao_visual') }}" class="block py-1 text-gray-600 hover:text-green-500 transition duration-300">Material de Construção e Comunicação Visual</a></li>
                    <li><a href="{{ url('/categorias/tintas') }}" class="block py-1 text-gray-600 hover:text-green-500 transition duration-300">Tintas</a></li>
                    <li><a href="{{ url('/categorias/produtos_quimicos_e_limpeza') }}" class="block py-1 text-gray-600 hover:text-green-500 transition duration-300">Produtos Químicos e de Limpeza</a></li>
                </ul>
            </details>
            <a href="/contato">Contato</a>
        </nav>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="{{url('images/icones/logo.png')}}"/>
                <span class="text-2xl font-bold text-green-700"> AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <div class="relative group">
                    <a class="text-gray-700 hover:text-green-600 transition duration-300 cursor-pointer" href="{{url('/produtos')}}">Produtos</a>
                    <div class="absolute left-0 mt-2 w-64 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="{{ url('/categorias/material_construcao_comunicacao_visual') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Material de Construção e Comunicação Visual</a>
                        <a href="{{ url('/categorias/tintas') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tintas</a>
                        <a href="{{ url('/categorias/produtos_quimicos_e_limpeza') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Produtos Químicos e de Limpeza</a>
                    </div>
                </div>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none open-sidebar">
                <span class="material-icons">menu</span>
            </button>
        </div>
    </header>

    <!-- Hero Section for Products -->
    <section class="bg-white py-20 text-center relative overflow-hidden">
        <div class="gradient-overlay-produtos absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">PRODUTOS</h1>
            <p class="text-lg md:text-xl">Explore nossa vasta gama de produtos de alta qualidade.</p>
        </div>
    </section>


    <!-- Breadcrumb -->
    <nav class="container mx-auto px-6 py-4 text-gray-700 text-sm breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="/">Início</a>
                <span class="material-icons text-base mx-2">chevron_right</span>
            </li>
            <li class="flex items-center">
                <span>Produtos</span>
            </li>
        </ol>
    </nav>

    @if(session('searchError'))
        <div class="container mx-auto px-6">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2" role="alert">
                <strong class="font-bold">Erro!</strong>
                <span class="block sm:inline">{{ session('searchError') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main class="container mx-auto px-6 py-8 flex flex-col md:flex-row">
        <!-- Modifique o Categories Sidebar no seu HTML -->
        <aside class="w-full md:w-1/4 bg-white p-6 rounded-lg shadow-md mb-8 md:mb-0 md:mr-8 h-fit md:sticky md:top-4">
            <h2 class="text-xl font-semibold mb-4">CATEGORIAS</h2>
            <nav>
                <ul>
                    <!-- Gama de Produtos para Comunicação Visual -->
                    <li class="mb-2 category-container">
                        <a href="{{ url('/categorias/material_construcao_comunicacao_visual') }}" class="category-link flex justify-between items-center">
                            Gama de Produtos para Comunicação Visual
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>

                    <!-- Rigidos -->
                    <li class="mb-2 category-container">
                        <a href="#" class="category-link flex justify-between items-center">
                            Rigidos
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>

                    <!-- Flexíveis -->
                    <li class="mb-2 category-container">
                        <a href="#" class="category-link flex justify-between items-center">
                            Flexíveis
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>

                    <!-- Produtos Químicos e de Limpeza -->
                    <li class="mb-2 category-container">
                        <a href="{{ url('/categorias/produtos_quimicos_e_limpeza') }}" class="category-link flex justify-between items-center">
                            Produtos Químicos e de Limpeza
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>

                    <!-- Acessórios / Fitas -->
                    <li class="mb-2 category-container">
                        <a href="#" class="category-link flex justify-between items-center">
                            Acessórios / Fitas
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Product Listing -->
        <section class="w-full md:w-3/4">
            <!-- Material de Construção e Comunicação Visual Section -->
            <div id="contrucao-comunicacao" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Material de Construção e Comunicação Visual</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card ACM -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/acms/acm.jpeg') }}" alt="ACM - Aluminio Composto" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">ACM - Aluminio Composto</h3>
                            <p class="text-gray-600 text-sm">O ACM (Alumínio Composto) Amazonas é um material de construção versátil, utilizado em fachadas, revestimentos e peças decorativas.</p>
                            <a href="{{ url('/produtos/acm') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Fita Dupla Face - Alta Performace -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/fitas/fita_dupla_face_alta_performace.jpeg') }}" alt="Fitas e Adesivos" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Fita Dupla Face - Alta Performace </h3>
                            <p class="text-gray-600 text-sm">A fita dupla face de alta performance é uma ótima opção para quem busca praticidade e eficiência na hora de fixar objeto.</p>
                            <a href="{{ url('/produtos/fita_dupla_face_alta_performance') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Fita Forte Adere - Dupla Face -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/fitas/fita_forte_adere_dupla_face.jpeg') }}" alt="Silicone Neutro" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Fita Forte Adere - Dupla Face</h3>
                            <p class="text-gray-600 text-sm">A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos.</p>
                            <a href="{{ url('/produtos/fita_forte_adere_dupla_face') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Ilhoseira Semi Automática 10mm -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm.jpeg') }}" alt="Ilhoseira Semi Automática 10mm" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Ilhoseira Semi Automática 10mm</h3>
                            <p class="text-gray-600 text-sm">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade.</p>
                            <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Ilhós 10mm -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/ilhos_10mm.jpeg') }}" alt="Ilhós 10mm" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Ilhós 10mm</h3>
                            <p class="text-gray-600 text-sm">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade.</p>
                            <a href="{{ url('/produtos/ilhos_10mm') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Luz Led 12v -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/luz_led_12v.jpeg') }}" alt="Luz Led 12v" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Luz Led 12v</h3>
                            <p class="text-gray-600 text-sm">Módulo LED 6013, 12V para letras caixa luminosos..</p>
                            <a href="{{ url('/produtos/luz_led_12v') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card PVC -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/pvc/pvc_expandido_branco.jpeg') }}" alt="Chapa de PVC Expandido" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Chapa de PVC Expandido</h3>
                            <p class="text-gray-600 text-sm">Seu acabamento liso e uniforme facilitam a impressão, o que proporciona excelentes resultados nos mais diversos processos produtivos.</p>
                            <a href="{{ url('/produtos/pvc_expandido') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Adesivo Branco -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_branco_brilho.jpeg') }}" alt="Adesivo Branco Brilho e Fosco" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Adesivo Branco Brilho e Fosco</h3>
                            <p class="text-gray-600 text-sm">O Vinil Adesivo Branco Brilho é um material perfeito para àqueles que buscam unir praticidade na produção,
                            com uma qualidade de produto superior, junto da boa e velha criatividade.</p>
                            <a href="{{ url('/produtos/adesivo_branco') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Adesivo Perfurado -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_perfurado_01.jpeg') }}" alt="Adesivo Perfurado" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Adesivo Perfurado</h3>
                            <p class="text-gray-600 text-sm">A Película Perfurada oferece controle de luminosidade e temperatura devido as perfurações
                            serem pequenas elas bloqueiam parte da luz solar e dos raios UV</p>
                            <a href="{{ url('/produtos/adesivo_perfurado') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card Adesivo Perfurado -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/silicone_neutro_incolor_260g.jpeg') }}" alt="Silicone Neutro" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Silicone Neutro</h3>
                            <p class="text-gray-600 text-sm">Vedação interna e externa com alto desempenhoVedação interna e externa com alto desempenho.</p>
                            <a href="{{ url('/produtos/silicone_neutro_incolor_260g') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card ACM Color -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/poxpur_flex_pu_colors_base_poliuretano.jpeg') }}" alt="Silicone Neutro" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">SEM TEXTO</h3>
                            <p class="text-gray-600 text-sm">Recuros somente com a imagem</p>
                            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tintas Section -->
            <div id="tintas" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Tintas</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/tinta_sublimatica_kian_1l.jpeg') }}" alt="Tinta Sublimática Kian 1L" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Tinta Sublimática Kian 1L</h3>
                            <p class="text-gray-600 text-sm">A tinta mais conhecida pela sua confiabilidade absoluta. Indicada para uma produção industrial, pela possibilidade de impressão em papéis leves ou não tratados.</p>
                            <a href="{{ url('/produtos/tinta_sublimatica_kian_1l') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/tinta_sublimática_marabu.jpeg') }}" alt="Tinta Sublimática Texa®Jet DX-SCF" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Tinta Sublimática Texa®Jet DX-SCF | Marabu</h3>
                            <p class="text-gray-600 text-sm">A Texa®Jet DX-SCF é uma tinta sublimática à base de água desenvolvida especialmente para impressoras com cabeçotes Epson® micro piezoelétricos.</p>
                            <a href="{{ url('/produtos/tinta_sublimatica_marabu') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/tinta_mara_jet_cyan_500ml.jpeg') }}" alt="Tinta Mara Jet" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Tinta Mara Jet Cyan 500ml</h3>
                            <p class="text-gray-600 text-sm">A Tinta Eco Solvente Mara®Jet DI-LSX é ideal para impressão digital em películas de PVC auto adesivas
                            e materiais encerados à base de PVC.</p>
                            <a href="{{ url('/produtos/tinta_mara_jet_cyan_500ml') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Add more Tintas products as needed -->
                </div>
            </div>

            <!-- Produtos Quimicos e De Limpaza Section -->
            <div id="produtos-quimicos-limpeza" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Produtos Quimicos e De Limpaza</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/primer_pa02_940ml.jpeg') }}" alt="Ilhoseira" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Primer PA02 940ml</h3>
                            <p class="text-gray-600 text-sm">O Primer PA02 ACM tem a função de promover a adesão das Fitas Adesivas de Espuma Acrílica</p>
                            <a href="{{ url('/produtos/primer_pa02_940ml') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card for Álcool Isopropanol ST 900 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}" alt="Álcool Isopropanol ST 900" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Álcool Isopropílico ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônicos.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Add more Outros products as needed -->
                     <div class="product-card">
                        <img src="{{ asset('images/produtos/laca_alt_pro_brilho_1l.jpeg') }}" alt="Laca Alt Pro Brilho 1L" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Laca Alt Pro Brilho 1L</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônicos.</p>
                            <a href="{{ url('/produtos/laca_alt_pro_brilho_1l') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-green-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h4 class="text-xl font-semibold mb-4">Amazonas Distribuidora PB</h4>
                    <p class="text-gray-300">Soluções inovadoras em comunicação visual para sua empresa se destacar.</p>
                    <div class="mt-4 flex space-x-4">
                        <a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#"><span class="material-icons">facebook</span></a>
                        <a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="https://www.instagram.com/amazonasdistribuidorapb/" target="_blank">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                        </a>
                        <a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#"><span class="material-icons">phone</span></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#inicio">Início</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/endereco">Sobre Nós</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#produtos">Produtos</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Localização</h4>
                    <p class="text-gray-300 mb-2">Av Feliciano Dourado, 689 - Torre</p>
                    <p class="text-gray-300 mb-2">João Pessoa - PB, CEP 58040-260</p>
                    <p class="text-gray-300"><strong>Horário:</strong> Seg à Sex, 08h - 17h</p>
                </div>
            </div>
            <div class="border-t border-green-700 pt-8 text-center">
                <p class="text-gray-400">© <span id="currentYear"></span> Amazonas Distribuidora PB. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-6 right-6 bg-green-700 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 ease-in-out opacity-0 invisible">
        <span class="material-icons">arrow_upward</span>
    </button>

    <script>
        // Side bar codes:
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.sidebar-overlay');
            const openBtn = document.querySelector('.open-sidebar');
            const closeBtn = document.querySelector('.close-sidebar');

            openBtn.addEventListener('click', function() {
                sidebar.classList.add('open');
                overlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            });

            closeBtn.addEventListener('click', function() {
                sidebar.classList.remove('open');
                overlay.classList.remove('open');
                document.body.style.overflow = '';
            });

            overlay.addEventListener('click', function() {
                sidebar.classList.remove('open');
                overlay.classList.remove('open');
                document.body.style.overflow = '';
            });
        });

        // Scroll to Top Button functionality
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) { // Show button after scrolling down 200px
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        /*  */
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scroll animation
            });
        });

    </script>
</body>
</html>
