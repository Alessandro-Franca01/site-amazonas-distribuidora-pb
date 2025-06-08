<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/logo01-removebg.png')}}" >
    <title>Álcool Isopropanol ST 900 - Amazonas Distribuidora PB</title>
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
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="{{url('images/logo01-removebg.png')}}"/>
                <span class="text-2xl font-bold text-green-700"> AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/#produtos">Produtos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none">
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
                <span class="breadcrumb-item text-gray-600">Álcool Isopropanol ST 900</span>
            </div>
        </div>
    </div>

    <main>
        <!-- Seção Principal do Produto -->
        <section class="py-12 bg-white relative">
            <div class="gradient-overlay-produto absolute inset-0 opacity-10"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="flex flex-col md:flex-row gap-12">
                    <!-- Imagem do Produto -->
                    <div class="md:w-1/2">
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <img src="{{ asset('images/produtos/alcool_isopropanol_st_900_ml.jpeg') }}" alt="Álcool Isopropanol ST 900" class="w-full h-auto rounded-lg">
                        </div>
                        <div class="mt-6 grid grid-cols-3 gap-2">
                            <img src="{{ asset('images/produtos/alcool_isopropanol_st_900.jpg') }}" alt="Álcool Isopropanol Imagem 01" class="w-full h-24 object-cover rounded-lg shadow cursor-pointer">
                            <img src="{{ asset('images/produtos/alcool_isopropanol_st_900_2.jpg') }}" alt="Álcool Isopropanol Imagem 02" class="w-full h-24 object-cover rounded-lg shadow cursor-pointer">
                            <img src="{{ asset('images/produtos/alcool_isopropanol_st_900_3.jpg') }}" alt="Álcool Isopropanol Imagem 03" class="w-full h-24 object-cover rounded-lg shadow cursor-pointer">
                        </div>
                    </div>
                    
                    <!-- Informações do Produto -->
                    <div class="md:w-1/2">
                        <h1 class="text-3xl md:text-4xl font-bold text-blue-700 mb-4">Álcool Isopropanol ST 900</h1>
                        <div class="flex items-center mb-4">
                            <span class="material-icons text-yellow-500">star</span>
                            <span class="material-icons text-yellow-500">star</span>
                            <span class="material-icons text-yellow-500">star</span>
                            <span class="material-icons text-yellow-500">star</span>
                            <span class="material-icons text-yellow-500">star_half</span>
                            <span class="text-gray-600 ml-2">(4.5/5 - 28 avaliações)</span>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg mb-6">
                            <p class="text-lg text-gray-700 mb-4">O Álcool Isopropanol ST 900 da Universal Química é um produto de alta qualidade para limpeza de componentes eletrônicos e superfícies delicadas. Ideal para uso profissional em comunicação visual, manutenção de equipamentos e limpeza industrial.</p>
                            <p class="text-lg text-gray-700">Disponível em embalagens de 900ml, este produto oferece excelente poder de limpeza sem deixar resíduos.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold text-blue-700 mb-2">Características:</h2>
                            <ul class="list-disc pl-5 text-gray-700 space-y-1">
                                <li>Alta pureza e rápida evaporação</li>
                                <li>Não deixa resíduos após a aplicação</li>
                                <li>Seguro para componentes eletrônicos</li>
                                <li>Embalagem de 900ml</li>
                                <li>Fabricante: Universal Química</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <a href="https://api.whatsapp.com/send?phone=83998530445&text=Olá! Gostaria de informações sobre o Álcool Isopropanol ST 900" class="bg-green-600 text-white py-3 px-6 rounded-lg flex items-center hover:bg-green-700 transition duration-300">
                                <span class="material-icons mr-2">shopping_cart</span> Solicitar Orçamento
                            </a>
                            <a href="/contato" class="border border-blue-600 text-blue-600 py-3 px-6 rounded-lg hover:bg-blue-50 transition duration-300">Mais Informações</a>
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
                                        <td class="py-3 text-gray-800">Álcool Isopropanol ST 900</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Marca</td>
                                        <td class="py-3 text-gray-800">Universal Química</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Volume</td>
                                        <td class="py-3 text-gray-800">900ml</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Tipo</td>
                                        <td class="py-3 text-gray-800">Álcool Isopropílico</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Aplicação</td>
                                        <td class="py-3 text-gray-800">Limpeza de componentes eletrônicos e superfícies</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-blue-700 mb-4">Propriedades Físico-Químicas</h3>
                            <table class="w-full">
                                <tbody>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Aparência</td>
                                        <td class="py-3 text-gray-800">Líquido incolor</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Odor</td>
                                        <td class="py-3 text-gray-800">Característico</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Ponto de Ebulição</td>
                                        <td class="py-3 text-gray-800">82,5°C</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 text-gray-600 font-medium">Solubilidade em Água</td>
                                        <td class="py-3 text-gray-800">Completa</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-gray-600 font-medium">Densidade</td>
                                        <td class="py-3 text-gray-800">0,785 g/cm³</td>
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
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">devices</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Limpeza de Eletrônicos</h3>
                        <p class="text-gray-600">Ideal para limpeza de placas de circuito, componentes eletrônicos e equipamentos de precisão.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">print</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Comunicação Visual</h3>
                        <p class="text-gray-600">Perfeito para limpeza de superfícies antes da aplicação de adesivos, vinil e outros materiais gráficos.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">cleaning_services</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Limpeza Industrial</h3>
                        <p class="text-gray-600">Utilizado na limpeza de precisão em ambientes industriais, removendo óleos e graxas sem deixar resíduos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos Relacionados -->
        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Produtos Relacionados</h2>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <img alt="Primer" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/primer.png') }}"/>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Primer</h3>
                            <p class="text-gray-600 text-sm">Soluções impactantes para destacar a identidade visual da sua empresa.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <img alt="Silicone Neutro" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/silicone_neutro.png') }}"/>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Silicone Neutro</h3>
                            <p class="text-gray-600 text-sm">Produtos duráveis e de alta qualidade para diversas aplicações.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <img alt="Adesivos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/adesivos.png') }}"/>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Adesivos</h3>
                            <p class="text-gray-600 text-sm">Impressão digital de alta qualidade para diversas aplicações.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                        <img alt="Ilhoseira" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/ilhoseira.png') }}"/>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhoseiras</h3>
                            <p class="text-gray-600 text-sm">A Ilhoseira Semi Automática, uma opção simples para a colocação de ilhós em tecidos.</p>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
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
        
        // Galeria de imagens do produto
        const thumbnails = document.querySelectorAll('.md\\:w-1/2 .grid img');
        const mainImage = document.querySelector('.md\\:w-1/2 .bg-white img');
        
        if (thumbnails.length > 0 && mainImage) {
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    mainImage.src = thumb.src;
                    mainImage.alt = thumb.alt;
                });
            });
        }
    </script>
</body>
</html>