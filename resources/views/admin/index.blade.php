<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">

    <h1>Home admin</h1>
    <a href="{{ route('admin.hotel.create') }}" class="text-white">Novo Hotel</a>
    <ul>
        @foreach ($hotels as $hotel)
            <li class="rounded bg-[#662775] p-4 shadow">
                <strong>{{ $hotel->name }}</strong><br>
                {{ $hotel->city }}, {{ $hotel->state }} - {{ $hotel->street }}, Nº {{ $hotel->number }} - Quarto:
                {{ $hotel->room }} - {{ $hotel->id }}
                <a href="{{ route('admin.hotel.edit', $hotel->id) }}" class="text-white">Editar</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
