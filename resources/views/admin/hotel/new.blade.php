<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">
    <form class="flex w-1/3 flex-col items-center gap-4 rounded bg-[#662775] p-6 shadow">
        @csrf

        <label>Nome</label>
        <input type="text" placeholder="ex: Hotel maringuá" name="name"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />

        <select name="state" id="cars" class="color-white w-2/4 rounded border bg-[#9f7fa3] px-2 py-1">
            <option value="">Estado</option>
            <option value="pr">Paraná</option>
            <option value="sc">Santa Catarina</option>
            <option value="rs">Rio Grande do Sul</option>
            <option value="sp">São Paulo</option>
        </select>

        <label>Cidade</label>
        <input type="text" placeholder="Cidade" name="city"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />

        <label>Rua</label>
        <input type="text" placeholder="Rua" name="street"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />

        <label>Numero</label>
        <input type="text" placeholder="Numero" name="number"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />

        <label>Quartos</label>
        <input type="text" placeholder="Quartos" name="rooms"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
    </form>
</body>

</html>
