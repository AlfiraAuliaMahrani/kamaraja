<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamar</title>
    @vite('resources/css/app.css') {{-- pastikan Tailwind sudah di-compile --}}
</head>

<body class="bg-purple-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold text-purple-900 mb-6 text-center">➕ Tambah Kamar</h1>

        <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            {{-- Judul --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Judul:</label>
                <input type="text" name="judul" required 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi:</label>
                <textarea name="deskripsi" rows="4" 
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none"></textarea>
            </div>

            {{-- Gambar --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar:</label>
                <input type="file" name="gambar" accept="image/*" required 
                       class="w-full border rounded-lg px-3 py-2 cursor-pointer focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end gap-3">
                <a href="{{ route('kamar.index') }}" 
                   class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg shadow transition">
                    ↩️ Batal
                </a>
                <button type="submit" 
                        class="px-4 py-2 bg-pink-400 hover:bg-pink-500 text-white rounded-lg shadow transition">
                    💾 Simpan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
