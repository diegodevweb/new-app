<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="p-2">Listagem de Suportes</h1>

<a href="{{ route('supports.create') }}" class="underline rounded-full p-2">Criar nova duvida</a>
    <div>
        <table class="table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2">id</th>
                    <th class="p-2">assunto</th>
                    <th class="p-2">status</th>
                    <th class="p-2">description</th>
                    <th class="p-2">acoes</th>
                </tr>
            </thead>
            <tbody>
            @foreach($supports as $support)
                <tr>
                    <td>{{ $support->id }}</td>
                    <td class="p-2">{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->content }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>

