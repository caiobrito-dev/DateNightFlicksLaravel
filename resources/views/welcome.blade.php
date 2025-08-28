<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Date Night Flicks</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #1a1a1a; /* Cor de fundo escura */
                color: #f5f5f5; /* Cor do texto principal */
            }
            .card {
                background-color: #2b2b2b; /* Cor de fundo dos cards */
                border: 2px solid transparent;
                transition: all 0.3s ease;
            }
            .card:hover {
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 10px 20px rgba(220, 38, 38, 0.4); /* Sombra avermelhada */
                border-color: #dc2626; /* Borda vermelha ao passar o mouse */
            }
        </style>
    </head>
    <body class="flex items-center justify-center min-h-screen p-4 md:p-8">
        <div class="container max-w-5xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-red-600 leading-tight mb-2">
                Date Night Flicks
            </h1>
            <p class="text-base md:text-xl text-gray-400 mb-10">
                A sua próxima noite de cinema começa aqui.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <a href="/sortear-todos" class="card rounded-2xl p-6 md:p-8 cursor-pointer transform hover:scale-105 transition-transform duration-300  block">
                    <h2 class="text-2xl md:text-3xl font-bold mb-3 text-red-400">
                        Sortear Todos
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base">
                        Escolha um filme aleatório da nossa coleção
                    </p>
                </a>
                <a href="/sortear-todos" class="card rounded-2xl p-6 md:p-8 cursor-pointer transform hover:scale-105 transition-transform duration-300  block">
                    <h2 class="text-2xl md:text-3xl font-bold mb-3 text-red-400">
                        Por Gênero
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base">
                        Filtre e sorteie por comédia, romance, ação e muito mais
                    </p>
                </a>
                <a href="/sortear-todos" class="card rounded-2xl p-6 md:p-8 cursor-pointer transform hover:scale-105 transition-transform duration-300  block">
                    <h2 class="text-2xl md:text-3xl font-bold mb-3 text-red-400">
                        Criar Lista
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base">
                        Adicione seus filmes favoritos para sortear entre eles
                    </p>
                </a>
                <a href="/sortear-todos" class="card rounded-2xl p-6 md:p-8 cursor-pointer transform hover:scale-105 transition-transform duration-300  block">
                    <h2 class="text-2xl md:text-3xl font-bold mb-3 text-red-400">
                        Por Categoria
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base">
                        Sorteie por filmes clássicos, indicados ao Oscar, etc.
                    </p>
                </a>
            </div>
            <div class="mt-12 text-center text-gray-500 text-sm">
                <p>
                    As funcionalidades de cada botão serão implementadas em breve.
                </p>
            </div>
        </div>
        
    </body>
</html>
            