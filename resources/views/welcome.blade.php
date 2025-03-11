<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sibabang - Solusi Pembayaran Modern</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(90deg, #4F46E5 0%, #7C3AED 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-indigo-600 text-xl font-bold">SI<span class="text-purple-600">BABANG</span></span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Beranda
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Fitur
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Harga
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Testimonial
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Kontak
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="{{route('login')}}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                        Masuk
                    </a>
                    <a href="#" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Daftar
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                    <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Buka menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Beranda
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Fitur
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Harga
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Testimonial
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Kontak
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <a href="{{route('login')}}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                            Masuk
                        </a>
                    </div>
                    <div class="ml-3">
                        <a href="{{route('register')}}" class="block w-full px-5 py-3 text-center font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-6">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <h1 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
                            Solusi Pembayaran <span class="text-indigo-600">Modern</span> untuk Bisnis Anda
                        </h1>
                        <p class="mt-6 text-xl text-gray-500">
                            sibabang memudahkan proses pembayaran digital dengan aman, cepat, dan terpercaya. Tingkatkan konversi penjualan dengan solusi pembayaran terbaik.
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row">
                            <div class="inline-flex rounded-md shadow">
                                <a href="#" class="gradient-bg inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white">
                                    Mulai Sekarang
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                                    Demo Gratis
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-6">
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <img src="{{asset('/assets/payment.png')}}" alt="App dashboard" class="w-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Fitur</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Solusi Pembayaran Terlengkap
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Nikmati berbagai fitur unggulan yang akan mempermudah proses pembayaran bisnis Anda
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Metode Pembayaran Lengkap
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Dukung berbagai metode pembayaran termasuk kartu kredit, e-wallet, transfer bank, dan QRIS.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Keamanan Tingkat Tinggi
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Sistem enkripsi data end-to-end dan autentikasi dua faktor untuk keamanan transaksi.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Checkout Cepat
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Proses pembayaran yang cepat dan mudah untuk meningkatkan konversi penjualan.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Analitik Real-time
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Pantau transaksi dan pendapatan secara real-time dengan dashboard analitik lengkap.
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Harga</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Paket yang Sesuai untuk Bisnis Anda
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Pilih paket yang sesuai dengan kebutuhan dan skala bisnis Anda
                </p>
            </div>

            <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:grid-cols-3">
                <!-- Starter -->
                <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Starter</h2>
                        <p class="mt-4 text-sm text-gray-500">Untuk bisnis kecil yang baru memulai.</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">Rp 199</span>
                            <span class="text-base font-medium text-gray-500">/bulan</span>
                        </p>
                        <a href="#" class="mt-8 block w-full bg-gray-50 border border-gray-300 rounded-md py-2 text-sm font-semibold text-gray-700 text-center hover:bg-gray-100">
                            Mulai Gratis 14 Hari
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">Fitur</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Hingga 100 transaksi/bulan</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">3 metode pembayaran</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Laporan Dasar</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Email support</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Business -->
                <div class="border border-indigo-500 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Business</h2>
                        <p class="mt-4 text-sm text-gray-500">Untuk bisnis menengah dengan pertumbuhan cepat.</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">Rp 499</span>
                            <span class="text-base font-medium text-gray-500">/bulan</span>
                        </p>
                        <a href="#" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                            Mulai Gratis 14 Hari
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">Fitur</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Hingga 1000 transaksi/bulan</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Semua metode pembayaran</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Analitik Lengkap</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Dukungan Priority</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Checkout kustom</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Enterprise -->
                <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Enterprise</h2>
                        <p class="mt-4 text-sm text-gray-500">Untuk perusahaan besar dengan kebutuhan khusus.</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">Kontak</span>
                            <span class="text-base font-medium text-gray-500"> untuk harga</span>
                        </p>
                        <a href="#" class="mt-8 block w-full bg-gray-50 border border-gray-300 rounded-md py-2 text-sm font-semibold text-gray-700 text-center hover:bg-gray-100">
                            Hubungi Kami
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">Fitur</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Transaksi tak terbatas</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Semua metode pembayaran</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Analitik dan laporan kustom</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">Manager akun dedikasi</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">API dan integrasi kustom</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                <span class="text-sm text-gray-500">SLA 99.99%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Testimonial</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Apa Kata Pelanggan Kami
                </p>
            </div>

            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </p>
                            <div class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">Implementasi Mudah</p>
                                <p class="mt-3 text-base text-gray-500">
                                    "Integrasi dengan website kami sangat mudah dan cepat. Tim support sangat membantu dalam proses setup. Transaksi jadi lebih lancar."
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Budi Santoso</span>
                                <div class="h-10 w-10 rounded-full bg-indigo-200 flex items-center justify-center">
                                    <span class="text-indigo-600 font-bold">BS</span>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    Budi Santoso
                                </p>
                                <p class="text-sm text-gray-500">
                                    CEO, TechMart
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </p>
                            <div class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">Tingkat Konversi Meningkat</p>
                                <p class="mt-3 text-base text-gray-500">
                                    "Sejak menggunakan sibabang, tingkat konversi toko online kami meningkat 35%. Checkout yang lebih cepat dan banyak pilihan pembayaran sangat membantu."
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Siti Rahma</span>
                                <div class="h-10 w-10 rounded-full bg-indigo-200 flex items-center justify-center">
                                    <span class="text-indigo-600 font-bold">SR</span>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    Siti Rahma
                                </p>
                                <p class="text-sm text-gray-500">
                                    Founder, FashionID
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </p>
                            <div class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">Keamanan Terjamin</p>
                                <p class="mt-3 text-base text-gray-500">
                                    "Keamanan adalah prioritas utama untuk bisnis kami. Dengan sibabang, kami merasa nyaman dan pelanggan kami juga merasa aman dengan sistem pembayaran yang terpercaya."
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Agus Wijaya</span>
                                <div class="h-10 w-10 rounded-full bg-indigo-200 flex items-center justify-center">
                                    <span class="text-indigo-600 font-bold">AW</span>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    Agus Wijaya
                                </p>
                                <p class="text-sm text-gray-500">
                                    CTO, SecureBank
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 bg-indigo-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-200 font-semibold tracking-wide uppercase">Mulai Sekarang</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Siap Tingkatkan Bisnis Anda?
                </p>
                <p class="mt-4 max-w-2xl text-xl text-indigo-200 lg:mx-auto">
                    Bergabunglah dengan ribuan bisnis yang telah menggunakan sibabang
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base
