<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme Sorteado - Date Night Flicks</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a1a1a;
            color: #f5f5f5;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4 md:p-8">
    <div class="container max-w-2xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-red-600 leading-tight mb-6">
            O Filme Sorteado é: 
        </h1>

        @if(isset($filme))
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 md:p-8">
                <h2 class="text-3xl font-bold text-white mb-2">
                    {{$filme->titulo}}
                </h2>
                <p class="text-gray-400 mb-4">({{$filme->ano_lancamento}})</p>

                <img src="{{$filme->url_poster}}" alt="Poster do Filme {{$filme->titulo}}" class="w-full max-w-xs mx-auto h-auto rounded-lg mb-4 object-cover">

                <p class="text-gray-300 text-base mb-6">{{$filme->sinopse}}</p>

                <div class="flex justify-center items-center text-gray-400 text-sm md:text-base">
                    <span class="mr-2">Duração: {{ $filme->duracao }} min</span>
                    @if ($filme->generos->isNotEmpty())
                        |
                        <span class="ml-2 mr-2">Gêneros: {{ $filme->generos->pluck('nome')->implode(', ') }}</span>
                    @endif
                    @if ($filme->categorias->isNotEmpty())
                        |
                        <span class="ml-2">Categorias: {{ $filme->categorias->pluck('nome')->implode(', ') }}</span>
                    @endif
                </div>

                <div class="mt-6">
                    <a href="" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full transition-colors duration-300">
                        Sortear Novamente
                    </a>
                </div>

            </div>
        @else
            <p class="text-xl text-gray-400 mt-8">{{$mensagem}}</p>
            <div class="mt-6">
                <a href="/" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full transition-colors duration-300">
                    Voltar para a Página Inicial
                </a>
            </div>
        @endif
    </div>
    
</body>
</html>