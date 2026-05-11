@extends('layouts.app')

@section('title', 'Program Sekolah')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden min-h-[75vh] flex items-center">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900"
             alt="Program Sekolah"
             class="w-full h-full object-cover scale-105">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/75"></div>

    {{-- GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent"></div>

    {{-- GLOW --}}
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-emerald-500/20 rounded-full blur-3xl"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

        <div class="max-w-3xl">

            <div class="inline-flex items-center gap-3 px-5 py-3 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">

                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>

                <p class="text-sm tracking-[0.3em] uppercase text-gray-200 font-medium">
                    Program Pendidikan
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Program
                <span class="text-emerald-400">
                    Sekolah
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                Program pendidikan unggulan yang dirancang untuk membentuk
                siswa berprestasi,
                berkarakter,
                kreatif,
                dan siap menghadapi tantangan masa depan.

            </p>

        </div>

    </div>

</section>

{{-- PROGRAM PENDIDIKAN --}}
<section class="relative py-28 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">

    {{-- DECORATION --}}
    <div class="absolute top-10 left-0 w-72 h-72 bg-emerald-100 rounded-full blur-3xl opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                Academic Pathway
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Program Pendidikan
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- GRID --}}
        <div class="grid md:grid-cols-3 gap-8">

            {{-- ICP --}}
            <div class="group relative bg-white rounded-[2rem] border border-gray-100 p-8 shadow-lg hover:shadow-[0_20px_60px_rgba(16,185,129,0.18)] transition duration-500 overflow-hidden"
                data-aos="zoom-in">

                {{-- GLOW --}}
                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-100 rounded-full blur-3xl opacity-0 group-hover:opacity-70 transition"></div>

                <div class="relative">

                    <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center text-3xl mb-6">
                        🌍
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4">
                        Kelas Unggulan ICP
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Program bilingual modern untuk mencetak lulusan
                        berwawasan global,
                        aktif,
                        dan kompetitif di tingkat internasional.
                    </p>

                </div>

            </div>

            {{-- KETERAMPILAN --}}
            <div class="group relative bg-white rounded-[2rem] border border-gray-100 p-8 shadow-lg hover:shadow-[0_20px_60px_rgba(16,185,129,0.18)] transition duration-500 overflow-hidden"
                data-aos="zoom-in"
                data-aos-delay="100">

                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-100 rounded-full blur-3xl opacity-0 group-hover:opacity-70 transition"></div>

                <div class="relative">

                    <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center text-3xl mb-6">
                        🛠️
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4">
                        Kelas Keterampilan
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Program berbasis praktik dan keterampilan kerja
                        untuk mempersiapkan siswa siap industri dan dunia usaha.
                    </p>

                </div>

            </div>

            {{-- REGULER --}}
            <div class="group relative bg-white rounded-[2rem] border border-gray-100 p-8 shadow-lg hover:shadow-[0_20px_60px_rgba(16,185,129,0.18)] transition duration-500 overflow-hidden"
                data-aos="zoom-in"
                data-aos-delay="200">

                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-100 rounded-full blur-3xl opacity-0 group-hover:opacity-70 transition"></div>

                <div class="relative">

                    <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center text-3xl mb-6">
                        📘
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4">
                        Kelas Reguler
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Kurikulum nasional adaptif yang menyeimbangkan
                        akademik,
                        karakter,
                        dan pengembangan potensi siswa.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- PROGRAM UNGGULAN --}}
<section class="py-28 bg-gray-900 relative overflow-hidden">

    {{-- GLOW --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-400 font-semibold mb-4">
                Academic Excellence
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Program Unggulan
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
                'Riset & KTI',
                'Bimbel Olimpiade',
                'Bimbel Masuk PTN',
                'English Program',
                'Arabic Program',
                'TOEFL Class',
                'Pembinaan Baca Qur’an',
                'Internet of Things (IoT)'
            ] as $item)

            <div class="group bg-white/5 border border-white/10 rounded-[1.5rem] p-6 backdrop-blur-md hover:bg-emerald-500 hover:border-emerald-400 transition duration-500"
                data-aos="fade-up">

                <div class="flex items-center justify-between mb-5">

                    <div class="w-12 h-12 rounded-xl bg-emerald-400/20 flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-emerald-400 group-hover:text-white transition"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 13l4 4L19 7"/>

                        </svg>

                    </div>

                    <span class="text-xs text-gray-400 group-hover:text-white transition">
                        Program
                    </span>

                </div>

                <h3 class="text-lg font-bold text-white leading-relaxed">

                    {{ $item }}

                </h3>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- PROGRAM KETERAMPILAN --}}
<section class="relative py-28 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">

    {{-- DECORATION --}}
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                Vocational Skills
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Program Keterampilan
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- GRID --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            @foreach([
                'Administrasi Perkantoran',
                'Desain Grafis',
                'Teknik Komputer & Jaringan',
                'Tata Boga',
                'Teknik Bisnis Sepeda Motor',
                'Tata Busana',
                'Tata Kecantikan Kulit & Rambut'
            ] as $item)

            <div class="group bg-white border border-gray-100 rounded-[2rem] p-8 shadow-lg hover:shadow-[0_20px_60px_rgba(16,185,129,0.18)] transition duration-500"
                data-aos="fade-up">

                <div class="flex items-start gap-5">

                    <div class="w-14 h-14 rounded-2xl bg-emerald-100 flex items-center justify-center shrink-0">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7 text-emerald-500"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9.75 17L15 12l-5.25-5"/>

                        </svg>

                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-gray-900 leading-relaxed group-hover:text-emerald-500 transition">

                            {{ $item }}

                        </h3>

                        <p class="text-gray-500 mt-2 text-sm leading-relaxed">
                            Program keterampilan berbasis praktik untuk meningkatkan kompetensi siswa.
                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- CTA --}}
<section class="relative py-32 bg-gray-900 overflow-hidden">

    {{-- GLOW --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-emerald-500/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">

        <p class="text-sm uppercase tracking-[0.3em] text-emerald-400 font-semibold mb-5">
            Bergabung Bersama Kami
        </p>

        <h2 class="text-4xl md:text-6xl font-black text-white leading-tight mb-8">

            Siap Menjadi
            <span class="text-emerald-400">
                Generasi Unggul?
            </span>

        </h2>

        <p class="text-lg text-gray-300 leading-relaxed max-w-2xl mx-auto">

            Kami siap membantu siswa berkembang sesuai minat,
            bakat,
            dan potensi terbaiknya melalui program unggulan modern dan islami.

        </p>

        <a href="/kontak"
           class="inline-flex items-center gap-3 mt-10 bg-emerald-400 text-black font-bold px-8 py-4 rounded-2xl hover:scale-105 hover:bg-emerald-300 transition duration-300 shadow-2xl">

            Hubungi Kami

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>

            </svg>

        </a>

    </div>

</section>

@endsection