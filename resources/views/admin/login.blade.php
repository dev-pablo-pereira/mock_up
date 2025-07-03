<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">
    <form action="{{ route('admin.authenticate') }}" method="POST"
        class="flex flex-col items-center gap-4 rounded bg-[#662775] p-6 shadow">
        @csrf

        <label>Username</label>
        <input type="email" name="email" placeholder="username" value="{{ old('username') }}"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label>Password</label>
        <input type="password" name="password" placeholder="password" class="rounded border bg-[#9f7fa3] px-2 py-1" />
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <a href="{{ route('admin.create') }}" class="text-white">Novo Usuário</a>

        <button type="submit" class="rounded bg-[#1f0d21] px-4 py-2 text-white">Login</button>
    </form>
</body>

</html>
