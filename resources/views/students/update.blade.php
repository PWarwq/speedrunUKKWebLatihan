<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Update</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex min-h-screen flex-col">

        {{-- Navbar --}}
        <x-navbar />


        {{-- Main --}}
        <main class="flex-1 p-10">

            <div class="max-w-2xl mx-auto">

                <form class="flex flex-col gap-6">

                    {{-- Title --}}
                    <h1 class="text-2xl font-bold">
                        Update Data
                    </h1>


                    {{-- Nama --}}
                    <div class="flex flex-col gap-2">

                        <label for="nama" class="font-semibold">
                            Nama
                        </label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            value="Charles Marselino"
                            class="border border-gray-300 rounded-lg px-4 py-2 outline-none focus:border-blue-500"
                        >

                    </div>


                    {{-- Kelas --}}
                    <div class="flex flex-col gap-2">

                        <label for="kelas" class="font-semibold">
                            Kelas
                        </label>

                        <select
                            name="kelas"
                            id="kelas"
                            class="bg-white border border-gray-300 rounded-lg px-4 py-2 outline-none focus:border-blue-500"
                        >

                            <option>X TKJ</option>
                            <option>X AKL</option>
                            <option>X BiD</option>

                            <option>XI TKJ</option>
                            <option>XI AKL</option>
                            <option>XI BiD</option>

                            <option selected>XII TKJ</option>
                            <option>XII AKL</option>
                            <option>XII BiD</option>

                        </select>

                    </div>


                    {{-- Gender --}}
                    <div class="flex flex-col gap-2">

                        <label class="font-semibold">
                            Gender
                        </label>

                        <div class="flex gap-6">

                            <label class="flex items-center gap-2">
                                <input
                                    type="radio"
                                    name="gender"
                                    value="Laki-Laki"
                                    checked
                                >
                                Laki-Laki
                            </label>

                            <label class="flex items-center gap-2">
                                <input
                                    type="radio"
                                    name="gender"
                                    value="Perempuan"
                                >
                                Perempuan
                            </label>

                        </div>

                    </div>


                    {{-- Button --}}
                    <div class="flex justify-end gap-3">

                        <a
                            href="#"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg"
                        >
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg"
                        >
                            Simpan
                        </button>

                    </div>

                </form>

            </div>

        </main>
        <x-footer />
    </div>

</body>
</html>