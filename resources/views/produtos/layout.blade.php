<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/logo01-removebg.png')}}" >
    <title>Amazonas Distribuidora PB</title>
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
                <span class="text-2xl font-bold text-green-700">AMZ - Amazonas Distribuidora PB</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/">Início</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/quem_somos">Quem Somos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/produtos">Produtos</a>
                <a class="text-gray-700 hover:text-green-600 transition duration-300" href="/#contato">Contato</a>
            </nav>
            <button class="md:hidden text-green focus:outline-none open-sidebar">
                <span class="material-icons">menu</span>
            </button>
        </div>
    </header>

    @yield('breadcrumbs')

    <main>
        @yield('principal')

        @yield('caracteristicas')

        @yield('aplicacao-dicas')

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

@yield('footer')

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
