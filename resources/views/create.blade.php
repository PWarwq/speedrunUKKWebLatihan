<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>
<body>
    {{-- Header --}}
    <div class="flex min-h-screen flex-col">
        <x-navbar />

        <div class="flex-1 mx-30 my-15  bg-blue-300 rounded-lg p-30 shadow-lg">
            <form action="" class="flex flex-col items-center justify-center gap-5">
                <input type="text" name="nama" id="" placeholder="Nama" class="bg-white shadow-lg px-3 py-2 rounded-lg">
                <input type="text" name="kelas" id="" placeholder="Kelas" class="bg-white shadow-lg px-3 py-2 rounded-lg">
                <button type="submit" class="bg-blue-500 shadow-lg px-5 py-3 rounded-lg font-semibold">Submit</button>
            </form>            
        </div>

        <x-footer />
    </div>
</body>
</html>