@extends('layouts.home')

@section('content')
<div class="pt-24 pb-12 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
                Hubungi Kami
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-indigo-100 sm:text-lg md:mt-5 md:text-xl">
                Kami siap membantu Anda dengan semua kebutuhan pembayaran digital Anda
            </p>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="px-6 py-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Kirim Pesan</h2>
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">Nama Depan</label>
                                <input type="text" id="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Nama Belakang</label>
                                <input type="text" id="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <div class="flex">
                                <select class="px-3 py-2 border border-gray-300 rounded-l-md bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <option>+62</option>
                                    <option>+1</option>
                                    <option>+44</option>
                                </select>
                                <input type="tel" id="phone" class="w-full px-3 py-2 border border-gray-300 rounded-r-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                            <input type="text" id="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="terms" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                Saya setuju dengan <a href="#" class="text-indigo-600 hover:text-indigo-500">Syarat & Ketentuan</a> dan <a href="#" class="text-indigo-600 hover:text-indigo-500">Kebijakan Privasi</a>
                            </label>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                    <div class="px-6 py-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Informasi Kontak</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Telepon</p>
                                    <p class="mt-1 text-sm text-gray-600">+6221999988</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Email</p>
                                    <p class="mt-1 text-sm text-gray-600">web-support@sibabang.co.id</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Alamat</p>
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{\App\Models\AppSetting::where('key', 'app_address')->first()->value}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support Channels -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Layanan Dukungan</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Dukungan Teknis</p>
                                    <p class="mt-1 text-sm text-gray-600">Bantuan untuk masalah teknis dengan layanan kami</p>
                                    <a href="#" class="mt-2 text-sm font-medium text-indigo-600 hover:text-indigo-500">Hubungi dukungan teknis</a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Keamanan & Privasi</p>
                                    <p class="mt-1 text-sm text-gray-600">Pertanyaan tentang keamanan dan privasi data Anda</p>
                                    <a href="#" class="mt-2 text-sm font-medium text-indigo-600 hover:text-indigo-500">Pelajari lebih lanjut</a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Live Chat</p>
                                    <p class="mt-1 text-sm text-gray-600">Dapatkan bantuan langsung dari tim dukungan kami</p>
                                    <a href="#" class="mt-2 text-sm font-medium text-indigo-600 hover:text-indigo-500">Mulai chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-900">Lokasi Kami</h2>
            <p class="mt-4 text-lg text-gray-600">Kunjungi kantor pusat kami di Jakarta</p>
        </div>
        <i class="fa fa-bar-chart" aria-hidden="true"></i>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="h-96 w-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5828.606269737052!2d119.51623415917433!3d-8.601997767755183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db4567cf6bd1967%3A0x9f2eb4aca51c5fd0!2sPink%20Beach!5e0!3m2!1sen!2sid!4v1742267792673!5m2!1sen!2sid"
                class="w-full h-full object-cover" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Kantor Pusat SIBABANG</h3>
                <p class="text-gray-600">
                    {{\App\Models\AppSetting::where('key', 'app_address')->first()->value}}
                </p>
                <a href="#" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Buka di Google Maps
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900">Pertanyaan yang Sering Diajukan</h2>
            <p class="mt-4 text-lg text-gray-600">Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami</p>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full px-6 py-4 text-left focus:outline-none">
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-medium text-gray-900">Apa itu SIBABANG?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">
                        SIBABANG adalah platform pembayaran digital modern yang menyediakan solusi pembayaran terintegrasi untuk bisnis dari berbagai skala. Kami menawarkan berbagai layanan mulai dari payment gateway, virtual account, e-wallet, dan solusi pembayaran lainnya.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full px-6 py-4 text-left focus:outline-none">
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-medium text-gray-900">Bagaimana cara mendaftar di SIBABANG?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">
                        Untuk mendaftar, klik tombol "Daftar" di bagian atas halaman atau kunjungi halaman pendaftaran. Isi formulir dengan informasi yang diperlukan, unggah dokumen yang diminta, dan tim kami akan memproses pendaftaran Anda dalam waktu 1-2 hari kerja.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full px-6 py-4 text-left focus:outline-none">
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-medium text-gray-900">Apakah layanan SIBABANG aman?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">
                        Ya, keamanan adalah prioritas utama kami. SIBABANG dilengkapi dengan teknologi enkripsi terkini, sertifikasi keamanan dari Sectigo, serta terdaftar resmi di KOMINFO sebagai Penyelenggara Sistem Elektronik (PSE). Semua transaksi dan data pribadi dilindungi dengan standar keamanan tertinggi.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full px-6 py-4 text-left focus:outline-none">
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-medium text-gray-900">Metode pembayaran apa saja yang didukung?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">
                        SIBABANG mendukung berbagai metode pembayaran termasuk kartu kredit/debit, transfer bank, virtual account, QRIS, e-wallet (OVO, GoPay, DANA, LinkAja, ShopeePay), dan berbagai metode pembayaran populer lainnya di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call To Action -->
<div class="py-12 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-white">Mulai Gunakan SIBABANG Sekarang</h2>
            <p class="mt-4 text-xl text-indigo-100">Daftarkan bisnis Anda dan nikmati solusi pembayaran modern</p>
            <div class="mt-8 flex justify-center">
                <a href="{{route('register')}}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                    Daftar Gratis
                </a>
                <a href="#" class="ml-4 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-700">
                    Hubungi Sales
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
