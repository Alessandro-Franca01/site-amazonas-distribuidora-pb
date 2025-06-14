<!DOCTYPE html>
<html lang="pt-BR"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/logo01-removebg.png')}}" >
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
    </style>
</head>
<body class="bg-gray-100">
<body>
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="{{url('images/logo01-removebg.png')}}"/>
                <span class="text-2xl font-bold text-green-700"> AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#inicio">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/produtos">Produtos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none">
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
                    <div id="hero-carousel" class="relative overflow-hidden rounded-xl shadow-2xl h-[calc(100vh-200px)]">
                        <div class="carousel-slide">
                            <img src="{{ asset('images/carrosel_teste.png') }}" class="w-full hero-carousel-img h-full object-cover" alt="Banner 1">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">VALORIZE SUA MARCA</h1>
                            </div>
                        </div>
                        <div class="carousel-slide hidden">
                            <img src="{{ asset('images/materiais-atualizacao-fachadas.png') }}" class="w-full hero-carousel-img h-full object-cover" alt="Banner 2">
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
                                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Soluções em Comunicação Visual</h1>
                                <p class="text-xl text-white mb-2">Qualidade e inovação para sua marca</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Section for Products -->
        <section class="bg-white py-20 text-center relative overflow-hidden" id="casos_de_uso">
            <div class="gradient-overlay-produtos absolute inset-0"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/chapas_policarbonato.jpg') }}" alt="Chapas de Policarbonato" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">CASO DE USO 1</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acm_composto.jpg') }}" alt="ACM" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">CASO DE USO 2</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acrilico.jpg') }}" alt="Acrílico" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">CASO DE USO 3</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos em Destaque -->
        <section class="py-16 bg-gray-100" id="destaques">
            
            <div class="container mx-auto px-6 relative z-10">
                <h2 class="text-4xl font-bold text-center text-green-700 mb-12">PRODUTOS EM DESTAQUE</h2>
                
                <!-- Linha única (full width) -->
                <div class="grid grid-cols-1 mb-8">
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64 lg:h-96">
                        <img src="{{ asset('images/chapas_policarbonato.jpg') }}" alt="Chapas de Policarbonato" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">CHAPAS DE POLICARBONATO</h3>
                        </div>
                    </div>
                </div>

                <!-- Linha dupla (apenas em desktop) -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acm_composto.jpg') }}" alt="ACM" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">ACM</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="{{ asset('images/acrilico.jpg') }}" alt="Acrílico" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">ACRÍLICO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos -->
        <section class="py-16 bg-white relative" id="produtos">
   
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-green-700 mb-12">Nossos Produtos</h2>
                <div class="mb-12 max-w-2xl mx-auto">
                    <div class="relative">
                        <input class="w-full py-3 pl-12 pr-4 text-gray-700 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none shadow-sm" id="search-product" placeholder="Buscar por produto ou categoria..." type="text"/>
                        <span class="material-icons absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}">
                            <img alt="Álcool Isopropanol ST 900ml" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}"/>
                        </a>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Álcool Isopropanol ST 900ml</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônico.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-300">Veja mais</a>
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
            </div>
        </section>

        <!-- Quem Somos -->
        <!--
        <section class="py-16 bg-white relative" id="sobre">
        <div class="gradient-overlay-quem-somos absolute inset-0"></div>
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-green-700 mb-4">Quem Somos</h2>
                <p class="text-xl text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                    A Amazonas Distribuidora PB é referência em comunicação visual na Paraíba, oferecendo produtos e serviços de alta qualidade para impulsionar o seu negócio.
                </p>
                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-green-600 mb-4">verified</span>
                        <h3 class="text-2xl font-semibold text-green-700 mb-2">Qualidade Garantida</h3>
                        <p class="text-gray-600">Utilizamos os melhores materiais e tecnologias para garantir resultados impecáveis.</p>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-green-600 mb-4">lightbulb</span>
                        <h3 class="text-2xl font-semibold text-green-700 mb-2">Inovação Constante</h3>
                        <p class="text-gray-600">Buscamos sempre as últimas tendências para oferecer soluções criativas e modernas.</p>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-green-600 mb-4">groups</span>
                        <h3 class="text-2xl font-semibold text-green-700 mb-2">Atendimento Personalizado</h3>
                        <p class="text-gray-600">Nossa equipe está pronta para entender suas necessidades e oferecer o melhor.</p>
                    </div>
                </div>
            </div>
        </section>
        -->

        <!-- Nosso Horário -->
    <!--
        <section class="py-20 bg-green-700 text-white relative" id="horario">
            <div class="gradient-overlay gradient-overlay-horario absolute inset-0"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <img alt="Nosso Horário de Funcionamento: Segunda à Sexta, 8h - 17h" class="mx-auto mb-8 rounded-lg shadow-xl max-w-md w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWq3a8egO3chpw-tL1GYwB7blxT_d-R7skMQxjdoV6ig9y_yMk6VUjL5DqX3m4QIA9Wx14__ButHudM3EoFetbsdmDXP6ZWG-mNx_rlj5euBIu7UNv8_a-Omp-vCJ7JNWzNpy13qpyLwQz5csQE4IvXy0SuPoBuy9YKXOYWw6GCYKNygBByJo41sXyGqFVg-dz2gANZumwplItSybz-arkS-svdLeSwV6ClbYYVlFTrFL2zgaGvJ4TdWpF9TbWLIshKhKCxEUfibM"/>
                <h2 class="text-4xl font-bold mb-3">Nosso Horário</h2>
                <p class="text-2xl font-light mb-1">DE FUNCIONAMENTO</p>
                <div class="bg-white text-green-800 rounded-lg py-6 px-4 inline-block shadow-2xl mt-6">
                    <p class="text-3xl font-bold">SEGUNDA À SEXTA</p>
                    <p class="text-5xl font-bold">8H - 17H</p>
                </div>
            </div>
        </section>
    -->
        
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

    </main>
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
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        const mobileMenuButton = document.querySelector('header button.md\\:hidden');
        const mobileNav = document.querySelector('header nav');
        if (mobileMenuButton && mobileNav) {
            mobileMenuButton.addEventListener('click', () => {
                mobileNav.classList.toggle('hidden');
                mobileNav.classList.toggle('absolute');
                mobileNav.classList.toggle('top-16');
                mobileNav.classList.toggle('left-0');
                mobileNav.classList.toggle('right-0');
                mobileNav.classList.toggle('bg-white');
                mobileNav.classList.toggle('shadow-lg');
                mobileNav.classList.toggle('p-6');
                mobileNav.classList.toggle('space-y-4');
                const links = mobileNav.querySelectorAll('a');
                links.forEach(link => {
                    link.classList.add('block');
                    link.classList.remove('space-x-6');
                });
            });
        }
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
    </script>

</body>
</html>
