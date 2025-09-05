<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar generos e categorias</title>
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
            <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Gerenciar Generos e Categorias</h1>

            @if (session('status'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4 text-center">
                    {{session('status')}}
                </div>
            @endif

            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-white mb-4">Adicionar Novo Genero</h2>
                <form action="{{route('admin.genero.store')}}" method="POST">
                    @csrf
                    <div class="flex items-end space-x-4">
                        <div class="flex-grow">
                            <label for="genero_nome" class="block text-gray-400 mb-1">Nome do Genero</label>
                            <input type="text" id="genero_nome" name="nome" class="form-input w-full rounded-md h-10 p-2 outline-none" required>
                        </div>
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300">
                            Adicionar
                        </button>
                    </div>
                </form>
            </div>
            
            <hr class="border-gray-700 my-8">
            
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-white mb-4">Adicionar Nova Categoria</h2>
                <form action="{{route('admin.categoria.store')}}" method="POST">
                    @csrf
                    <div class="flex items-end space-x-4">
                        <div class="flex-grow">
                            <label for="categoria_nome" class="block text-gray-400 mb-1">Nome da Categoria</label>
                            <input type="text" id="categoria_nome" name="nome" class="form-input w-full rounded-md h-10 p-2 outline-none" required>
                        </div>
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300">
                            Adicionar
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
    
</body>
</html>