<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen">
<div class="w-full max-w-4xl rounded-lg shadow-md p-6">
    <h1 class="text-center text-4xl mb-4">Listagem de Suportes</h1>
    <a href="{{ route('supports.create') }}" class="block text-center rounded-full p-2 my-2 bg-blue-500 text-white">Criar nova dúvida</a>
    <table class="w-full border-collapse rounded-lg overflow-hidden table-auto">
        <thead>
        <tr class="bg-gray-100">
            <th class="p-4">Id</th>
            <th class="p-4">Assunto</th>
            <th class="p-4">Status</th>
            <th class="p-4">Descrição</th>
            <th class="p-4">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($supports as $support)
            <tr class="bg-gray-50">
                <td class="p-4">{{ $support->id }}</td>
                <td class="p-4">{{ $support->subject }}</td>
                <td class="p-4">{{ $support->status }}</td>
                <td class="p-4">{{ $support->content }}</td>
                <td class="p-4">
                    <a href="{{ route('supports.show', $support->id) }}" class="ml-2 text-purple-500">Ver</a>
                    <a href="{{ route('supports.edit', $support->id) }}" class="ml-2 text-blue-500">Editar</a>
                    <a href="{{ route('supports.delete', $support->id) }}" class="ml-2 text-red-500">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

