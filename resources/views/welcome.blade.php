<!DOCTYPE html>
<html lang="pt-BR"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Amazonas Distribuidora PB</title>
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
            background: linear-gradient(to right, rgba(12, 105, 57, 0.85), rgba(12, 105, 57, 0.3));
        }
    </style>
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <img alt="Logo Amazonas Distribuidora PB" class="h-12 mr-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTPySrK8O3Us6aoyqqWnxJG90qG3ljItV8eV6ENV2Hu_lm06rb5Jj-Fl-I2C564WdV1KhqvWSmhYEViyhtrGoHzL-oaO7r66tORsiiWfA4QAAYH0_RtNIx_Ct54kxNGWwhdPV7-Cl8WSOFLzc4YCuQzwalBd4ekTDwH7yev0NRCVH0HE6Axvbb8TDn5VroCofbRHkEKVpSXVgPAwkQY1Onz9S9OFZ0SogqBxhR7R748FBKo_JoGIyH_qIdP1CdYYtK7pZjcc91vj4"/>
            <span class="text-2xl font-bold text-green-700">Amazonas Distribuidora PB</span>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#inicio">Início</a>
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#sobre">Sobre Nós</a>
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#produtos">Produtos</a>
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#servicos">Serviços</a>
            <a class="text-gray-700 hover:text-green-600 transition duration-300" href="#contato">Contato</a>
        </nav>
        <button class="md:hidden text-gray-700 focus:outline-none">
            <span class="material-icons">menu</span>
        </button>
    </div>
