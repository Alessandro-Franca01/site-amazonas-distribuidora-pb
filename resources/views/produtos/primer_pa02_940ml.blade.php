@extends('produtos.layout')

@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <div class="bg-gray-200 py-2">
        <div class="container mx-auto px-6">
            <div class="flex items-center text-sm">
                <span class="breadcrumb-item"><a href="/" class="text-blue-600 hover:text-blue-800">Início</a></span>
                <span class="breadcrumb-item"><a href="/#produtos" class="text-blue-600 hover:text-blue-800">Produtos</a></span>
                <span class="breadcrumb-item text-gray-600">Primer PA02 940ml</span>
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
                        <img src="{{ asset('images/produtos/primer_pa02_940ml.jpeg') }}"
                             alt="Álcool Isopropanol ST 900ml"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Primer PA02 940ml</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">O Primer PA02 ACM tem a função de promover a adesão das Fitas Adesivas de Espuma Acrílica, em substratos como: ACM, metais e metais pintados eletrostaticamente nas aplicações para Comunicação Visual. Para assegurar que o produto seja apropriado à superfície, é recomendado testar previamente..</p>
                        <p class="text-base md:text-lg text-gray-700"><strong> Atenção:</strong> Este Primer não deve ser utilizado para Structural Glazing / Pele de Vidro.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=5583993615903&text=Olá! Gostaria de informações sobre o Primer PA02 940ml"
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
                                <td class="py-3 text-gray-800">Primer PA02 940ml</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Marca</td>
                                <td class="py-3 text-gray-800">ADERE</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Volume</td>
                                <td class="py-3 text-gray-800">940ml</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Outras Caracteristicas</td>
                                <td class="py-3 text-gray-800">Sem mais informações</td>
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

            <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                <span class="material-icons text-5xl text-blue-600 mb-4 mx-auto">cleaning_services</span>
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Limpeza de Eletrônicos</h3>
                <p class="text-gray-600">Promover adesão das Fitas Adesivas de Espuma Acrílica em substratos como: ACM, metais e metais pintados eletrostaticamente.</p>
            </div>
        </div>
        <!-- Orientações de Uso -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Orientações de Uso</h2>
            <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                <ul class="list-disc list-inside space-y-4 text-gray-700 text-lg">
                    <li>
                        <strong class="text-blue-600">1- Limpeza antes da aplicação:</strong> usar um pano LIMPO, que não solte fiapos, embebido em álcool isopropílico, em sentido único para que a sujeira, ou contaminação, não seja somente espalhada pela superfície.
                    </li>
                    <li>
                        <strong class="text-blue-600">2- Quantidade:</strong> Atenção! uma maior quantidade não irá promover mais adesão. O excesso de primer pode provocar falhas de adesão. Aplique o mínimo possível, somente para cobrir levemente a superfície.
                    </li>
                    <li>
                        <strong class="text-blue-600">4- Tempo de secagem:</strong> de 60 segundos até 5 minutos. O tempo pode variar conforme a umidade relativa do ar e temperatura. Em ambientes frios e úmidos, o primer demorará mais para secar. Em ambientes secos e quentes, o primer secará mais rápido.
                    </li>
                    <li>
                        <strong class="text-blue-600">5- Tempo em aberto:</strong> O recomendado é aplicar a fita imediatamente após a secagem do primer, mas, em casos excepcionais, ela poderá ser realizada em até 15 minutos. Mesmo assim, verifique se durante este intervalo, a superfície não foi contaminada por poeira ou outras substâncias.
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
