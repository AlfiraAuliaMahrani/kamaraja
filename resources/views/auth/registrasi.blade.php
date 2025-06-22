<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="/register" method="POST" class="w-full max-w-md bg-white p-8 rounded-lg shadow-md space-y-6">
            @csrf

            <!-- Judul -->
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-800">Daftar Akun Baru</h2>
                <p class="text-sm text-gray-500">Silakan isi data diri Anda di bawah</p>
            </div>


            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 pr-10 focus:border-indigo-500 focus:ring-indigo-500" />
                </div>
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                    Password</label>
                <div class="relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 pr-10 focus:border-indigo-500 focus:ring-indigo-500" />
                </div>
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Daftar
                </button>
            </div>

            <!-- Sudah punya akun -->
            <div class="text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="/login" class="text-indigo-600 hover:underline">Masuk di sini</a>
            </div>
        </form>
    </div>


</body>

</html>
