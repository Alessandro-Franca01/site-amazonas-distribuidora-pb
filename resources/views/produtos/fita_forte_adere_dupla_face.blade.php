@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Fita Forte Adere - Dupla Face</span>
            </div>
        </div>
    </div>
@endsection

@section('principal')
    <!-- Seção Principal do Produto -->
    <section class="py-8 md:py-12 bg-white relative">
        <div class="gradient-overlay-produto absolute inset-0 opacity-10"></div>
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="flex flex-col lg:flex-row gap-6 md:gap-12">
                <!-- Imagem do Produto -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white p-2 md:p-4 rounded-lg shadow-lg">
                        <img src="{{ asset('images/produtos/fitas/fita_forte_adere_dupla_face.jpeg') }}" 
                            alt="Fita Forte Adere - Dupla Face" 
                            class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>
                
                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Fita Forte Adere - Dupla Face</h1>
                    
                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos. Com seu adesivo de alta resistência, oferece uma fixação permanente que garante uma aderência firme e duradoura em diversas superfícies, como madeira, metal, plástico e vidro. Graças ao seu design de dupla face, permite fixar objetos de forma rápida e eficiente, sem a necessidade de ferramentas adicionais. Sua extensão de 20 metros a torna uma opção versátil para projetos pequenos e grandes. Perfeita para artesanato, decorações, montagem de sinalizações ou qualquer tarefa que exija uma fixação confiável. Com a Fita Forte, otimize seu tempo e obtenha um acabamento profissional.</p>
                    </div>
                
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=5583993615903&text=Olá! Gostaria de informações sobre a Fita Forte Adere - Dupla Face" 
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
@endsection

@section('caracteristicas')
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
                                    <td class="py-3 text-gray-800">Fita Forte Adere - Dupla Face</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Marca</td>
                                    <td class="py-3 text-gray-800"> Bomber </td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Cor</td>
                                    <td class="py-3 text-gray-800">Verde</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Nome do desenho</td>
                                    <td class="py-3 text-gray-800"> Liso </td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Comprimento x Largura</td>
                                    <td class="py-3 text-gray-800">20 m x 12 cm</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Formato de venda</td>
                                    <td class="py-3 text-gray-800"> Unidade </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Tipo de Fita Adesiva</td>
                                    <td class="py-3 text-gray-800">Dupla face</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Superficieis Recomendadas</td>
                                    <td class="py-3 text-gray-800">Plástico, Metal, Acrilico, Madeira</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Espessura</td>
                                    <td class="py-3 text-gray-800">12 mm</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Material</td>
                                    <td class="py-3 text-gray-800">Massa acrilica</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Acabamento</td>
                                    <td class="py-3 text-gray-800">Transparente</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Temperatura</td>
                                    <td class="py-3 text-gray-800">120 °C</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
<script>
    // Galeria de imagens do produto
    const mainImage = document.getElementById('mainProductImage');
    const thumbnails = document.querySelectorAll('.thumbnail-image');
    const fullscreenModal = document.createElement('div');
    fullscreenModal.id = 'fullscreenModal';
    fullscreenModal.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-90', 'flex', 'justify-center', 'items', 'z-50', 'hidden');
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
@endsection