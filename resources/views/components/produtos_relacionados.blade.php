<!-- Produtos Relacionados -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Produtos em Destaques</h2>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                <img alt="Primer" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/primer_pa02_940ml.jpeg') }}"/>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">Primer</h3>
                    <p class="text-gray-600 text-sm">Soluções impactantes para destacar a identidade visual da sua empresa.</p>
                    <a href="{{ url('/produtos/primer_pa02_940ml') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                <img alt="ACM - Aluminio Composto" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/acms/acm.jpeg') }}"/>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">ACM - Aluminio Composto</h3>
                    <p class="text-gray-600 text-sm">O ACM (Alumínio Composto) Amazonas é um material de construção versátil, utilizado em fachadas, revestimentos e peças decorativas.</p>
                    <a href="{{ url('/produtos/acm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                <img alt="Adesivos" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/fitas/fita_dupla_face_alta_performace.jpeg') }}"/>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">Fita Dupla Face - Alta Performace</h3>
                    <p class="text-gray-600 text-sm">A fita Adere Fita Forte é a solução ideal para uma ampla gama de aplicações, tanto em ambientes internos quanto externos.</p>
                    <a href="{{ url('/produtos/fita_forte_adere_dupla_face') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                <img alt="Ilhoseira" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" src="{{ asset('images/produtos/ilhoseira_semi_auto_10mm.jpeg') }}"/>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">Ilhoseira Semi Automática 10mm</h3>
                    <p class="text-gray-600 text-sm">A Ilhoseira Semi-Automática da Westman foi desenvolvida para profissionais que buscam rapidez, precisão e praticidade na aplicação de ilhós em diferentes materiais.</p>
                    <a href="{{ url('/produtos/ilhoseira_semi_auto_10mm') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Ver detalhes →</a>
                </div>
            </div>
        </div>
    </div>
</section>
