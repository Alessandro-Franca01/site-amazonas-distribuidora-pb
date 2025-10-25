@extends('produtos.layout')

@section('breadcrumbs')
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Ilhoseira Semi Automática 10mm</span>
            </div>
        </div>
    </div>
@endsection

@section('principal')
    <section class="py-8 md:py-12 bg-white relative">
        <div class="gradient-overlay-produto absolute inset-0 opacity-10"></div>
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="flex flex-col lg:flex-row gap-6 md:gap-12">
                <!-- Imagem do Produto -->
                 <div class="w-full lg:w-1/2">
                    <div class="bg-white p-2 md:p-4 rounded-lg shadow-lg">
                        <img src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm.jpeg') }}" alt="Ilhoseira Semi Automática 10mm" 
                            class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <img src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm_02.jpeg') }}" alt="Ilhoseira Semi Automática 10mm - Imagem 2"
                            class="w-full h-20 object-cover rounded cursor-pointer thumbnail-image">
                        <img src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm_03.jpeg') }}" alt="Ilhoseira Semi Automática 10mm - Imagem 3"
                            class="w-full h-20 object-cover rounded cursor-pointer thumbnail-image">
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">Ilhoseira Semi Automática 10mm</h1>
                    <p class="text-lg text-gray-700 mb-6">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade na aplicação de ilhós em diferentes materiais.</p>
                    <div class="text-2xl font-semibold text-green-600 mb-6">R$ 1.200,00</div>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/5583988022821?text=Olá! Tenho interesse na Ilhoseira Semi Automática 10mm." target="_blank" class="bg-green-500 text-white py-3 px-6 rounded-lg hover:bg-green-600 transition duration-300 text-lg font-semibold">
                            Comprar via WhatsApp
                        </a>
                        <a href="/contato" class="border border-blue-600 text-blue-600 py-3 px-6 rounded-lg hover:bg-blue-50 transition duration-300 text-lg font-semibold">
                            Mais Informações
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                    <td class="py-3 text-gray-600 font-medium">Marca</td>
                                    <td class="py-3 text-gray-800">Westman</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Modelo</td>
                                    <td class="py-3 text-gray-800"> W-114 HP-12</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Cor</td>
                                    <td class="py-3 text-gray-800">Cinza</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Diâmetro do ilhós</td>
                                    <td class="py-3 text-gray-800">10 mm</td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-gray-600 font-medium">Dimensões</td>
                                    <td class="py-3 text-gray-800">A 57 x L 32 x C 25 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Compatibilidade de materiais</td>
                                    <td class="py-3 text-gray-800">Couro, lona, oxford, brim, tecidos sintéticos</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Peso líquido</td>
                                    <td class="py-3 text-gray-800">6,3 kg</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Garantia</td>
                                    <td class="py-3 text-gray-800">90 dias após o recebimento</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 text-gray-600 font-medium">Conteúdo da embalagem</td>
                                    <td class="py-3 text-gray-800"> 1 Ilhoseira Aplicadora de Ilhós Semi-Automática com Rodinhas 10mm</td>
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
@endsection