@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Adesivo Branco Brilho e Fosco </span>
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
                        <img src="{{ asset('images/produtos/adesivo/adesivo_branco_brilho.jpeg') }}"
                             alt="Adesivo Branco Brilho e Fosco"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_branco_brilho.jpeg') }}"
                             alt="IMG 01"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_branco_fosco.jpeg') }}"
                             alt="IMG 02"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Adesivo Branco Brilho e Fosco</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">
                            O Vinil Adesivo Branco Brilho é um material perfeito para àqueles que buscam unir praticidade na produção,
                            com uma qualidade de produto superior, junto da boa e velha criatividade. Como acabamento, este produto contem
                            uma camada brilhante, o que oferece ao produto impresso um aspecto brilhoso ideal para confecção de etiquetas,
                            rótulos e tags que buscam sair do convencional.
                        </p>
                        <p class="text-base md:text-lg text-gray-700 mb-3">
                            Buscando superior qualidade de impressão, este material passa por um tratamento químico específico que auxilia
                            na impregnação da tinta no interior do produto. Assim, deve-se deixar claro que este material é de uso exclusivo
                            em impressoras jato de tinta.
                        </p>
                        <p class="text-base md:text-lg text-gray-700">
                            Em virtude de sua pequena espessura, este material é fortemente recomendado para meio-corte em plotters de recorte,
                            como a Silhouette, haja vista que não é necessário uma força muito elevada por parte da máquina para realizar
                            trabalhos de cortes personalizados no material.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83993615903&text=Olá! Gostaria de informações sobre o Adesivo Branco Brilho e Fosco"
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
                                <td class="py-3 text-gray-600 font-medium">Espessura</td>
                                <td class="py-3 text-gray-800">80 micra | 0.08 mm</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Cola</td>
                                <td class="py-3 text-gray-800">Acrílica | 20 g</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Linner</td>
                                <td class="py-3 text-gray-800">150 g</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Dimensões</td>
                                <td class="py-3 text-gray-800">Formato A4 | 210 (largura)  mm x 297 (altura) mm</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Fabricante</td>
                                <td class="py-3 text-gray-800">Adesplan</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Código NCM</td>
                                <td class="py-3 text-gray-800">392190.00</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Resistência à água</td>
                                <td class="py-3 text-gray-800">Sim - Resistência à água pós impressão</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Configuração na impressora</td>
                                <td class="py-3 text-gray-800">Papel Grosso (Thick)</td>
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
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Informações Complementares</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">cleaning_services</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Indicação de Uso</h3>
                        <p class="text-gray-600">Rótulos, Logos, o que sua criatividade permitir!.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">verified</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Garantia</h3>
                        <p class="text-gray-600">3 meses contra defeitos de fabricação</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">print</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Impressão Recomendada</h3>
                        <p class="text-gray-600">Jato de Tinta - Sublimática</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
