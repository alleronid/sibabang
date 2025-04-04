<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnibayar - Solusi Pembayaran Modern</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
                        <img src="{{asset('omnibayar_hero_hd_nobg.png')}}" alt="Sibabang" class="h-30">
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
                    @php
                        if (app()->environment('production')) {
                                $host = request()->getHost(); // e.g. merchant.app.com or backoffice.app.com
                                $baseDomain = preg_replace('/^(.*?)\\./', '', $host); // strip subdomain
                                $login_url = 'https://merchant.' . $baseDomain . '/login';
                            }else{
                                $login_url = route('login');
                            }
                    @endphp
                    <a href="{{$login_url}}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
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
                        @php
                            if (app()->environment('production')) {
                                $host = request()->getHost(); // e.g. merchant.app.com or backoffice.app.com
                                $baseDomain = preg_replace('/^(.*?)\\./', '', $host); // strip subdomain
                                $login_url = 'merchant.' . $baseDomain . '/login';
                            }else{
                                $login_url = route('login');
                            }
                        @endphp
                    <div class="flex-shrink-0">
                        <a href="{{$login_url}}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
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
    <footer class="bg-gray-900 text-gray-400 pt-16 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="space-y-4">
                    <a href="/" class="inline-block">
                        <span class="text-white text-2xl font-bold">SI<span class="text-blue-400">BABANG</span></span>
                    </a>
                    <p class="text-sm max-w-xs">
                        Solusi pembayaran digital modern untuk memberdayakan bisnis Anda.
                    </p>
                    <div class="space-y-1 text-sm">
                        <p>
                            <a href="mailto:support@sibabang.id" class="hover:text-white transition-colors duration-200">support@sibabang.id</a>
                        </p>
                        <p>
                            <a href="tel:+6221999988" class="hover:text-white transition-colors duration-200">+62 21 9999 88</a>
                        </p>
                         <p class="pt-1">
                            {{\App\Models\AppSetting::where('key', 'app_address')->first()->value ?? 'Gedung Cyber 1, Lt. 8, Jakarta'}}
                         </p>
                    </div>
                     <div class="flex space-x-4 pt-2">
                         <a href="#" class="text-gray-500 hover:text-white transition-colors duration-200">
                             <span class="sr-only">Facebook</span>
                             <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                         </a>
                          <a href="#" class="text-gray-500 hover:text-white transition-colors duration-200">
                              <span class="sr-only">Twitter</span>
                              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.255 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                          </a>
                           <a href="#" class="text-gray-500 hover:text-white transition-colors duration-200">
                              <span class="sr-only">LinkedIn</span>
                              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                          </a>
                     </div>
                </div>

                <div>
                    <h3 class="text-base font-medium text-white mb-4">Navigasi</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/" class="hover:text-white transition-colors duration-200">Beranda</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Fitur</a></li>
                        <li><a href="/about-us" class="hover:text-white transition-colors duration-200">Tentang Kami</a></li>
                        <li><a href="/testimonial" class="hover:text-white transition-colors duration-200">Testimoni</a></li>
                        <li><a href="/contact" class="hover:text-white transition-colors duration-200">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-base font-medium text-white mb-4">Legal & Bantuan</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Dokumentasi API</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Karir</a></li>
                    </ul>
                </div>

            </div>

            <div class="mt-12 border-t border-gray-700 pt-6 flex flex-col sm:flex-row justify-between items-center">
                 <p class="text-xs text-gray-500 order-2 sm:order-1 mt-4 sm:mt-0">
                     &copy; {{ date('Y') }} PT. KU PT KAMU. Seluruh hak cipta dilindungi.
                 </p>
                 <div class="flex items-center space-x-5 order-1 sm:order-2">
                      <img src="/path/to/your/logo-kominfo-grayscale.png" alt="Kominfo Terdaftar" title="Kominfo Terdaftar" class="h-6 opacity-60 hover:opacity-100 transition-opacity duration-200">
                      <img src="/path/to/your/logo-pse-grayscale.png" alt="PSE Kominfo" title="PSE Kominfo" class="h-6 opacity-60 hover:opacity-100 transition-opacity duration-200">
                      <img src="/path/to/your/logo-sectigo-grayscale.png" alt="Sectigo Secured" title="Sectigo Secured" class="h-6 opacity-60 hover:opacity-100 transition-opacity duration-200">
                      </div>
             </div>
        </div>
    </footer>
</body>
</html>
