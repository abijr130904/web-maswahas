@extends('layouts.app')

@section('title', 'Program Sekolah')

@section('content')

{{-- HERO --}}
<section class="bg-white border-b border-gray-200 py-16" data-aos="fade-down">
    <div class="container mx-auto px-6 text-center max-w-3xl">

        <h1 class="text-4xl font-bold text-gray-800">
            Program Pendidikan & Keterampilan
        </h1>

        <p class="text-gray-500 mt-3 text-sm md:text-base leading-relaxed">
            Kami menghadirkan program pendidikan unggulan untuk membentuk siswa yang berprestasi,
            berkarakter, dan siap menghadapi dunia kerja maupun perguruan tinggi.
        </p>

    </div>
</section>

{{-- PROGRAM PENDIDIKAN --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <div class="flex items-end justify-between mb-10">
            <h2 class="text-2xl font-semibold text-gray-800">
                Program Pendidikan
            </h2>
            <span class="text-sm text-gray-500">Academic Pathway</span>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            {{-- ICP --}}
            <div class="bg-white border border-gray-200 p-6 hover:shadow-md transition"
                data-aos="zoom-in">

                <div class="text-3xl mb-3">🌍</div>

                <h3 class="text-lg font-semibold text-gray-800">
                    Kelas Unggulan ICP
                </h3>

                <p class="text-sm text-gray-500 mt-2">
                    Program bilingual untuk mencetak lulusan berwawasan global.
                </p>

            </div>

            {{-- KETERAMPILAN --}}
            <div class="bg-white border border-gray-200 p-6 hover:shadow-md transition"
                data-aos="zoom-in" data-aos-delay="100">

                <div class="text-3xl mb-3">🛠️</div>

                <h3 class="text-lg font-semibold text-gray-800">
                    Kelas Keterampilan
                </h3>

                <p class="text-sm text-gray-500 mt-2">
                    Fokus pada praktik dan skill kerja industri.
                </p>

            </div>

            {{-- REGULER --}}
            <div class="bg-white border border-gray-200 p-6 hover:shadow-md transition"
                data-aos="zoom-in" data-aos-delay="200">

                <div class="text-3xl mb-3">📘</div>

                <h3 class="text-lg font-semibold text-gray-800">
                    Kelas Reguler
                </h3>

                <p class="text-sm text-gray-500 mt-2">
                    Kurikulum nasional yang seimbang dan adaptif.
                </p>

            </div>

        </div>
    </div>
</section>

{{-- PROGRAM UNGGULAN --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">

        <div class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-800">Program Unggulan</h2>
            <p class="text-sm text-gray-500 mt-1">Academic Excellence & Development</p>
        </div>

        <div class="grid md:grid-cols-4 gap-4 text-sm">

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

            <div class="border border-gray-200 p-4 hover:bg-gray-50 transition"
                data-aos="fade-up">
                <p class="text-gray-700 font-medium">{{ $item }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- PROGRAM KETERAMPILAN --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <div class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-800">Program Keterampilan</h2>
            <p class="text-sm text-gray-500 mt-1">Vocational Skills Program</p>
        </div>

        <div class="grid md:grid-cols-3 gap-5">

            @foreach([
                'Administrasi Perkantoran',
                'Desain Grafis',
                'Teknik Komputer & Jaringan',
                'Tata Boga',
                'Teknik Bisnis Sepeda Motor',
                'Tata Busana',
                'Tata Kecantikan Kulit & Rambut'
            ] as $item)

            <div class="bg-white border border-gray-200 p-5 hover:shadow-sm transition"
                data-aos="fade-up">

                <div class="text-gray-800 font-medium">
                    {{ $item }}
                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-white border-t border-gray-200" data-aos="fade-up">
    <div class="container mx-auto px-6 text-center max-w-2xl">

        <h2 class="text-xl font-semibold text-gray-800">
            Siap Bergabung dengan Program Unggulan Kami?
        </h2>

        <p class="text-sm text-gray-500 mt-2">
            Kami siap membantu siswa berkembang sesuai minat dan bakatnya.
        </p>

        <a href="/kontak"
            class="inline-block mt-6 bg-gray-800 text-white px-6 py-2 text-sm hover:bg-black transition">
            Hubungi Kami
        </a>

    </div>
</section>

@endsection