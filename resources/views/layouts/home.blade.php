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
                        <img src="{{asset('sibabang-logo.png')}}" alt="Sibabang" class="h-8">
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="{{ route('index') }}" class="{{ request()->is('/') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Beranda
                        </a>
                        <a href="#" class="{{ request()->is('fitur') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Fitur
                        </a>
                        <a href="{{ route('about.us') }}" class="{{ request()->is('about-us ') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Tentang Kami
                        </a>
                        <a href="{{ route('testimonial') }}" class="{{ request()->is('testimonial') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Testimonial
                        </a>
                        <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Kontak
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="{{route('login')}}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                        Masuk
                    </a>
                    <a href="{{route('register')}}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
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
                <a href="{{ route('index') }}" class="{{ request()->is('/') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Beranda
                </a>
                <a href="#" class="{{ request()->is('fitur') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Fitur
                </a>
                <a href="{{ route('about.us') }}" class="{{ request()->is('about-us') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Tentang Kami
                </a>
                <a href="{{ route('testimonial') }}" class="{{ request()->is('testimonial') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Testimonial
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Kontak
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (!Auth::user())
                    <div class="ml-3">
                        <a href="{{route('dashboard')}}" class="block w-full px-5 py-3 text-center font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Dashboard
                        </a>
                    </div>
                    @else
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
                    @endif
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and certifications -->
                <div class="space-y-6">
                    <div>
                        <span class="text-white text-xl font-bold">SI<span class="text-purple-400">BABANG</span></span>
                    </div>

                    <!-- Certification logos -->
                    <div class="flex flex-wrap gap-3">
                        <div class="bg-white p-2 rounded-md w-32">
                            <img src="{{asset('/assets/logo-kominfo.png')}}" alt="Terdaftar Kominfo" class="h-8">
                        </div>
                        <div class="bg-white p-2 rounded-md w-32">
                            <img src="{{asset('/assets/logo-kominfo-sikasir.png')}}" alt="Kominfo Sikasir" class="h-8">
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <div class="bg-white p-2 rounded-md w-32">
                            <img src="{{asset('/assets/logo-pse.png')}}" alt="PSE KOMINFO" class="h-8">
                        </div>
                        <div class="bg-white p-2 rounded-md w-32">
                            <img src="{{asset('/assets/logo-sectigo.png')}}" alt="Secured by Sectigo" class="h-8">
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Produk</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Dokumentasi API
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Layanan Kami
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Help Center -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Pusat Bantuan</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Bantuan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Syarat & Ketentuan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Pernyataan Pengguna
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Kebijakan Privasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Testimoni
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                FAQ
                            </a>
                        </li>
                        <li class="flex items-center text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            All services are online
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Kontak</h3>
                    <div class="space-y-3">
                        <p class="flex flex-col">
                            <span>Email:</span>
                            <a href="mailto:web-support@sibabang.co.id" class="text-gray-400 hover:text-white">web-support@sibabang.co.id</a>
                        </p>
                        <p class="flex flex-col">
                            <span>No Telp:</span>
                            <a href="tel:+622127899129" class="text-gray-400 hover:text-white">+6221999988</a>
                        </p>
                        <p class="text-gray-400">
                            {{\App\Models\AppSetting::where('key', 'app_address')->first()->value}}
                        </p>

                        <!-- Social Media -->
                        <div class="mt-4">
                            <a href="#" class="inline-block bg-gray-700 rounded-full p-2 hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-12 border-t border-gray-800 pt-8 text-center text-sm">
                <p>©copyright 2025 PT. KU PT KAMU. all rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>