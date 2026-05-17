<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/logo01-removebg.png')}}" >
    <title>Luz Led 12v - Amazonas Distribuidora PB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
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
        .gradient-overlay-produto {
            background: linear-gradient(to right, rgba(0, 82, 165, 0.8), rgba(0, 0, 0, 0.4));
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            padding: 0 0.5rem;
            color: #6b7280;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Side bar -->
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <img alt="Logo Amazonas Distribuidora PB" class="h-10" src="{{url('images/logo01-removebg.png')}}"/>
            <button class="close-sidebar">
                <span class="material-icons">close</span>
            </button>
        </div>
        <nav class="sidebar-nav">
            <a href="/">Início</a>
            <a href="/quem_somos">Quem Somos</a>
            <a href="/produtos">Produtos</a>
            <a href="#contato">Contato</a>
        </nav>
    </div>
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="{{url('images/logo01-removebg.png')}}"/>
                <span class="text-2xl font-bold text-green-700"> AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/produtos">Produtos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none open-sidebar">
                <span class="material-icons">menu</span>
            </button>
        </div>
    </header>

    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/#produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Luz Led 12v</span>
            </div>
        </div>
    </div>

    <main>
        <!-- Seção Principal do Produto -->
        <section class="py-8 md:py-12 bg-white relative">
            <div class="gradient-overlay-produto absolute inset-0 opacity-10"></div>
            <div class="container mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col lg:flex-row gap-6 md:gap-12">
                    <!-- Imagem do Produto -->
                    <div class="w-full lg:w-1/2">
                        <div class="bg-white p-2 md:p-4 rounded-lg shadow-lg">
                            <img src="{{ asset('images/produtos/luz_led_12v.jpeg') }}" 
                                alt="Álcool Isopropanol ST 900ml" 
                                class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                        </div>
                    </div>
                    
                    <!-- Informações do Produto -->
                    <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Luz Led 12v</h1>
                        
                        <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                            <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">Módulo LED 6013, 12V para letras caixa luminosos.</p>
                            <p class="text-base md:text-lg text-gray-700"><strong> Observações: </strong></p>
                            <p class="text-base md:text-lg text-gray-700">PRODUTO ENVIADO COM NOTA FISCAL ENVIO IMEDIATO</p>
                            <p class="text-base md:text-lg text-gray-700">ITENS QUE SERÃO ENVIADOS 200pçs Módulo LED 6013 1,5W 12V 3-LED ESCOLHER A COR</p>
                        </div>
                        
                        <div class="mb-4 md:mb-6">
                            <h2 class="text-lg md:text-xl font-semibold text-blue-700 mb-2">Características:</h2>
                            <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm md:text-base">
                                <li>Alto Brilho Alta Qualidade</li>
                                <li>Fita auto adesiva em cada módulo</li>
                                <li>Eficiência energética, redução importante nos custos de energia</li>
                                <li>Baixo calor, alto brilho, funciona bem sob condições adversa</li>
                                <li>Vida útil longa mais de 50.000 horas, Produto de alta qualidade</li>
                                <li>Sem chumbo, mercúrio e substâncias; a favor do meio ambiente</li>
                            </ul>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="https://api.whatsapp.com/send?phone=83993615903&text=Olá! Gostaria de informações sobre a Luz Led 12v." 
                            class="w-full sm:w-auto bg-green-600 text-white py-2 md:py-3 px-4 md:px-6 rounded-lg flex items-center justify-center hover:bg-green-700 transition duration-300 text-sm md:text-base">
                                <span class="material-icons mr-2 text-sm md:text-base">shopping_cart</span> 
                                Solicitar Orçamento
                            </a>
                            <a href="/contato" 
                            class="w-full sm:w-auto border border-blue-600 text-blue-600 py-2 md:py-3 px-4 md:px-6 rounded-lg hover:bg-blue-50 transition duration-300 text-sm md:text-base text-center">
                                Mais Informações
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Especificações Técnicas -->
        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Especificações Técnicas</h2>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-b md:border-b-0 md:border-r border-gray-200">
                            <h3 class="text-xl font-semibold text-blue-700 mb-4">Informações Gerais</h3>
                            <table class="w-full">
                                <tbody>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Nome do Produto</td>
                                        <td class="py-3 text-gray-800">Módulo LED 6013 1,5W 12V 3-LED</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Cor</td>
                                        <td class="py-3 text-gray-800">LUZ ESCOLHER COR</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Voltagem</td>
                                        <td class="py-3 text-gray-800">DC 12V</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Ângulo</td>
                                        <td class="py-3 text-gray-800">165º</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Potência</td>
                                        <td class="py-3 text-gray-800">1,5W</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Tipo de LED</td>
                                        <td class="py-3 text-gray-800">6013 dobro de luminosidade do que LEDs comum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                            <table class="w-full">
                                <tbody>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Luminosidade</td>
                                        <td class="py-3 text-gray-800">165 Lumens</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Consumo</td>
                                        <td class="py-3 text-gray-800">1,5W 0,125ma cada Plaquinha</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Quantidade de LEDs</td>
                                        <td class="py-3 text-gray-800">3-LEDs / Por módulo / Plaquinha</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Grau de Proteção</td>
                                        <td class="py-3 text-gray-800">IP67 (A Prova D' água)</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Ambiente de uso</td>
                                        <td class="py-3 text-gray-800">-40 graus -+ 50 °C</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Material do escudo</td>
                                        <td class="py-3 text-gray-800">INJETADO antiestático</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Aplicações -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Aplicações</h2>
                
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <span class="material-icons text-5xl text-blue-600 mb-4 mx-auto">cleaning_services</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Limpeza de Eletrônicos</h3>
                    <p class="text-gray-600">Letreiros Sinalização Letra Caixa Luminoso Placa Fachada Sanca Aquário Vitrine Paisagismo Carro Decoração Totem.</p>
                </div>
            </div>
        </section>

        <!-- Produtos Relacionados -->
        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Produtos em Destaques</h2>
                
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
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/">Início</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/quem_somos">Sobre Nós</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/#produtos">Produtos</a></li>
                        <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="/contato">Contato</a></li>
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
        
        // Galeria de imagens do produto
        const mainImage = document.getElementById('mainProductImage');
        const thumbnails = document.querySelectorAll('.thumbnail-image');
        const fullscreenModal = document.createElement('div');
        fullscreenModal.id = 'fullscreenModal';
        fullscreenModal.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-90', 'flex', 'justify-center', 'items-center', 'z-50', 'hidden');
        fullscreenModal.innerHTML = `
            <span class="material-icons text-white text-5xl cursor-pointer absolute top-4 right-4" id="closeModal">close</span>
            <img src="" alt="" class="max-w-[90%] max-h-[90vh] object-contain" id="fullscreenImage">
        `;
        document.body.appendChild(fullscreenModal);

        const fullscreenImage = document.getElementById('fullscreenImage');
        const closeModal = document.getElementById('closeModal');

        function openFullscreen(src) {
            fullscreenImage.src = src;
            fullscreenModal.classList.remove('hidden');
        }

        function closeFullscreen() {
            fullscreenModal.classList.add('hidden');
        }

        if (mainImage) {
            mainImage.addEventListener('click', () => openFullscreen(mainImage.src));
        }
        
        if (thumbnails.length > 0) {
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    mainImage.src = thumb.src;
                    mainImage.alt = thumb.alt;
                    openFullscreen(thumb.src);
                });
            });
        }

        if (closeModal) {
            closeModal.addEventListener('click', closeFullscreen);
        }

        if (fullscreenModal) {
            fullscreenModal.addEventListener('click', (e) => {
                if (e.target === fullscreenModal) {
                    closeFullscreen();
                }
            });
        }
    </script>
</body>
</html>