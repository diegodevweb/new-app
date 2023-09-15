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

<body class="flex justify-center items-start h-screen mt-10 bg-gray-200">


    <div class="flex flex-col justify-center items-center w-full max-w-5xl rounded-lg shadow-md p-6 bg-white">
        <h1 class="mb-6 text-center text-4xl">Editar Ticket {{ $support->id }}</h1>
        <form action="{{ route('supports.update', $support->id) }}" method="POST">
            @csrf()
            @method('put')
            <div class="mb-4">
                <input class="border rounded px-2 py-1 w-full" type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }} ">
            </div>
            <div class="mb-4">
                <textarea name="content" cols="30" rows="5" placeholder="Descrição"
                          class="border rounded px-2 py-1 w-full">{{ $support->content }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Enviar
                </button>
                <a href="{{ url()->previous() }}"><button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voltar</button></a>
            </div>
        </form>
    </div>

</body>



