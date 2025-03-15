@extends('layouts.home')

@section('content')
<!-- About Us Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="flex justify-center mb-2">
                <img src="{{asset('/assets/logo.png')}}" alt="SIBABANG Logo" class="h-16">
            </div>
            <p class="text-purple-600 font-medium uppercase tracking-wide">TENTANG SIBABANG</p>
            <h2 class="mt-2 text-4xl sm:text-5xl font-bold text-gray-900 leading-tight">
                Kami Adalah Kamu<br>
                Kamu Aadalah Kamu<br>
                Yang Adalah Kita
            </h2>
        </div>

        <!-- Content with 3 columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-6 lg:gap-16">
            <!-- Column 1 - Visi Kami -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="relative">
                        <div class="absolute -top-2 -right-2">
                            <svg class="h-4 w-4 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="h-16 w-16 flex items-center justify-center bg-red-100 rounded-lg">
                            <svg class="h-10 w-10 text-red-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 19h20L12 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Visi Kami</h3>
                <p class="text-gray-600 text-center">
                    Sibabang adalah perusahaan teknologi finansial yang didirikan dengan visi untuk memberdayakan bisnis di seluruh Indonesia melalui solusi pembayaran digital yang aman, fleksibel, dan terjangkau.
                </p>
                <div class="mt-8 flex justify-center">
                    <svg class="text-red-300 w-24" viewBox="0 0 100 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10C20 0, 30 20, 50 10C70 0, 80 20, 100 10" stroke="currentColor" stroke-width="3" />
                    </svg>
                </div>
            </div>

            <!-- Column 2 - Misi Kami -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="h-16 w-16 flex items-center justify-center bg-blue-100 rounded-lg">
                        <svg class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Misi Kami</h3>
                <p class="text-gray-600 text-center">
                    Kami berkomitmen untuk memberikan pengalaman pembayaran terbaik. Karena itu, kami mengembangkan solusi berkualitas dan bermitra dengan berbagai bank besar, sehingga merchant hanya perlu bekerja sama dengan Sibabang untuk menikmati kemudahan dalam setiap transaksi pembayaran.
                </p>
            </div>

            <!-- Column 3 - Strategi -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="h-16 w-16 flex items-center justify-center bg-purple-100 rounded-lg">
                        <svg class="h-10 w-10 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Strategi</h3>
                <p class="text-gray-600 text-center">
                    Sibabang didukung oleh tim profesional berpengalaman di Fintech, yang ahli dalam membangun teknologi pembayaran, aplikasi mobile, dan produk inovatif untuk merchant di seluruh Indonesia.
                </p>
            </div>
        </div>

        <!-- Logo at bottom -->
        <div class="mt-20 flex justify-end">
            <img src="{{asset('/assets/logo-alt.png')}}" alt="SIBABANG Logo" class="h-20">
        </div>
    </div>
</section>
@endsection
