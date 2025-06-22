<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="/login" method="POST" class="w-full max-w-md bg-white p-8 rounded-lg shadow-md space-y-6">
            @csrf

            <!-- Judul -->
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-800">Login ke Akun Anda</h2>
                <p class="text-sm text-gray-500">Masukkan email dan password Anda</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500" />
            </div>

            <!-- Password + Eye Icon -->
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                </div>
                <div class="relative">
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 pr-10 focus:border-indigo-500 focus:ring-indigo-500" />
                </div>
                <a href="/lupa-password" class="text-sm text-indigo-600 hover:underline">Lupa kata sandi?</a>

            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Login
                </button>
            </div>
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun?
                    <a href="/register" class="text-indigo-600 hover:underline">Daftar sekarang</a>
                </p>
            </div>
        </form>
    </div>


    <!-- Script Toggle Eye -->
    {{-- <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");

            const isHidden = passwordInput.type === "password";
            passwordInput.type = isHidden ? "text" : "password";
        }
    </script> --}}


</body>

</html>
