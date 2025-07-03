<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">
    <form action="{{ route('admin.hotel.update', $hotel->id) }}" method="POST"
        class="flex w-1/3 flex-col items-center gap-4 rounded bg-[#662775] p-6 shadow">
        @csrf
        @method('PUT')

        <label>Nome</label>
        <input type="text" value="{{ $hotel->name }}" name="name"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <select name="state" id="cars" class="color-white w-2/4 rounded border bg-[#9f7fa3] px-2 py-1">
            <option value="">Estado</option>
            <option value="pr" {{ $hotel->state == 'pr' ? 'selected' : '' }}>Paraná</option>
            <option value="sc" {{ $hotel->state == 'sc' ? 'selected' : '' }}>Santa Catarina</option>
            <option value="rs" {{ $hotel->state == 'rs' ? 'selected' : '' }}>Rio Grande do Sul</option>
            <option value="sp" {{ $hotel->state == 'sp' ? 'selected' : '' }}>São Paulo</option>
        </select>
        @error('state')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Cidade</label>
        <input type="text" value="{{ $hotel->city }}" placeholder="Cidade" name="city"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('city')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Rua</label>
        <input type="text" value="{{ $hotel->street }}" placeholder="Rua" name="street"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('street')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Numero</label>
        <input type="text" value="{{ $hotel->number }}" placeholder="Numero" name="number"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('number')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Quartos</label>
        <input type="text" value="{{ $hotel->room }}" placeholder="Quartos" name="room"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('room')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="rounded bg-[#1f0d21] px-4 py-2 text-white">Salvar</button>
    </form>
</body>

</html>
