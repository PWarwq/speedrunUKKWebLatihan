<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login Page</title>
</head>
<body>
    <div class="flex min-h-screen flex-col">
    <x-navbar />

    <div class="flex-1 mx-30 my-15 bg-blue-300 rounded-lg p-30 shadow-lg">
        <form action="" class="flex flex-col gap-5 justify-center items-center">
            <p class="bg-blue-500 text-white font-bold rounded-lg px-3 py-2">Login</p>
            <input type="text" name="username" id="" placeholder="Username" class="bg-white shadow-lg px-3 py-2 rounded-lg w-80">
            <input type="text" name="password" id="" placeholder="Password" class="bg-white shadow-lg px-3 py-2 rounded-lg w-80">
            <button type="submit" class="bg-blue-500 rounded-lg px-3 py-2 font-semibold text-white shadow-lg w-60">Login</button>
        </form>
    </div>

    <x-footer />
    </div>
</body>
</html>