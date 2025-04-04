@extends('layouts.home')

@section('content')
<!-- About Us Section -->
<section class="pt-24 pb-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <img src="{{asset('omnibayar_hero_hd_nobg.png')}}" alt="SIBABANG Logo" class="h-12 mx-auto mb-4">
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-4">
            Tentang <span class="text-indigo-600">SIBABANG</span>
        </h1>
        <p class="text-lg text-gray-600 mb-12 max-w-2xl mx-auto">
            Memberdayakan bisnis di seluruh Indonesia melalui solusi pembayaran digital yang aman, fleksibel, dan terjangkau.
        </p>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
        <div class="space-y-16">

            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="flex-shrink-0 p-4 bg-indigo-100 rounded-full">
                     <svg class="h-10 w-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639l4.443-7.286A1.012 1.012 0 0 1 7.237 4h9.526a1.012 1.012 0 0 1 .757.397l4.443 7.286a1.012 1.012 0 0 1 0 .639l-4.443 7.287a1.012 1.012 0 0 1-.757.397H7.237a1.012 1.012 0 0 1-.757-.397L2.036 12.322Z" />
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                     </svg>
                </div>
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3">Visi Kami</h2>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolor iste autem voluptates vel dolores quasi iusto quia alias officiis illum ad minima quis sit optio natus repellendus, doloribus rem!
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                <div class="flex-shrink-0 p-4 bg-purple-100 rounded-full">
                    <svg class="h-10 w-10 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.63 2.25a14.98 14.98 0 0 0-11.1 6.16A14.98 14.98 0 0 0 6 21.75a14.98 14.98 0 0 0 9.59-7.38Z" />
                    </svg>
                </div>
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3">Misi Kami</h2>
                    <p class="text-gray-600">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, neque veritatis cupiditate commodi recusandae vel, voluptatum possimus laudantium adipisci, vitae reiciendis. Sapiente reprehenderit, officia enim quod ducimus voluptas ipsam placeat.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                 <div class="flex-shrink-0 p-4 bg-green-100 rounded-full">
                     <svg class="h-10 w-10 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                 <div class="text-center md:text-left">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3">Strategi & Tim Kami</h2>
                    <p class="text-gray-600">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus numquam minima, odit consequatur non tenetur sint omnis a culpa quidem doloribus maxime ullam atque laudantium sunt tempore nihil quisquam molestiae.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
