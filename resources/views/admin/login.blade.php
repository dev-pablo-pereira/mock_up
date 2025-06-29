<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen items-center justify-center bg-[#9f7fa3]">
    <form class="flex flex-col items-center gap-4 rounded bg-[#662775] p-6 shadow">
        <label>Username</label>
        <input type="text" name="username" placeholder="username"
            class="color-white rounded border bg-[#9f7fa3] px-2 py-1" />

        <label>Password</label>
        <input type="password" name="password" placeholder="password" class="rounded border bg-[#9f7fa3] px-2 py-1" />

        <button type="submit" class="rounded bg-[#1f0d21] px-4 py-2 text-white">Login</button>
    </form>
</body>

</html>