</header>
<main>
    <section class="hero-bg h-[calc(100vh-80px)] relative" id="inicio">
        <div class="gradient-overlay absolute inset-0"></div>
        <div class="container mx-auto px-6 h-full flex items-center relative z-10">
            <div class="max-w-xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Soluções Completas em <span class="text-yellow-400">Comunicação Visual</span>
                </h1>
                <p class="text-xl text-gray-200 mb-8">
                    Qualidade e inovação para destacar sua marca. Da criação à instalação, estamos com você.
                </p>
                <a class="bg-yellow-400 text-green-800 font-semibold py-3 px-8 rounded-lg hover:bg-yellow-500 transition duration-300 text-lg shadow-lg" href="#contato">
                    Fale Conosco
                </a>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white" id="sobre">
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
    <section class="py-16 bg-gray-100" id="produtos">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-green-700 mb-12">Nossos Produtos</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img alt="Lonas e Adesivos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTrF6RMiXcaHxI3j0CAPPxsqtdxnXv6llqHgNwxiDna_dfiA9cGPiJ4301NFOq9RS0JamwudJsbUktx73_jDJWQolsWIuO8h3N6TdAhG4LVvOhslX_VmCAuW05bI_MvT0ziJEF1quKKkBgceIyf9PaQMydU-U2tUpYe5dirC1KnFJyAKt9dyJ-Kp9B0ZdrnUZMud5ms99I8F0Dv_n6nHZHDeGkjw9awYs0Y-PdMJig9utUESY29iuHs2Ky4kuoM6l5CeBvipheXuU"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-2">Lonas e Adesivos</h3>
                        <p class="text-gray-600 text-sm">Impressão digital de alta qualidade para diversas aplicações.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img alt="Placas e Fachadas" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAbR10rGKFjF03-P5jw2jzL2brWsB0PTr_f3xQ28Hx_qnVOcSNtFjGcig_5H-XgYig51FQVHZVlnzbwy_KhLSAqnLwCMJzdeEsR-7lBGpfxXeolEUlIJdaBzx5Rx4IVKarZFtqQbhlFWDQLu261FZrd2bOG4CxaFpU2AwEXJ2mmpHflXnVb_dUIDz1LoNt4mkcgQPTOqZ-fQeQAPxe5s1Z82Fw5WhArqQ7hXuRFCDcded_SIwvY5GaJz2sEsT0HehGkMbq3UHwGgY"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-2">Placas e Fachadas</h3>
                        <p class="text-gray-600 text-sm">Soluções impactantes para destacar a identidade visual da sua empresa.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img alt="Letras Caixa" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP51DgsKBo9Rkz3j-G-lpUAIpr7o6fHFEYngN06Zg6hocqu3t5ZOdXou26L-a3br8HliEii-YKRhm5ebLb7VWlgFZ6-rRjODDmQVrMLjD2sk7H5pOAiozqlKzrZVQyvzP8dbtGZC7A9qVGCElCjHbF1FXNgkuW-koJ7wAMTUcQnn90hAHuRFtfNxeHUKdLA5e2IskN18lE2irrh6mOndtV8xhTdUpm69A7h7yMAybjiwoE7pFhkl0bsRyFroSyq-H_TTo2XsK1wWs"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-2">Letras Caixa</h3>
                        <p class="text-gray-600 text-sm">Design sofisticado e moderno para sinalização interna e externa.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img alt="Sinalização Viária" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALF5IzBvT1Jo7iAXSqbyKmSDmCFkGKhq4gOv2XcVqP3wRjqvYcL8z74J9inqtD6FzLvTpbocwVQQHob1R9sGxE_gvLf-5zw4pmU_pAmUr1s75IVzDlae0nXO_fKx7VYv5rhj9WgbC5qOKAxIuQ1tt254WSVeFD87VH3H49iM_7RciRptZuzFdSSieFcpLtCOVRunu4OOOnEq4X-kWmiOgJERoSf-3nd1yMxpWe-EQpmoDys1sMgZXd6paCN9QLgzGTw48hguDpMuU"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-2">Sinalização Viária</h3>
                        <p class="text-gray-600 text-sm">Produtos duráveis e de alta visibilidade para segurança no trânsito.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a class="bg-green-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700 transition duration-300 text-lg shadow-md" href="#">
                    Ver Todos os Produtos
                </a>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white" id="servicos">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-green-700 mb-12">Nossos Serviços</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <span class="material-icons text-6xl text-yellow-500 mb-4">design_services</span>
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Criação e Design</h3>
                    <p class="text-gray-600">Desenvolvemos layouts criativos e personalizados para sua comunicação visual.</p>
                </div>
                <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <span class="material-icons text-6xl text-yellow-500 mb-4">print</span>
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Impressão Digital</h3>
                    <p class="text-gray-600">Equipamentos modernos para impressões de alta resolução em diversos materiais.</p>
                </div>
                <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <span class="material-icons text-6xl text-yellow-500 mb-4">construction</span>
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Instalação Especializada</h3>
                    <p class="text-gray-600">Equipe qualificada para instalação segura e eficiente de seus projetos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-green-700 text-white" id="horario">
        <div class="container mx-auto px-6 text-center">
            <img alt="Nosso Horário de Funcionamento: Segunda à Sexta, 8h - 17h" class="mx-auto mb-8 rounded-lg shadow-xl max-w-md w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWq3a8egO3chpw-tL1GYwB7blxT_d-R7skMQxjdoV6ig9y_yMk6VUjL5DqX3m4QIA9Wx14__ButHudM3EoFetbsdmDXP6ZWG-mNx_rlj5euBIu7UNv8_a-Omp-vCJ7JNWzNpy13qpyLwQz5csQE4IvXy0SuPoBuy9YKXOYWw6GCYKNygBByJo41sXyGqFVg-dz2gANZumwplItSybz-arkS-svdLeSwV6ClbYYVlFTrFL2zgaGvJ4TdWpF9TbWLIshKhKCxEUfibM"/>
            <h2 class="text-4xl font-bold mb-3">Nosso Horário</h2>
            <p class="text-2xl font-light mb-1">DE FUNCIONAMENTO</p>
            <div class="bg-white text-green-800 rounded-lg py-6 px-4 inline-block shadow-2xl mt-6">
                <p class="text-3xl font-bold">SEGUNDA À SEXTA</p>
                <p class="text-5xl font-bold">8H - 17H</p>
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
                    <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#sobre">Sobre Nós</a></li>
                    <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#produtos">Produtos</a></li>
                    <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#servicos">Serviços</a></li>
                    <li><a class="text-gray-300 hover:text-yellow-400 transition duration-300" href="#contato">Contato</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-semibold mb-4">Localização</h4>
                <p class="text-gray-300 mb-2">Rua Exemplo, 123 - Bairro Modelo</p>
                <p class="text-gray-300 mb-2">João Pessoa - PB, CEP 58000-000</p>
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
</script>

</body>
</html>
