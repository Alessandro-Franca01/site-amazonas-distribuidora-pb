@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/#produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Silicone Neutro</span>
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
                        <img src="{{ asset('images/produtos/silicone_neutro_incolor_260g.jpeg') }}"
                             alt="Silicone Neutro"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>

                <!-- Informações do Produto  -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Silicone Neutro</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg">
                        <p class="text-base md:text-lg text-gray-700">O Silicone Neutro fabricado a base de polisiloxanos pela Poliplás é indicado para vedações em vidro e alumínio, juntas de acabamento em esquadrias de alumínio, box de banheiros e caixilharias. Com boa aderência e flexibilidade, o produto se torna uma espécie de borracha resistente.</p>
                    </div>

                    <div class="mb-4 md:mb-6">
                            <h2 class="text-lg md:text-xl font-semibold text-blue-700 mb-2">Vantagens:</h2>
                            <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm md:text-base">
                                <li>Acabamento vertical adequado.</li>
                                <li>Boa aderência.</li>
                                <li>Alongamento regular.</li>
                                <li>Alta resistência às intempéries.</li>
                                <li>Proteção UV.</li>
                                <li>Flexibilidade.</li>
                            </ul>
                        </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=5583993615903&text=Olá! Gostaria de informações sobre o Silicone Neutrol"
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
                                <td class="py-3 text-gray-800">Silicone Neutro</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Marca</td>
                                <td class="py-3 text-gray-800">Poliplás</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Peso liquido</td>
                                <td class="py-3 text-gray-800">260 g</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Linhas / Modelos</td>
                                <td class="py-3 text-gray-800">Linha selante</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Composição</td>
                                <td class="py-3 text-gray-800">Mistura a base de polisiloxanos</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Acabamento / Cores</td>
                                <td class="py-3 text-gray-800">Incolor | Branco| Cinza | Preto | Bronze</td>
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
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Aplicações / Uso</h2>

            <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                <span class="material-icons text-5xl text-blue-600 mb-4 mx-auto">cleaning_services</span>
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Uso profissional</h3>
                <p class="text-gray-600">
                    Indicado para superfícies lisas e porosas, ferrosas e não ferrosa como vidros, alumínios, azulejos, peças sanitárias, cerâmicas vitrificadas,
                    fibras, acrílicos, argamassas, concretos, texturas e alguns modelos de plástico.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection