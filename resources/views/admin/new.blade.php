<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">
    <h2>Novo Usuário</h2>
    <form action="{{ route('admin.store') }}" method="POST"
        class="flex flex-col items-center gap-4 rounded bg-[#662775] p-6 shadow">
        @csrf

        <label>name</label>
        <input type="text" name="name" placeholder="username" value="{{ old('name') }}"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>email</label>
        <input type="email" name="email" placeholder="exemplo@gmail.com" value="{{ old('email') }}"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Password</label>
        <input type="password" name="password" placeholder="password" class="rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="password"
            class="rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="rounded bg-[#1f0d21] px-4 py-2 text-white">Login</button>
    </form>
</body>

</html>
