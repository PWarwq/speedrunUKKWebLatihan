<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>simple CRUD</title>
</head>
<body>
    <div class="flex min-h-screen flex-col">
        {{-- Header --}}
        <div class="shadow-lg py-5 px-5">
                <div class="flex items-center justify-between">
                    <h1 class="text-lg font-bold">SIMPLE CRUD</h1>
                <div class="flex gap-5">
                    <a href="#" class="bg-blue-500 px-2 py-3 text-lg rounded-lg font-semibold text-white">Data Orang</a> 
                    <a href="#" class="bg-blue-500 px-2 py-3 text-lg rounded-lg font-semibold text-white">Tambah Data</a> 
                    <a href="#" class="bg-blue-500 px-2 py-3 text-lg rounded-lg font-semibold text-white">Login</a> 
                </div>
            </div>
        </div>
        
        {{-- Content --}}
        <div class="flex-1 p-10">
            <div class="rounded-lg shadow-lg">
                <table class="w-full table-fixed">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="text-center px-4 py-4">No</th>
                            <th class="text-center px-4 py-4">Nama</th>
                            <th class="text-center px-4 py-4">Kelas</th>
                            <th class="text-center px-4 py-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="text-center px-4 py-4">1</td>
                            <td class="text-center px-4 py-4">Charles Marselino</td>
                            <td class="text-center px-4 py-4">XII TKJ 2</td>

                            <td class="px-6 py-4">
                                <div class="flex gap-2 justify-center">
                                    <a href="#" class="bg-blue-500 rounded-lg text-white px-3 py-2">Read</a>
                                    <a href="#" class="bg-yellow-500 rounded-lg text-white px-3 py-2">Update</a>
                                    <a href="#" class="bg-red-500 rounded-lg text-white px-3 py-2">Delete</a>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Footer --}}
        <div class="mt-auto bg-blue-400 py-5 text-center">
            <h1>Hai</h1>
        </div>
    </div>
</body>
</html>