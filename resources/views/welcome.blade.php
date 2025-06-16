<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman dengan Background Gambar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Overlay gelap dengan warna tema -->
    <div class="absolute inset-0 bg-[#2b1f1a]/80 z-0"></div>

    <!-- Konten halaman -->
    <div class="relative z-10">
        <!-- Navbar -->
        <nav class="bg-transparent">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse h-16">
                    <!-- misalnya navbar tingginya 4rem -->
                    <img src="image/logo.png" class="h-full object-contain rounded-full" alt="Logo" />
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-[#f5e7d6] rounded-lg md:hidden hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-[#e0d6c5]"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-[#f5e7d6]/20 rounded-lg bg-white/5 md:flex-row md:space-x-6 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                        <li>
                            <a href="#"
                                class="inline-block px-4 py-2 text-[#f5e7d6] hover:text-[#2b1f1a] transition">
                                Halaman Utama
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-block px-4 py-2 text-[#f5e7d6] hover:text-[#2b1f1a] transition">
                                Mitra
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-block px-4 py-2 text-[#f5e7d6] hover:text-[#2b1f1a] transition">
                                Hubungi Kami
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-block px-4 py-2 text-black rounded-full bg-[#ede3d2] hover:bg-[#2b1f1a] transition">
                                Daftar Sekarang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative h-screen bg-cover bg-center text-[#f5e7d6]"
            style="background-image: url('/image/14.jpg')">
            <!-- Overlay gelap dengan warna tema -->
            <div class="absolute inset-0 bg-[#2b1f1a]/75 flex flex-col justify-center items-start px-6 md:px-16">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-[#f5e7d6]">
                    AdaKamar.id
                </h1>
                <p class="text-xl mb-2 text-[#e0d6c5]">
                    Solusi cerdas untuk pemilik kos
                </p>
                <p class="max-w-md text-lg mb-6 text-[#e8dbca]">
                    AdaKamar bantu kelola kost anda dengan mudah dan lebih banyak
                    keuntungan.
                </p>

                <!-- Garis Dekoratif -->
                <div class="mb-6">
                    <div class="w-40 h-1 bg-yellow-400 rounded-full mb-1"></div>
                    <div class="w-28 h-[2px] bg-yellow-300 rounded-full mb-1"></div>
                    <div class="w-16 h-[2px] bg-yellow-200 rounded-full"></div>
                </div>

                <a href="#"
                    class="bg-[#ede3d2] text-black px-6 py-3 rounded-full font-semibold hover:bg-[#2b1f1a] transition">
                    Konsultasi Sekarang
                </a>
            </div>

            <!-- Container di kanan bawah -->
            <div class="absolute bottom-6 right-6 flex space-x-4 z-20 text-white">
                <!-- Instagram -->
                <a href="https://instagram.com" target="_blank" class="hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                        <path
                            d="M12 2.2c3.2 0 3.6 0 4.9.1 1.3.1 2 .3 2.5.5.6.3 1.1.7 1.5 1.2.5.5.9 1 .9 1.6.2.5.4 1.2.5 2.5.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.3-.3 2-.5 2.5-.3.6-.7 1.1-1.2 1.5-.5.5-1 .9-1.6.9-.5.2-1.2.4-2.5.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.3-.1-2-.3-2.5-.5-.6-.3-1.1-.7-1.5-1.2-.5-.5-.9-1-.9-1.6-.2-.5-.4-1.2-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.3.3-2 .5-2.5.3-.6.7-1.1 1.2-1.5.5-.5 1-.9 1.6-.9.5-.2 1.2-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2m0-2.2C8.7 0 8.3 0 7 .1 5.7.2 4.6.5 3.8.9c-.9.4-1.7 1-2.4 1.7C.6 3.3 0 4.1.5 5.1c-.4.8-.7 1.9-.8 3.2C-.1 9.5-.1 9.9 0 12s0 2.5.1 3.8c.1 1.3.4 2.4.8 3.2.4.9 1 1.7 1.7 2.4.7.7 1.5 1.3 2.4 1.7.8.4 1.9.7 3.2.8 1.3.1 1.7.1 4.9.1s3.6 0 4.9-.1c1.3-.1 2.4-.4 3.2-.8.9-.4 1.7-1 2.4-1.7.7-.7 1.3-1.5 1.7-2.4.4-.8.7-1.9.8-3.2.1-1.3.1-1.7.1-4.9s0-3.6-.1-4.9c-.1-1.3-.4-2.4-.8-3.2-.4-.9-1-1.7-1.7-2.4-.7-.7-1.5-1.3-2.4-1.7-.8-.4-1.9-.7-3.2-.8C15.6-.1 15.2-.1 12-.1z" />
                        <path
                            d="M12 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zm0 10.2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                        <circle cx="18.4" cy="5.6" r="1.4" />
                    </svg>
                </a>

                <!-- Twitter -->
                <a href="https://twitter.com" target="_blank" class="hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.26 4.26 0 0 0 1.88-2.35c-.84.5-1.76.87-2.74 1.07a4.24 4.24 0 0 0-7.23 3.86A12 12 0 0 1 3.16 4.88a4.24 4.24 0 0 0 1.31 5.66 4.22 4.22 0 0 1-1.92-.53v.05a4.25 4.25 0 0 0 3.4 4.17 4.27 4.27 0 0 1-1.91.07 4.25 4.25 0 0 0 3.96 2.94 8.5 8.5 0 0 1-5.26 1.81c-.34 0-.68-.02-1.01-.06A12 12 0 0 0 8.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.36-.01-.53A8.3 8.3 0 0 0 22.46 6z" />
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank" class="hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                        <path
                            d="M12 2a10 10 0 0 0-9.1 14.5L2 22l5.7-1.9A10 10 0 1 0 12 2zm5.9 14.2c-.3.8-1.5 1.5-2.1 1.6-.5.1-1.1.2-3.2-.7-2.7-1.1-4.4-3.9-4.5-4.1s-1.1-1.5-1.1-2.8c0-1.3.7-1.9.9-2.1.3-.3.6-.4.8-.4h.6c.2 0 .4 0 .6.5.3.8 1 2.7 1.1 2.9.1.2.2.4.1.6-.1.2-.1.3-.3.5-.1.2-.3.4-.5.6-.2.2-.4.4-.2.7s1 .8 2.2 1.4c.8.4 1.5.5 2 .6.5.1.8.1 1.1-.1.3-.2 1.3-.6 1.4-1.2.2-.6.2-1.1.1-1.2-.1-.1-.1-.2-.3-.3z" />
                    </svg>
                </a>
            </div>
        </section>

        <!-- Tentang Section -->
        <section class="bg-[#2b1f1a] text-white py-16 px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Bagian Teks -->
                <div class="text-left">
                    <h2 class="text-3xl font-bold mb-4">Ada Kamar.id</h2>
                    <p class="text-lg mb-6 max-w-xl">
                        AdaKamar.id merupakan layanan pengelolaan kos terpercaya di
                        Indonesia. Kami membantu Anda untuk mengelola kos atau kontrakan
                        secara profesional dengan strategi promosi yang efektif.
                    </p>
                    <a href="#"
                        class="inline-block border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">
                        Lihat Portofolio
                    </a>
                </div>

                <!-- Bagian Gambar -->
                <div class="relative flex justify-center items-center h-[300px]">
                    <!-- Garis Dekoratif -->
                    <div class="absolute bottom-0 w-[220px] h-[4px] bg-yellow-400 rounded-full blur-[1px] z-0"></div>
                    <div class="absolute bottom-2 w-[160px] h-[2px] bg-yellow-300 rounded-full z-0"></div>
                    <div class="absolute bottom-4 w-[80px] h-[2px] bg-yellow-200 rounded-full z-0"></div>

                    <!-- Gambar 1 - Kiri belakang -->
                    <img src="/image/11.jpg" alt="Gambar 1"
                        class="absolute left-12 top-12 w-36 h-48 object-cover rounded-xl shadow-lg rotate-[-6deg] hover:scale-105 transition duration-300 z-10" />

                    <!-- Gambar 2 - Tengah depan -->
                    <img src="/image/12.jpg" alt="Gambar 2"
                        class="relative w-40 h-56 object-cover rounded-xl shadow-2xl rotate-2 hover:scale-105 transition duration-300 z-20" />

                    <!-- Gambar 3 - Kanan belakang -->
                    <img src="/image/13.jpg" alt="Gambar 3"
                        class="absolute right-12 top-12 w-36 h-48 object-cover rounded-xl shadow-lg rotate-[5deg] hover:scale-105 transition duration-300 z-10" />
                </div>
            </div>
        </section>

        <!-- Galeri / Strategi Promosi -->
        <section class="bg-[#2b1f1a] text-white py-16 px-4 text-center">
            <h2 class="text-xl font-semibold mb-2">Strategi Promosi</h2>
            <p class="mb-10">
                Kelola Ruang menerima kerjasama kemitraan semua kondisi penginapan
            </p>
            <!-- Garis Kuning -->
            <div class="h-1 bg-yellow-400 w-100 mx-auto mt-1 mb-6"></div>

            <div class="columns-2 md:columns-4 gap-4 px-4 space-y-4 max-w-6xl mx-auto">
                <img class="w-full max-w-full rounded-lg" src="/image/18.jpg" alt="1" />
                <img class="w-full max-w-full rounded-lg" src="/image/17.jpg" alt="2" />
                <img class="w-full max-w-full rounded-lg" src="/image/3.jpg" alt="3" />
                <img class="w-full max-w-full rounded-lg" src="/image/4.jpg" alt="4" />
                <img class="w-full max-w-full rounded-lg" src="/image/5.jpg" alt="5" />
                <img class="w-full max-w-full rounded-lg" src="/image/6.jpg" alt="6" />
                <img class="w-full max-w-full rounded-lg" src="/image/3.jpg" alt="7" />
                <img class="w-full max-w-full rounded-lg" src="/image/8.jpg" alt="8" />
                <img class="w-full max-w-full rounded-lg" src="/image/13.jpg" alt="9" />
                <img class="w-full max-w-full rounded-lg" src="/image/12.jpg" alt="10" />
                <img class="w-full max-w-full rounded-lg" src="/image/11.jpg" alt="11" />
                <img class="w-full max-w-full rounded-lg" src="/image/12.jpg" alt="12" />
                <img class="w-full max-w-full rounded-lg" src="/image/13.jpg" alt="13" />
                <img class="w-full max-w-full rounded-lg" src="/image/14.jpg" alt="14" />
                <img class="w-full max-w-full rounded-lg" src="/image/15.jpg" alt="15" />
                <img class="w-full max-w-full rounded-lg" src="/image/12.jpg" alt="16" />
                <img class="w-full max-w-full rounded-lg" src="/image/15.jpg" alt="17" />
            </div>
            <div class="h-1 bg-yellow-400 w-300 mx-auto mt-3 mb-6"></div>
        </section>

        <!-- Kenapa Memilih Section -->
        <section class="bg-[#2b1f1a] text-white py-16 px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Kenapa Memilih Kamar.id</h3>
            <p class="text-sm mb-8">
                Nikmati penghasilan stabil setiap bulan tanpa ribet!
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
                <div class="border p-6 rounded-md">
                    <h4 class="font-bold mb-2">Kerjasama Win-Win</h4>
                    <p>
                        Sistem kerjasama yang win-win solution dengan pembagian sharing
                        profit. Jika kamar tidak laku, juga tidak untung, jika kamar
                        tidak terisi.
                    </p>
                </div>
                <div class="border p-6 rounded-md">
                    <h4 class="font-bold mb-2">Bantuan Pemasaran</h4>
                    <p>
                        Kami bantu pemasaran dengan jaringan digital kami. Kamar jadi
                        cepat terisi.
                    </p>
                </div>
                <div class="border p-6 rounded-md">
                    <h4 class="font-bold mb-2">Tanpa Ribet</h4>
                    <p>
                        Kamu tinggal terima bersih. Kami bantu handle semuanya dari A-Z.
                    </p>
                </div>
            </div>
        </section>

        <!-- Statistik -->
        <section class="bg-[#2b1f1a] text-white py-16 px-4 text-center">
            <h3 class="font-semibold text-lg mb-4">
                Tingkatkan profit dari properti Anda sekarang!
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                <div class="p-4 border rounded-md">
                    <p class="text-3xl font-bold">20++</p>
                    <p class="text-sm">Kos dikelola</p>
                </div>
                <div class="p-4 border rounded-md">
                    <p class="text-3xl font-bold">80%</p>
                    <p class="text-sm">Keterisian kamar setiap bulan</p>
                </div>
                <div class="p-4 border rounded-md">
                    <p class="text-3xl font-bold">95%</p>
                    <p class="text-sm">Keuntungan bulanan meningkat</p>
                </div>
                <div class="p-4 border rounded-md">
                    <p class="text-3xl font-bold">90%</p>
                    <p class="text-sm">Klien puas atas layanan</p>
                </div>
            </div>
        </section>

        <!-- Testimoni -->
        <section class="bg-[#2b1f1a] text-white py-16 px-4 text-center">
            <h3 class="font-semibold mb-6">Apa Kata Klien Kami</h3>
            <div class="flex flex-col md:flex-row justify-center gap-8 px-6">
                <div class="bg-[#1f1712] p-6 rounded-md border max-w-sm mx-auto">
                    <p class="mb-4">
                        “Sejauh ini sangat baik, saya bisa mendapatkan income bulanan
                        tanpa khawatir dengan pemesanan kos seperti pemasukan uang
                        bulanan anak kos.”
                    </p>
                    <p class="font-bold text-yellow-500">Alfira Aulia Maharni</p>
                </div>
                <div class="bg-[#1f1712] p-6 rounded-md border max-w-sm mx-auto">
                    <p class="mb-4">
                        “Alhamdulillah, sudah menggunakan sekitar 3 tahunan. Dulu kos
                        saya nggak pernah penuh dan rata-rata hanya isi 50%. Tapi
                        setelah join dengan kelola ruang, keterisian kamar selalu di
                        atas 85%.”
                    </p>
                    <p class="font-bold text-yellow-500">Reza Seffyanti</p>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>

</html>
