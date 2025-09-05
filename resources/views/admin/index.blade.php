<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a1a1a;
            color: #f5f5f5;
        }
        .form-input {
            background-color: #2b2b2b;
            color: #f5f5f5;
            border: 1px solid #4a4a4a;
        }
        .form-input:focus {
            border-color: #dc2626;
            box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.4);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4 md:p-8">
    <div class="container max-w-6xl mx-auto">
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 md:p-8">
            <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Painel de Administração</h1>

            <!-- Seção de Gerenciamento de Filmes -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-white mb-4 flex items-center justify-between">
                    Filmes
                    <a href="{{ route('admin.filmes.create') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300 text-sm">Adicionar Filme</a>
                </h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-gray-700 rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gray-600">
                                <th class="py-3 px-4 text-left font-semibold text-sm">Título</th>
                                <th class="py-3 px-4 text-left font-semibold text-sm">Ano</th>
                                <th class="py-3 px-4 text-left font-semibold text-sm">Duração</th>
                                <th class="py-3 px-4 text-left font-semibold text-sm">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($filmes as $filme)
                            <tr class="border-t border-gray-600">
                                <td class="py-3 px-4">{{ $filme->titulo }}</td>
                                <td class="py-3 px-4">{{ $filme->ano_lancamento }}</td>
                                <td class="py-3 px-4">{{ $filme->duracao }} min</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Editar</a>
                                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Seção de Gerenciamento de Gêneros e Categorias -->
            <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
                <!-- Generos -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-semibold text-white mb-4 flex items-center justify-between">
                        Gêneros
                        <a href="{{ route('admin.gerenciar-dados.create') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300 text-sm">Adicionar Gênero/Categoria</a>
                    </h2>
                    <ul class="space-y-2">
                        @foreach ($generos as $genero)
                            <li class="flex items-center justify-between bg-gray-700 p-3 rounded-lg">
                                <span>{{ $genero->nome }}</span>
                                <div class="space-x-2">
                                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Editar</a>
                                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Excluir</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Categorias -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-semibold text-white mb-4">
                        Categorias
                    </h2>
                    <ul class="space-y-2">
                        @foreach ($categorias as $categoria)
                            <li class="flex items-center justify-between bg-gray-700 p-3 rounded-lg">
                                <span>{{ $categoria->nome }}</span>
                                <div class="space-x-2">
                                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Editar</a>
                                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold py-1 px-2 rounded-md transition-colors duration-300">Excluir</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>