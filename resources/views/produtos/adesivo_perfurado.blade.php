@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Adesivo Perfurado</span>
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
                        <img src="{{ asset('images/produtos/adesivo/adesivo_perfurado_01.jpeg') }}"
                             alt="Adesivo Perfurado"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_perfurado_01.jpeg') }}"
                             alt="IMG 01"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                        <img src="{{ asset('images/produtos/adesivo/adesivo_perfurado_02.jpeg') }}"
                             alt="IMG 02"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Adesivo Perfurado</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">
                            A Película Perfurada oferece controle de luminosidade e temperatura devido as perfurações
                            serem pequenas elas bloqueiam parte da luz solar e dos raios UV, reduzindo o calor e brilho
                            do espaço, promove privacidade sem reduzir a iluminação natural.
                        </p>

                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">
                            <strong>Observação: </strong>
                            O Adesivo também oferece um efeito de privacidade, pois é possível ver o exterior do ambiente
                            sem que sejam vistos do lado de fora, desde que a luz externa seja mais intensa que a interna,
                            isso pode mudar durante a noite onde é revertido a situação, se a luz interna for mais intensa
                            é possível ter uma visão de movimentações.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83998530445&text=Olá! Gostaria de informações sobre o Adesivo Perfurado"
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
                                <td class="py-3 text-gray-600 font-medium">Marca</td>
                                <td class="py-3 text-gray-800">Bw Adesivos</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Modelo</td>
                                <td class="py-3 text-gray-800">Adesivo Microperfurado Película perfurada
                                    para Janelas Seethru Citru, Segurança Privacidade
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Formato de Venda</td>
                                <td class="py-3 text-gray-800">Unidade</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Largura</td>
                                <td class="py-3 text-gray-800">1 m</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Comprimento</td>
                                <td class="py-3 text-gray-800">2 m</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Desenho</td>
                                <td class="py-3 text-gray-800">Microperfurado</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Apresentação</td>
                                <td class="py-3 text-gray-800">Rolo</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Superficies Recomendadas</td>
                                <td class="py-3 text-gray-800">Blindex Videro, Box, Divisórias de Vidro, Janelas, Mesas,
                                    Portas comerciais Vidros temperados e quaisquer superficies, Vitrines
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Ambientes Recomendados</td>
                                <td class="py-3 text-gray-800">Banheiro, Cozinha, Escritório, Lavanderia, Quarto, Sacada, Sala, Vitrine de loja</td>
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

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">verified</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Garantia</h3>
                        <p class="text-gray-600">Garantia do vendedor: 7 dias</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">alarm_on</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Durabilidade</h3>
                        <p class="text-gray-600">5 anos</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orientações de Uso -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Perguntas e Dicas</h2>
            <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                <ul class="list-disc list-inside space-y-4 text-gray-700 text-lg">
                    <li>
                        <strong class="text-blue-600">1- Onde pode ser aplicado? </strong> <br>Vidros, Portas de vidro, Janelas, Mesas, Divisórias de vidro, box, e qualquer superfície lisa e plana.
                    </li>
                    <li>
                        <strong class="text-blue-600">2- Onde NÃO pode ser aplicado? </strong> <br>Não aplicar em superfícies rústicas, grafiato, texturizada, porosas, úmidas (bolor ou infiltrações) pois o produto irá descolar!
                    </li>
                    <li>
                        <strong class="text-blue-600">1° Dica </strong> Antes da compra, calcule a metragem correta, pois em uma próxima compra, a tonalidade pode variar conforme o lote
                    </li>
                    <li>
                        <strong class="text-blue-600">2° Dica </strong> Ao receber o produto, verifique a cor e a metragem antes de aplicá-lo.
                    </li>
                </ul>
            </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
