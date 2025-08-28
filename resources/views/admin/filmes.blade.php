<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme</title>
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
    <div class="container max-w-2xl mx-auto">
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 md:p-8">
            <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Adicionar Novo Filme</h1>
            
            <form action="{{ route('admin.filmes.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="titulo" class="block text-gray-400 mb-1">Título</label>
                        <input type="text" id="titulo" name="titulo" class="form-input w-full rounded-md" required>
                    </div>
                    <div>
                        <label for="sinopse" class="block text-gray-400 mb-1">Sinopse</label>
                        <textarea id="sinopse" name="sinopse" rows="4" class="form-input w-full rounded-md" required></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="ano" class="block text-gray-400 mb-1">Ano de Lançamento</label>
                            <input type="number" id="ano" name="ano_lancamento" class="form-input w-full rounded-md" required>
                        </div>
                        <div>
                            <label for="duracao" class="block text-gray-400 mb-1">Duração (minutos)</label>
                            <input type="number" id="duracao" name="duracao" class="form-input w-full rounded-md" required>
                        </div>
                    </div>
                    <div>
                        <label for="poster" class="block text-gray-400 mb-1">URL do Pôster</label>
                        <input type="url" id="poster" name="url_poster" class="form-input w-full rounded-md" required>
                    </div>
                    
                    <div>
                        <label for="generos" class="block text-gray-400 mb-1">Gêneros</label>
                        <select name="generos[]" id="generos" class="form-input w-full rounded-md" multiple required>
                            @foreach ($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                        </select>
                        <small class="text-gray-500">Mantenha 'Ctrl' (Windows) ou 'Cmd' (Mac) para selecionar múltiplos gêneros.</small>
                    </div>
                    
                    <div>
                        <label for="categorias" class="block text-gray-400 mb-1">Categorias</label>
                        <select name="categorias[]" id="categorias" class="form-input w-full rounded-md" multiple required>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                        <small class="text-gray-500">Mantenha 'Ctrl' (Windows) ou 'Cmd' (Mac) para selecionar múltiplos gêneros.</small>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300">
                            Adicionar Filme
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>