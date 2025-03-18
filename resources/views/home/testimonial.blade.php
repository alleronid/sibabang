@extends('layouts.home')

@section('content')
<section class="pt-32 pb-20 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Testimonial Pelanggan</h1>
        <p class="text-lg text-purple-100 max-w-2xl mx-auto">Lihat apa yang dikatakan oleh pelanggan kami tentang layanan pembayaran modern SIBABANG</p>
    </div>
</section>

<!-- Featured Testimonials -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Partner Bisnis Terpercaya</h2>
            <p class="mt-4 text-lg text-gray-600">Digunakan oleh ribuan bisnis di seluruh Indonesia</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-indigo-600">AB</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900">Ahmad Budiman</h3>
                            <p class="text-sm text-gray-500">Pemilik Toko Berkah Jaya</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "SIBABANG membantu bisnis saya menerima pembayaran digital dengan mudah. Pelanggan sangat puas karena bisa bayar dengan berbagai metode. Sistem pencatatan transaksi juga sangat detail!"
                    </p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-purple-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-purple-600">SW</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900">Siti Widyawati</h3>
                            <p class="text-sm text-gray-500">CEO Widya Fashion</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Sejak menggunakan SIBABANG, omset online shop saya meningkat 40%! Proses checkout jadi lebih cepat dan pembeli lebih percaya karena banyak pilihan pembayaran yang aman. Terima kasih SIBABANG!"
                    </p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center">
                            <span class="text-xl font-bold text-indigo-600">DP</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900">Denny Pratama</h3>
                            <p class="text-sm text-gray-500">Founder Kopi Nusantara</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Integrasi SIBABANG dengan sistem kasir kami sangat lancar. Support team sangat responsif dan membantu ketika ada kendala. Sangat direkomendasikan untuk bisnis F&B seperti kami!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Testimonials -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Video Testimoni</h2>
            <p class="mt-4 text-lg text-gray-600">Dengarkan langsung dari pengguna kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Video 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative aspect-w-16 aspect-h-9">
                    <div class="w-full h-64 bg-gray-300 flex items-center justify-center">
                        <img src="/api/placeholder/640/360" alt="Video Thumbnail" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="h-16 w-16 rounded-full bg-indigo-600 bg-opacity-80 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-900">PT Maju Sukses Selalu</h3>
                    <p class="text-gray-600 mt-2">Bagaimana SIBABANG membantu mengelola ratusan transaksi harian dengan mudah</p>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative aspect-w-16 aspect-h-9">
                    <div class="w-full h-64 bg-gray-300 flex items-center justify-center">
                        <img src="/api/placeholder/640/360" alt="Video Thumbnail" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="h-16 w-16 rounded-full bg-indigo-600 bg-opacity-80 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-900">Toko Semesta Digital</h3>
                    <p class="text-gray-600 mt-2">Implementasi SIBABANG untuk sistem pembayaran e-commerce yang handal</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Dipercaya Oleh</h2>
            <p class="mt-4 text-lg text-gray-600">Ratusan brand dan bisnis di Indonesia</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 1</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 2</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 3</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 4</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 5</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 6</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 7</span>
                </div>
            </div>
            <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
                <div class="h-16 w-32 bg-gray-200 flex items-center justify-center rounded">
                    <span class="text-gray-500 font-medium">Client 8</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Your Testimony -->
<section class="py-16 bg-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Bagikan Pengalaman Anda</h2>
            <p class="mt-4 text-lg text-gray-600">Sudah menggunakan SIBABANG? Kami ingin mendengar cerita Anda!</p>
        </div>

        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <form>
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-6">
                    <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Perusahaan / Usaha</label>
                    <input type="text" id="company" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-6">
                    <label for="position" class="block text-sm font-medium text-gray-700 mb-2">Jabatan</label>
                    <input type="text" id="position" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-6">
                    <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                    <div class="flex text-gray-400">
                        <button type="button" class="text-2xl mr-1 hover:text-yellow-400">
                            <i class="far fa-star"></i>
                        </button>
                        <button type="button" class="text-2xl mr-1 hover:text-yellow-400">
                            <i class="far fa-star"></i>
                        </button>
                        <button type="button" class="text-2xl mr-1 hover:text-yellow-400">
                            <i class="far fa-star"></i>
                        </button>
                        <button type="button" class="text-2xl mr-1 hover:text-yellow-400">
                            <i class="far fa-star"></i>
                        </button>
                        <button type="button" class="text-2xl mr-1 hover:text-yellow-400">
                            <i class="far fa-star"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="testimony" class="block text-sm font-medium text-gray-700 mb-2">Testimoni Anda</label>
                    <textarea id="testimony" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">Foto Profil (opsional)</label>
                    <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                        <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Upload
                        </button>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kirim Testimoni
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Quotes Section -->
<section class="py-16 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="relative text-white max-w-3xl mx-auto">
            <i class="fas fa-quote-left absolute top-0 left-0 text-6xl text-purple-300 opacity-50"></i>
            <p class="text-2xl font-light italic mt-8 mb-8 px-12">
                SIBABANG telah mengubah cara kami berbisnis. Dengan sistem pembayaran yang aman dan terpercaya, kami telah meningkatkan kepercayaan pelanggan dan mempermudah pengelolaan keuangan.
            </p>
            <i class="fas fa-quote-right absolute bottom-0 right-0 text-6xl text-purple-300 opacity-50"></i>
            <div class="mt-8">
                <p class="font-bold">Budi Santoso</p>
                <p class="text-purple-200">CEO, PT Maju Bersama</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Bergabung dengan Ribuan Bisnis Lainnya</h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Mulai terima pembayaran digital dengan SIBABANG dan rasakan peningkatan konversi penjualan hingga 30%
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="px-8 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Mulai Sekarang
            </a>
            <a href="#" class="px-8 py-3 bg-white text-indigo-600 font-medium rounded-md border border-indigo-600 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Hubungi Sales
            </a>
        </div>
    </div>
</section>
@endsection