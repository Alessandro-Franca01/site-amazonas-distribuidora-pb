<!DOCTYPE html>
<html lang="pt-BR"><head>
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
        .hero-bg {
            background-image: url('image-bg.png');
            background-size: cover;
            background-position: center;
        }
        .gradient-overlay {
            background: linear-gradient(to right, rgba(12, 105, 57, 0.9), rgba(0, 0, 0, 0.6));
        }
        .gradient-overlay-horario {
            background: linear-gradient(to right, rgba(17, 70, 42, 0.31), rgba(0, 0, 0, 0.8)); /* Aumenta a opacidade do preto para 0.8 */
        }
        .gradient-overlay-destaques {
            background: linear-gradient(to right, rgba(239, 245, 235, 0.9), rgba(0, 0, 0, 0.4)); /* Opacidade do preto ajustada para 0.4 */
        }
        .gradient-overlay-produtos {
            background: linear-gradient(to right, rgba(84, 85, 84, 0.6), rgba(0, 0, 0, 0.1)); /* Opacidade do preto ajustada para 0.4 */
        }
        .gradient-overlay-quem-somos {
            background: linear-gradient(to right, rgba(186, 187, 186, 0.6), rgba(0, 0, 0, 0.1)); /* Opacidade do preto ajustada para 0.4 */
        }
        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
            opacity: 0.5;
            margin: 0 4px;
            display: inline-block;
            transition: opacity 0.3s;
        }
        .carousel-dot.active {
            opacity: 1;
            background: #fff;
        }
        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 30;
            transition: all 0.3s ease;
        }
        .carousel-arrow:hover {
            background-color: rgba(255, 255, 255, 0.6);
        }
        .carousel-arrow-left {
            left: 20px;
        }
        .carousel-arrow-right {
            right: 20px;
        }
        .animate-bounce {
            animation: bounce 2s ease-in-out;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
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
        .flex-grow {
            flex-grow: 1;
        }

        .transition-colors {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .hover\:bg-green-700:hover {
            background-color: #2e7d32;
        }

        .social-icon {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .social-icon svg, .social-icon .material-icons {
            margin-right: 0.5rem;
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
</head>
<body class="bg-gray-100">
<body>
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <img alt="Logo Amazonas Distribuidora PB" class="h-10" src="{{url('images/icones/logo.png')}}"/>
            <button class="close-sidebar">
                <span class="material-icons">close</span>
            </button>
        </div>
        <nav class="sidebar-nav">
            <a href="#inicio">Início</a>
            <a href="/quem_somos">Quem Somos</a>
            <a href="/produtos">Produtos</a>
            <a href="/contato">Contato</a>
        </nav>
    </div>

    <!-- Seu header existente - modifique o botão de menu -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="{{url('images/icones/logo.png')}}"/>
                <span class="text-2xl font-bold text-green-700"> AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#inicio">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/produtos">Produtos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none open-sidebar">
                <span class="material-icons">menu</span>
            </button>
        </div>
    </header>

    <main>
        <section class="hero-bg h-[calc(100vh-100px)] relative flex items-center justify-center" id="inicio">
            <div class="gradient-overlay absolute inset-0"></div>
            <div class="container mx-auto px-6 h-full flex items-center relative z-10">
                <!-- Carrossel -->
                <div class="w-full mx-auto">
                    <div id="hero-carousel" class="relative overflow-hidden rounded-xl shadow-2xl h-96 lg:h-[calc(100vh-200px)]">
                        <div class="carousel-slide">
                            <img src="{{ asset('images/home/empresa-de-revestimento-de-acm.jpg') }}" class="w-full hero-carousel-img h-full object-cover lg:hidden" alt="Banner 1 Mobile">
                            <img src="{{ asset('images/carrosel_teste.png') }}" class="w-full hero-carousel-img h-full object-cover hidden lg:block" alt="Banner 1 Desktop">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-2xl md:text-5xl font-bold text-white mb-4">VALORIZE SUA MARCA</h1>
                            </div>
                        </div>
                        <div class="carousel-slide hidden">
                            <img src="{{ asset('images/home/carrossel_mobile02.jpeg') }}" class="w-full hero-carousel-img h-full object-cover lg:hidden" alt="Banner 2 Mobile">
                            <img src="{{ asset('images/materiais-atualizacao-fachadas.png') }}" class="w-full hero-carousel-img h-full object-cover hidden lg:block" alt="Banner 2 Desktop">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-2xl md:text-5xl font-bold text-white mb-4">Soluções em Comunicação Visual</h1>
                                <p class="text-base md:text-xl text-white mb-2">Qualidade e inovação para sua marca</p>
                            </div>
                        </div>
                        <div class="carousel-slide hidden">
                            <img src="{{ asset('images/home/carrossel_mobile03.jpeg') }}" class="w-full hero-carousel-img h-full object-cover lg:hidden" alt="Banner 3 Mobile">
                            <img src="{{ asset('images/carrosel_01.jpg') }}" class="w-full hero-carousel-img h-full object-cover hidden lg:block" alt="Banner 3 Desktop">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-2xl md:text-5xl font-bold text-white mb-4">Inovação em Cada Detalhe</h1>
                                <p class="text-base md:text-xl text-white mb-2">Transformando ideias em realidade</p>
                            </div>
                        </div>
                        <div class="carousel-slide hidden">
                            <img src="{{ asset('images/home/carrossel_mobile04.jpeg') }}" class="w-full hero-carousel-img h-full object-cover lg:hidden" alt="Banner 4 Mobile">
                            <img src="{{ asset('images/carrosel_02.png') }}" class="w-full hero-carousel-img h-full object-cover hidden lg:block" alt="Banner 4 Desktop">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-2xl md:text-5xl font-bold text-white mb-4">Qualidade que Você Confia</h1>
                                <p class="text-base md:text-xl text-white mb-2">Os melhores materiais para o seu projeto</p>
                            </div>
                        </div>
                        <!-- Setas de navegação -->
                        <div class="carousel-arrow carousel-arrow-left" id="prev-slide">
                            <span class="material-icons text-white text-3xl">chevron_left</span>
                        </div>
                        <div class="carousel-arrow carousel-arrow-right" id="next-slide">
                            <span class="material-icons text-white text-3xl">chevron_right</span>
                        </div>
                        <!-- Dots -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex z-20">
                            <span class="carousel-dot active"></span>
                            <span class="carousel-dot"></span>
                            <span class="carousel-dot"></span>
                            <span class="carousel-dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos em Destaque -->
        <section class="py-16 bg-gray-100" id="destaques">

            <div class="container mx-auto px-6 relative z-10">
                <h2 class="text-4xl font-bold text-center text-green-700 mb-12"> NOSSOS PRODUTOS</h2>

                <!-- Linha dupla (apenas em desktop) -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acm_composto_NO_IMG.jpg') }}" alt="SEM IMG"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">ACM</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acrilico_NO_IMG.jpg') }}" alt="SEM IMG"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">PVC</h3>
                        </div>
                    </div>
                </div>
                <!-- Linha dupla (apenas em desktop) -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acm_composto_NO_IMG.jpg') }}" alt="SEM IMG"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">ADSIVO</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acrilico_NO_IMG.jpg') }}" alt="SEM IMG"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">LONA</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos -->
        <section class="py-16 bg-white relative" id="produtos">

            <div class="mb-12 max-w-2xl mx-auto">
                <form action="{{ route('product.search') }}" method="GET" class="flex items-center gap-2" id="product-search-form">
                    <div class="relative flex-grow">
                        <input class="w-full py-3 pl-12 pr-4 text-gray-700 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none shadow-sm"
                               id="search-product"
                               name="q"
                               placeholder="Buscar por produto..."
                               type="text"
                               list="products-list"
                               required
                               autocomplete="off"/>
                        <span class="material-icons absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">search</span>

                        <datalist id="products-list">
                            @foreach(\App\Enums\ProdutoEnum::getNomesProdutos() as $product)
                                <option value="{{ $product }}"></option>
                            @endforeach
                        </datalist>
                    </div>

                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg shadow-md transition-colors duration-300 flex items-center justify-center">
                        <span class="material-icons mr-2">search</span>
                        Buscar
                    </button>
                </form>
                
                
            </div>
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Produtos em Destaques</h2>

                    <div class="grid md:grid-cols-4 gap-8 mb-8">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Primer" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/primer_pa02_940ml.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Primer</h3>
                                <p class="text-gray-600 text-sm">Soluções impactantes para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/primer_pa02_940ml') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="ACM - Aluminio Composto" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/acms/acm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">ACM - Aluminio Composto</h3>
                                <p class="text-gray-600 text-sm">O ACM (Alumínio Composto) Amazonas é um material de construção versátil, utilizado em fachadas, revestimentos e peças decorativas.</p>
                                <a href="{{ url('/produtos/acm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Adesivos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/fitas/fita_dupla_face_alta_performace.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Fita Dupla Face - Alta Performace</h3>
                                <p class="text-gray-600 text-sm">A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos.</p>
                                <a href="{{ url('/produtos/fita_forte_adere_dupla_face') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Ilhoseira" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhoseira Semi Automática 10mm</h3>
                                <p class="text-gray-600 text-sm">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade na aplicação de ilhós em diferentes materiais.</p>
                                <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Primer" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/primer_pa02_940ml.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Primer</h3>
                                <p class="text-gray-600 text-sm">Soluções impactantes para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/primer_pa02_940ml') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="ACM - Aluminio Composto" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/acms/acm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">ACM - Aluminio Composto</h3>
                                <p class="text-gray-600 text-sm">O ACM (Alumínio Composto) Amazonas é um material de construção versátil, utilizado em fachadas, revestimentos e peças decorativas.</p>
                                <a href="{{ url('/produtos/acm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Adesivos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/fitas/fita_dupla_face_alta_performace.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Fita Dupla Face - Alta Performace</h3>
                                <p class="text-gray-600 text-sm">A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos.</p>
                                <a href="{{ url('/produtos/fita_forte_adere_dupla_face') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Ilhoseira" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhoseira Semi Automática 10mm</h3>
                                <p class="text-gray-600 text-sm">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade na aplicação de ilhós em diferentes materiais.</p>
                                <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mx-auto px-6 mt-10">
                    <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Outros Produtos</h2>

                    <div class="grid md:grid-cols-4 gap-8 mt-8">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="PVC" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/pvc/pvc_expandido_branco.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">PVC Expandido</h3>
                                <p class="text-gray-600 text-sm">PVC Expandido é uma solução versátil para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/pvc_expandido_branco') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Adesivo Perfurado" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/adesivo/adesivo_perfurado_01.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Adesivo Perfurado</h3>
                                <p class="text-gray-600 text-sm">Adesivo Perfurado é uma solução versátil para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/adesivo_perfurado_branco') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Ilhos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/ilhos_10mm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhós 10mm</h3>
                                <p class="text-gray-600 text-sm">Ilhós macho 10mm P/ ilhóseria Semi automática é confeccionado em ferro galvanizado.</p>
                                <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Tinta Sublimática Kian 1L" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/tinta_sublimatica_kian_1l.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Tinta Sublimática Kian 1L</h3>
                                <p class="text-gray-600 text-sm">A tinta mais conhecida pela sua confiabilidade absoluta. Indicada para uma produção industrial, pela possibilidade de impressão em papéis leves ou não tratados.</p>
                                <a href="{{ url('/produtos/tinta_sublimatica_kian_1l') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="PVC" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/pvc/pvc_expandido_branco.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">PVC Expandido</h3>
                                <p class="text-gray-600 text-sm">PVC Expandido é uma solução versátil para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/pvc_expandido_branco') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Adesivo Perfurado" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/adesivo/adesivo_perfurado_01.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Adesivo Perfurado</h3>
                                <p class="text-gray-600 text-sm">Adesivo Perfurado é uma solução versátil para destacar a identidade visual da sua empresa.</p>
                                <a href="{{ url('/produtos/adesivo_perfurado_branco') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Ilhos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/ilhos_10mm.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhós 10mm</h3>
                                <p class="text-gray-600 text-sm">Ilhós macho 10mm P/ ilhóseria Semi automática é confeccionado em ferro galvanizado.</p>
                                <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                            <img alt="Tinta Sublimática Kian 1L" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/tinta_sublimatica_kian_1l.jpeg') }}"/>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">Tinta Sublimática Kian 1L</h3>
                                <p class="text-gray-600 text-sm">A tinta mais conhecida pela sua confiabilidade absoluta. Indicada para uma produção industrial, pela possibilidade de impressão em papéis leves ou não tratados.</p>
                                <a href="{{ url('/produtos/tinta_sublimatica_kian_1l') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a
                        class="bg-green-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700 transition duration-300 text-lg shadow-md"
                        href="{{ url('/produtos') }}">
                        Ver Todos os Produtos
                    </a>
                </div>
        </section>

        <!-- Seção de Promoção Instagram e WhatsApp -->
        <section class="py-16 bg-gray-100" id="promocao">
            <div class="container mx-auto px-6 promo-section md:flex md:justify-around">
                <div class="promo-item text-center mb-8 md:mb-0 md:w-1/2 px-4">
                    <a href="https://www.instagram.com/amazonasdistribuidorapb/" target="_blank" class="block">
                        <img src="{{ asset('images/instagram_banner.png') }}"
                            alt="Instagram Amazonas Distribuidora PB"
                            class="promo-img rounded-lg shadow-lg w-full h-80 object-cover hover:shadow-xl transition-shadow duration-300"/>
                    </a>
                    <h3 class="text-2xl font-bold text-green-700 mt-4">Siga-nos no Instagram!</h3>
                    <p class="text-gray-600">Fique por dentro das novidades e promoções.</p>
                </div>
                <div class="promo-item text-center md:w-1/2 px-4">
                    <a href="https://api.whatsapp.com/send?phone=83998530445" target="_blank" class="block">
                        <img src="{{ asset('images/atendimento_whatssap.jpeg') }}"
                            alt="WhatsApp Amazonas Distribuidora PB"
                            class="promo-img rounded-lg shadow-lg w-full h-80 object-cover hover:shadow-xl transition-shadow duration-300"/>
                    </a>
                    <h3 class="text-2xl font-bold text-green-700 mt-4">Fale Conosco pelo WhatsApp!</h3>
                    <p class="text-gray-600">Atendimento rápido e personalizado.</p>
                </div>
            </div>
    </section>

    <!-- Botão do whatssap -->
    <a href="https://api.whatsapp.com/send?phone=83998530445"
        target="_blank"
        class="fixed bottom-6 left-6 z-50 bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transition-all duration-300 hover:shadow-xl animate-bounce"
        style="animation-iteration-count: 3;">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>
        <span class="sr-only">WhatsApp</span>
    </a>
    </main>

    <footer class="bg-green-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8"> <!-- Mudei para 4 colunas -->
                <div>
                    <h4 class="text-xl font-semibold mb-4">Amazonas Distribuidora PB</h4>
                    <p class="text-gray-300">Soluções inovadoras em comunicação visual para sua empresa se destacar.</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/">Início</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/quem_somos">Sobre Nós</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/#produtos">Produtos</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Redes Sociais</h4>
                    <div class="space-y-3">
                        <div class="social-icon">
                            <a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="https://www.instagram.com/amazonasdistribuidorapb/">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                            </svg>
                            </a>
                            <span>Instagram</span>
                        </div>
                        <div class="social-icon">
                            <a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="https://api.whatsapp.com/send?phone=5583993615903">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                            </a>
                            <span>WhatsApp</span>
                        </div>
                        <div class="social-icon">
                            <span class="material-icons">phone</span>
                            <span>(83) 3578-8516</span>
                        </div>
                    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-product');
            const searchButton = document.querySelector('form[action="{{ route("product.search") }}"] button[type="submit"]');

            // Habilitar/desabilitar botão conforme conteúdo
            searchInput.addEventListener('input', function() {
                searchButton.disabled = this.value.trim() === '';
            });

            // Inicialmente desabilitar o botão se o campo estiver vazio
            searchButton.disabled = searchInput.value.trim() === '';

            document.getElementById('product-search-form').addEventListener('submit', function(event) {
                // const searchInput = document.getElementById('search-input');
                const datalistOptions = document.getElementById('products-list').options;
                let productFound = false;

                for (let i = 0; i < datalistOptions.length; i++) {
                    if (datalistOptions[i].value === searchInput.value) {
                        productFound = true;
                        break;
                    }
                }

                if (!productFound) {
                    event.preventDefault(); // Prevent form submission
                    // <br><p class="error-message text-center" style="color: red; margin-top: 10px;">Produto não encontrado</p>
                    const errorMessage = document.createElement('p');
                    errorMessage.textContent = 'Produto não encontrado';
                    errorMessage.style.color = 'red';
                    errorMessage.style.marginTop = '10px';
                    errorMessage.style.textAlign = 'center';
                    const form = document.getElementById('product-search-form');
                    const existingError = form.querySelector('.error-message');
                    if (existingError) {
                        existingError.remove();
                    }
                    errorMessage.classList.add('error-message');
                    form.appendChild(errorMessage);
                }
            });

            // Side bar codes:
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

            // Carrossel com setas de navegação
            const slides = document.querySelectorAll('.carousel-slide');
            const dots = document.querySelectorAll('.carousel-dot');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            let current = 0;
            let slideInterval;

            // Função para mostrar o slide atual
            function showSlide(index) {
                // Esconde todos os slides
                slides.forEach(slide => slide.classList.add('hidden'));
                dots.forEach(dot => dot.classList.remove('active'));

                // Mostra o slide atual
                slides[index].classList.remove('hidden');
                dots[index].classList.add('active');
                current = index;
            }

            // Função para ir para o próximo slide
            function nextSlide() {
                const next = (current + 1) % slides.length;
                showSlide(next);
            }

            // Função para ir para o slide anterior
            function prevSlide() {
                const prev = (current - 1 + slides.length) % slides.length;
                showSlide(prev);
            }

            // Adiciona eventos de clique aos botões
            if (prevButton && nextButton) {
                prevButton.addEventListener('click', () => {
                    prevSlide();
                    resetInterval();
                });

                nextButton.addEventListener('click', () => {
                    nextSlide();
                    resetInterval();
                });
            }

            // Função para reiniciar o intervalo automático
            function resetInterval() {
                clearInterval(slideInterval);
                startInterval();
            }

            // Função para iniciar o intervalo automático
            function startInterval() {
                slideInterval = setInterval(nextSlide, 4000);
            }

            // Inicia o carrossel
            startInterval();
        });
    </script>
</body>
</html>