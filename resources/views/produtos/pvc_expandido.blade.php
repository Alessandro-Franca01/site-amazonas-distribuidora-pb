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
                        <img src="{{ asset('images/produtos/pvc/pvc_expandido_branco.jpeg') }}"
                             alt="PVC Expandido"
                             class="w-full h-auto max-h-[400px] object-contain rounded-lg cursor-pointer" id="mainProductImage">
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <img src="{{ asset('images/produtos/pvc/pvc_expandido_branco.jpeg') }}"
                             alt="IMG 01"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                        <img src="{{ asset('images/produtos/pvc/pvc_expandido_preto.jpeg') }}"
                             alt="IMG 02"
                             class="w-full h-20 md:h-24 object-cover rounded-lg shadow cursor-pointer thumbnail-image">
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 md:mb-4">Chapa de PVC Expandido</h1>

                    <div class="bg-gray-100 p-4 md:p-6 rounded-lg mb-4 md:mb-6">
                        <p class="text-base md:text-lg text-gray-700 mb-3 md:mb-4">
                            Desenvolvido para o mercado de comunicação visual, o PVC expandido é um polímero leve e fácil de usar. Seu acabamento liso e uniforme facilitam a impressão, o que proporciona excelentes resultados nos mais diversos processos produtivos.
                            Por conta do seu baixo custo e ótima resistência, esse material tem sido bastante utilizado em diversos setores, como construção civil e marcenaria. Seus benefícios são inúmeros e têm atraído muitos compradores.
                        </p>

                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="https://api.whatsapp.com/send?phone=83993615903&text=Olá! Gostaria de informações sobre a Chapa de PVC Expandido"
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
                                <td class="py-3 text-gray-800">Poly Sheet</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">Modelo</td>
                                <td class="py-3 text-gray-800">PVC Expandido</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Outros</h3>
                        <table class="w-full">
                            <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 text-gray-600 font-medium">É Kit</td>
                                <td class="py-3 text-gray-800">Não</td>
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