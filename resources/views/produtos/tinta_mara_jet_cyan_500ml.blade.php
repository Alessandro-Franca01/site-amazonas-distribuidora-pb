@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/#produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Tinta Mara Jet </span>
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
                        <img src="{{ asset('images/produtos/tinta_mara_jet_cyan_500ml.jpeg') }}"
                             alt="Tinta Mara Jet "
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>

                <!-- Informações do Produto  -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Tinta Mara Jet Cyan 500ml</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg">
                        <p class="text-base md:text-lg text-gray-700">A Tinta Eco Solvente Mara®Jet DI-LSX é ideal para impressão digital em películas de PVC auto adesivas
                             e materiais encerados à base de PVC. Com excelente adesão, secagem rápida e alta resistência à luz UV, esta tinta é perfeita para aplicações
                              externas, garantindo impressões vibrantes e duradouras.
                        </p>
                        
                    </div>

                    <div class="mb-4 md:mb-6">
                        <h2 class="text-lg md:text-xl font-semibold text-blue-700 mb-2">Principais benefícios:</h2>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm md:text-base">
                            <li><strong> Cores vibrantes e duráveis </strong> Excelente gama de cores com alta resistência ao desbotamento.</li>
                            <li><strong> Uso externo garantido </strong> Desenvolvida para resistir até 2 anos em ambientes externos, com proteção adicional recomendada para aplicações em frotas.</li>
                            <li><strong> Secagem rápida </strong> Mantém os parâmetros originais de secagem, otimizando a produção.</li>
                            <li><strong> Versatilidade de substratos </strong> Compatível com películas de PVC auto adesivas, tecidos revestidos, papéis apropriados e outros materiais revestidos de PVC.</li>
                        </ul>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83993615903&text=Olá! Gostaria de informações sobre a Tinta Mara Jet"
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
                                <td class="py-3 text-gray-800">Tinta Mara Jet</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Marca</td>
                                <td class="py-3 text-gray-800">Marabu</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Peso liquido</td>
                                <td class="py-3 text-gray-800">500 ml</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Compatibilidades</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium"> Série de impressoras Roland®</td>
                                <td class="py-3 text-gray-800">SC, SJ, XC, XJ, SP, VP, Pro4 & Serie (XR, XF, RF, Vsi 640). </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Cor</td>
                                <td class="py-3 text-gray-800">Ciano</td>
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
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Dicas e Recomendações</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">info</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 1</h3>
                        <p class="text-gray-600">Mara®Jet DI-LSX é uma tinta para impressão em impressoras inkjet à base de solvente.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">info</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 2</h3>
                        <p class="text-gray-600">Adequada para impressão em uma variedade de substratos, incluindo: 
                            <strong> películas de PVC</strong>, 
                            <strong> materiais revestidos de PVC</strong> e
                            <strong> tecidos e papéis para impressão</strong>.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <span class="material-icons text-5xl text-blue-600 mb-4">info</span>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Dica 3</h3>
                        <p class="text-gray-600">Utilize o limpador Mara®Jet DI-UR2 para limpeza das cabeças de impressão e sistemas de tinta, garantindo a performance ideal e evitando problemas de entupimento.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Observações -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Observações</h2>
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 text-lg">
                        Para garantir segurança e a melhor performance, siga as diretrizes do fabricante do equipamento e da Marabu. Realize sempre seus próprios testes para confirmar a adequação ao uso pretendido.
                    </p>
                </div>
            </div>
        </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
