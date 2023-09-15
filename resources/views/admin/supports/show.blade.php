<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem de Suportes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-start h-screen mt-28 bg-gray-200">


<div class="flex flex-col justify-center items-center w-full max-w-5xl rounded-lg shadow-lg p-6 bg-white">
    <h1 class="mb-6 text-center text-4xl">Detalhes do Ticket {{ $support->id }}</h1>
    <form action="{{ route('supports.destroy', $support->id) }}" method="POST">
        @csrf
        @method('delete')
        <div class="mb-4">
            <ul class="text-xl p-2">
                <li>Assunto: {{ $support->subject }}</li>
                <li>Status: {{ $support->status }}</li>
                <li>Descricao: {{ $support->content }}</li>
            </ul>
        </div>
        <div>
            <a href="{{ url()->previous() }}">
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Voltar
                </button>
            </a>
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar
            </button>
        </div>
    </form>
</div>

