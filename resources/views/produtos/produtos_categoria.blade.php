<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
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
            <button class="md:hidden text-green focus:outline-none">
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
                <span>Quem Somos</span>
            </li>
        </ol>
    </nav>

    <!-- Main Content Area -->
    <main class="container mx-auto px-6 py-8 flex flex-col md:flex-row">
        <!-- Categories Sidebar -->
        <aside class="w-full md:w-1/4 bg-white p-6 rounded-lg shadow-md mb-8 md:mb-0 md:mr-8 h-fit sticky top-4">
            <h2 class="text-xl font-semibold mb-4">CATEGORIAS</h2>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="#fitas-e-adesivos" class="category-link flex justify-between items-center">
                            Fitas e Adesivos
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#tintas" class="category-link flex justify-between items-center">
                            Tintas
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#outros" class="category-link flex justify-between items-center">
                            Outros
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Product Listing -->
        <section class="w-full md:w-3/4">
            <!-- Fitas e Adesivos Section -->
            <div id="fitas-e-adesivos" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Fitas e Adesivos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/adesivos.png') }}" alt="Fitas e Adesivos" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Fita Adesiva Transparente</h3>
                            <p class="text-gray-600 text-sm">Ideal para embalagens e uso geral.</p>
                            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <img src="{{ asset('images/silicone_neutro.png') }}" alt="Silicone Neutro" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Silicone Neutro</h3>
                            <p class="text-gray-600 text-sm">Para vedação e selagem em diversas superfícies.</p>
                            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Add more Fitas e Adesivos products as needed -->
                </div>
            </div>

            <!-- Tintas Section -->
            <div id="tintas" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Tintas</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/primer.png') }}" alt="Primer" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Primer Universal</h3>
                            <p class="text-gray-600 text-sm">Prepara superfícies para melhor aderência da tinta.</p>
                            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Add more Tintas products as needed -->
                </div>
            </div>

            <!-- Outros Section -->
            <div id="outros" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold mb-6">Outros Produtos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <img src="{{ asset('images/ilhoseira.png') }}" alt="Ilhoseira" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Ilhoseira Manual</h3>
                            <p class="text-gray-600 text-sm">Ferramenta para aplicação de ilhoses.</p>
                            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Product Card for Álcool Isopropanol ST 900 -->
                    <div class="product-card">
                        <img src="{{ asset('images/produtos/alcool_isopropanol_st_900_ml.jpeg') }}" alt="Álcool Isopropanol ST 900" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Álcool Isopropanol ST 900</h3>
                            <p class="text-gray-600 text-sm">Produto de alta qualidade para limpeza de componentes eletrônicos.</p>
                            <a href="{{ url('/produtos/alcool-isopropanol-st-900') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver Detalhes</a>
                        </div>
                    </div>
                    <!-- Add more Outros products as needed -->
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

    <script>
        // Mobile menu toggle
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
    </script>
</body>
</html>