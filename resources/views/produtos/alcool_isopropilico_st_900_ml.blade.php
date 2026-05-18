@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Álcool Isopropílico ST 900ml</span>
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
                        <img src="{{ asset('images/produtos/alcool_isopropilico_st_900_ml.jpeg') }}" 
                            alt="Álcool Isopropanol ST 900ml" 
                            class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>
                
                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Álcool Isopropílico ST 900</h1>
                    
                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">O Álcool Isopropílico ST 900 da Universal Química é um produto de alta qualidade para limpeza de componentes eletrônicos e superfícies delicadas.</p>
                        <p class="text-base md:text-lg text-gray-700">Disponível em embalagens de 900ml, este produto oferece excelente poder de limpeza sem deixar resíduos.</p>
                    </div>
                    
                    <div class="mb-4 md:mb-6">
                        <h2 class="text-lg md:text-xl font-semibold text-blue-700 mb-2">Características:</h2>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm md:text-base">
                            <li>Alta pureza e rápida evaporação</li>
                            <li>Não deixa resíduos após a aplicação</li>
                            <li>Seguro para componentes eletrônicos</li>
                            <li>Embalagem de 900ml</li>
                            <li>Fabricante: Universal Química</li>
                        </ul>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83993615903&text=Olá! Gostaria de informações sobre o Álcool Isopropílico ST 900" 
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
                                    <td class="py-3 text-gray-800">Álcool Isopropílico ST 900</td>
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
@endsection

@section('aplicacao-dicas')
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
@endsection