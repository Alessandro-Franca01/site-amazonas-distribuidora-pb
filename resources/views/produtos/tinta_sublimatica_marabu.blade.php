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
                        <img src="{{ asset('images/produtos/tinta_sublimática_marabu.jpeg') }}"
                             alt="Silicone Neutro"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>

                <!-- Informações do Produto  -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Tinta Sublimática Texa®Jet DX-SCF | Marabu – 1kg</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg">
                        <p class="text-base md:text-lg text-gray-700">A Texa®Jet DX-SCF é uma tinta sublimática à base de água desenvolvida especialmente para impressoras com cabeçotes Epson® micro piezoelétricos,
                             como os modelos DX4, DX5, DX7, XP600, i3200 e PrecisionCore® TFP. Indicada para impressões digitais de alta qualidade,
                             oferece cores vivas, excelente definição de pontos e secagem rápida, sendo ideal para quem busca produtividade com fidelidade de cor.
                        </p>
                        
                    </div>

                    <div class="mb-4 md:mb-6">
                            <h2 class="text-lg md:text-xl font-semibold text-blue-700 mb-2">Benefícios:</h2>
                            <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm md:text-base">
                                <li>Pronta para uso (não necessita diluição).</li>
                                <li>Excelente solidez à luz, lavagem e transpiração.</li>
                                <li>Livre de APEO e compatível com a norma Oeko-Tex® Standard 100.</li>
                                <li>Indicada para prensas térmicas ou calandras (180–210 °C / 30–60 segundos).</li>
                            </ul>
                        </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83998530445&text=Olá! Gostaria de informações sobre a Tinta Sublimática Texa®Jet DX-SCF | Marabu – 1kg"
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
                                <td class="py-3 text-gray-800">Tinta Sublimática Texa®Jet DX-SCF</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Marca</td>
                                <td class="py-3 text-gray-800">Marabu</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Peso</td>
                                <td class="py-3 text-gray-800">1 kg</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Compatibilidades</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Com <strong>equipamentos</strong> Epson®</td>
                                <td class="py-3 text-gray-800">F6070, F6200, F7070, F7170, F7200, F7270, F9200, F9300, F9370, F6370, F9470</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Com <strong>cabeçotes</strong> Epson®</td>
                                <td class="py-3 text-gray-800">DX4, DX5, DX7, XP600, i3200</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Para Chip vendido</td>
                                <td class="py-3 text-gray-800">F6070, F6200, F7070, F7170, F7200, F7270, F9200, F9300, F9370</td>
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
    <!-- Cuidados -->
    <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Cuidados</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">person</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 1</h3>
                        <p class="text-gray-600">Não misturar com outras tintas.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">print</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 2</h3>
                        <p class="text-gray-600">Sistema da impressora deve estar limpo antes do uso.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">cleaning_services</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 3</h3>
                        <p class="text-gray-600">Para limpeza, utilize a solução Texa®Jet DX-UR, específica para esta tinta.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection