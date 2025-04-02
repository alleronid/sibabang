@extends('layouts.home')

@section('content')
       <!-- Hero Section -->
       <section class="pt-24 pb-12 md:pt-32 md:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-6">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <h1 class="mt-2 text-3xl leading-12 font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
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
                    <div class="relative mx-auto w-full lg:max-w-md">
                        <img src="{{asset('omnibayar_hero_hd_nobg.png')}}" alt="App dashboard" class="w-full rounded-lg ">
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

    {{-- !how to works --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Cara Kerja</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Bagaimana SIBABANG Bekerja
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Proses sederhana untuk memulai pembayaran digital dengan SIBABANG
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Step 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <span class="text-xl font-bold">1</span>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Daftar Akun</h3>
                        <p class="text-base text-gray-500 mb-4">
                            Buat akun SIBABANG Anda hanya dalam beberapa menit melalui proses pendaftaran yang cepat dan aman.
                        </p>
                        <div class="mt-4 h-48 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{asset('assets/custom/1.jpg')}}" alt="Daftar akun SIBABANG" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <span class="text-xl font-bold">2</span>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Hubungkan Rekening Bank</h3>
                        <p class="text-base text-gray-500 mb-4">
                            Hubungkan rekening bank Anda dengan aman atau tambahkan kartu kredit untuk memulai transaksi.
                        </p>
                        <div class="mt-4 h-48 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{asset('assets/custom/2.jpg')}}" alt="Hubungkan rekening bank" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <span class="text-xl font-bold">3</span>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Mulai Bertransaksi</h3>
                        <p class="text-base text-gray-500 mb-4">
                            Kirim, terima, dan kelola uang Anda dengan mudah. Nikmati pembayaran instan dan aman.
                        </p>
                        <div class="mt-4 h-48 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{asset('assets/custom/3.jpg')}}" alt="Mulai bertransaksi" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional info -->
            <div class="mt-12 bg-indigo-50 rounded-lg p-6">
                <div class="md:flex md:items-center">
                    <div class="md:w-2/3">
                        <h3 class="text-xl font-semibold text-gray-900">Integrasi yang Mudah</h3>
                        <p class="mt-2 text-gray-600">
                            SIBABANG dapat diintegrasikan dengan mudah ke website atau aplikasi Anda melalui API yang lengkap dan dokumentasi yang jelas. Tim dukungan kami siap membantu proses integrasi.
                        </p>
                        <div class="mt-4">
                            <a href="#" class="text-indigo-600 font-medium hover:text-indigo-500 flex items-center">
                                Lihat dokumentasi API
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:w-1/3 md:pl-8">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="font-mono text-sm text-gray-800 bg-gray-100 p-3 rounded">
                                <code>
                                    // Contoh kode integrasi<br>
                                    const sibabang = new Sibabang({<br>
                                    &nbsp;&nbsp;apiKey: 'YOUR_API_KEY',<br>
                                    &nbsp;&nbsp;mode: 'production'<br>
                                    });<br><br>
                                    sibabang.createPayment({<br>
                                    &nbsp;&nbsp;amount: 150000,<br>
                                    &nbsp;&nbsp;description: 'Order #12345'<br>
                                    });
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- enddd --}}

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
@endsection
