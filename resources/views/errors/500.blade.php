<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="shortcut icon" href="{{url('images/logo01-removebg.png')}}" >
    <title>AMZ - Amazonas Distribuidora PB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-pulse { animation: pulse 2s infinite; }
        .animate-fade-in { animation: fadeIn 0.6s ease-out; }
    </style>
</head>
<body class="bg-gray-50 font-poppins text-gray-800 min-h-screen flex items-center justify-center p-5 relative overflow-x-hidden">
    
    <main class="w-full flex items-center justify-center">
        <div class="max-w-xl w-full p-8 md:p-10 bg-white rounded-3xl shadow-2xl text-center relative animate-fade-in">
            <div class="text-red-600 mb-5 text-8xl animate-pulse">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            
            <div class="text-red-600 font-extrabold text-[120px] md:text-[140px] leading-none mb-2 opacity-80" style="text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.05);">500</div>
            
            <h1 class="text-gray-900 text-3xl md:text-4xl font-bold mb-4">
                Oops! Erro no servidor
            </h1>
            
            <p class="text-lg text-gray-600 leading-relaxed mb-8">
                Ocorreu um erro inesperado no servidor. Nossa equipe técnica já foi notificada e está trabalhando para resolver o problema.
            </p>
            
            <div class="flex flex-col md:flex-row gap-4 justify-center mt-6">
                <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 bg-green-500 text-white rounded-full font-semibold transition-all duration-300 ease-in-out hover:bg-green-600 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                    <i class="fas fa-home mr-3"></i> Voltar para a página inicial
                </a>
                <a href="javascript:history.back()" class="inline-flex items-center px-6 py-3 bg-gray-500 text-white rounded-full font-semibold transition-all duration-300 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                    <i class="fas fa-arrow-left mr-3"></i> Voltar para a página anterior
                </a>
            </div>
            
            <div class="mt-8 pt-5 border-t border-gray-200 text-gray-500 text-sm">
                <p>Precisa de ajuda? <a href="/contato" class="text-green-600 hover:underline font-semibold">Entre em contato conosco</a> ou ligue para (83) 1234-5678</p>
            </div>
        </div>
    </main>
</body>
</html>