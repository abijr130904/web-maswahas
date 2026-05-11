@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900"
             alt="Visi dan Misi"
             class="w-full h-full object-cover">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/70"></div>

    {{-- GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 md:py-40">

        <div class="max-w-3xl">

            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">

                <div class="w-2 h-2 rounded-full bg-emerald-400"></div>

                <p class="text-sm tracking-[0.25em] uppercase text-gray-200">
                    Profil Sekolah
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Visi &
                <span class="text-emerald-400">
                    Misi
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">
                Komitmen MA Wahid Hasyim dalam membangun pendidikan islami,
                profesional, berprestasi, dan berorientasi masa depan.

            </p>

        </div>

    </div>

</section>

{{-- VISI --}}
<section class="py-28 bg-white relative overflow-hidden">

    {{-- DECORATION --}}
    <div class="absolute top-0 right-0 w-72 h-72 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>

    <div class="relative max-w-5xl mx-auto px-6">

        <div class="text-center mb-16">

            <p class="text-sm uppercase tracking-[0.25em] text-emerald-600 font-semibold mb-4">
                Arah Pendidikan
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Visi Madrasah
            </h2>

            <div class="w-24 h-1 bg-emerald-500 mx-auto rounded-full"></div>

        </div>

        {{-- VISI BOX --}}
        <div class="relative bg-gradient-to-br from-emerald-600 to-emerald-800 rounded-[2rem] shadow-2xl overflow-hidden">

            {{-- GLOW --}}
            <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative p-10 md:p-16 text-center">

                {{-- ICON --}}
                <div class="w-20 h-20 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mx-auto mb-8 backdrop-blur-md">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-10 h-10 text-white"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.5"
                              d="M9.663 17h4.673M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/>

                    </svg>

                </div>

                <p class="text-2xl md:text-3xl leading-relaxed font-semibold text-white max-w-4xl mx-auto">

                    “Terwujudnya Madrasah Profesional, Berprestasi serta Entrepreneurship
                    berdasarkan Iman dan Takwa.”

                </p>

            </div>

        </div>

    </div>

</section>

{{-- MISI --}}
<section class="py-28 bg-gradient-to-b from-gray-50 to-white">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20">

            <p class="text-sm uppercase tracking-[0.25em] text-emerald-600 font-semibold mb-4">
                Langkah Strategis
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Misi Madrasah
            </h2>

            <div class="w-24 h-1 bg-emerald-500 mx-auto rounded-full"></div>

        </div>

        {{-- LIST MISI --}}
        <div class="max-w-5xl mx-auto">

            <div class="divide-y divide-gray-200 border-t border-b border-gray-200">

                @foreach([
                    'Tersusunnya rencana kerja madrasah',
                    'Menguasai kurikulum dan media pembelajaran',
                    'Memperoleh nilai UM di atas 75',
                    'Memperoleh nilai AKM sesuai standar',
                    'Meningkatkan jumlah lulusan yang diterima di PTN melalui semua jalur',
                    'Memiliki prestasi akademik dan non-akademik',
                    'Menguasai IT bagi seluruh siswa',
                    'Meningkatkan kemampuan berbahasa internasional',
                    'Memiliki keahlian tata busana, tata boga, tata rias, las, dan perbengkelan',
                    'Meningkatkan pembiasaan praktik ibadah',
                    'Pembiasaan akhlakul karimah'
                ] as $index => $misi)

                <div class="group py-8 md:py-10">

                    <div class="flex gap-6 md:gap-10 items-start">

                        {{-- NUMBER --}}
                        <div class="flex-shrink-0">

                            <h3 class="text-3xl md:text-5xl font-black text-gray-200 group-hover:text-emerald-500 transition duration-300">

                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                            </h3>

                        </div>

                        {{-- CONTENT --}}
                        <div class="flex-1">

                            <div class="flex items-start gap-4">

                                {{-- ICON --}}
                                <div class="mt-1">

                                    <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-4 h-4 text-emerald-600"
                                             fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M5 13l4 4L19 7"/>

                                        </svg>

                                    </div>

                                </div>

                                {{-- TEXT --}}
                                <div>

                                    <p class="text-lg md:text-xl leading-relaxed text-gray-700 group-hover:text-gray-900 transition duration-300">

                                        {{ $misi }}

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

{{-- QUOTE --}}
<section class="pb-28 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        <div class="relative overflow-hidden rounded-[2rem] bg-gray-900 p-12 md:p-16 text-center shadow-2xl">

            {{-- GLOW --}}
            <div class="absolute top-0 left-0 w-72 h-72 bg-emerald-500/20 rounded-full blur-3xl"></div>

            {{-- ICON --}}
            <svg class="w-12 h-12 text-emerald-400 mx-auto mb-8"
                 fill="currentColor"
                 viewBox="0 0 24 24">

                <path d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 8H9V6H7.17zm10 0A5.001 5.001 0 0012 11v7h7v-7h-3.92A3.001 3.001 0 0117.17 8H19V6h-1.83z"/>

            </svg>

            <p class="relative text-2xl md:text-3xl leading-relaxed font-semibold text-white max-w-4xl mx-auto">

                “Membangun generasi yang unggul dalam ilmu,
                kuat dalam iman,
                serta siap menghadapi tantangan masa depan.”

            </p>

        </div>

    </div>

</section>

@endsection