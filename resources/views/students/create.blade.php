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
    <div class="flex min-h-screen flex-col">
        <x-navbar />

        <div class="flex-1 mx-30 my-15 bg-blue-300 rounded-lg p-30 shadow-lg">
            <form action="" class="flex flex-col items-center justify-center gap-5">
                <h1 class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg">Silahkan isi data siswa</h1>
                <input type="text" name="nama" id="" placeholder="Nama" class="bg-white shadow-lg px-3 py-2 rounded-lg w-80">
                <select name="kelas" id="kelas" class="bg-white shadow-lg px-3 py-2 rounded-lg w-80" >
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="X TKJ">X TKJ</option>
                    <option value="X AKL">X AKL</option>
                    <option value="X BiD">X BiD</option>

                    <option value="XI TKJ">XI TKJ</option>
                    <option value="XI AKL">XI AKL</option>
                    <option value="XI BiD">XI BiD</option>

                    <option value="XII TKJ">XII TKJ</option>
                    <option value="XII AKL">XII AKL</option>
                    <option value="XII BiD">XII BiD</option>
                </select>

                <select name="kelas" id="kelas" class="bg-white shadow-lg px-3 py-2 rounded-lg w-80" >
                    <option value="" disabled selected>Gender</option>
                    <option value="lakiLaki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <button type="submit" class="bg-blue-500 shadow-lg px-5 py-3 rounded-lg font-semibold text-white w-60">Bikin</button>
            </form>            
        </div>

        <x-footer />
    </div>
</body>
</html>