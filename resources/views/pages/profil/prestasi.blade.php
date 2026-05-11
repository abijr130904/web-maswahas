@extends('layouts.app')

@section('title', 'Prestasi Sekolah')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden min-h-[70vh] flex items-center">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900"
             alt="Prestasi Sekolah"
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
                    Prestasi Madrasah
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Prestasi
                <span class="text-emerald-400">
                    Sekolah
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                Berbagai pencapaian akademik dan non-akademik
                sebagai bukti komitmen MA Wahid Hasyim
                dalam mencetak generasi unggul dan berprestasi.

            </p>

        </div>

    </div>

</section>

{{-- CONTENT --}}
<section class="relative py-28 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">

    {{-- DECORATION --}}
    <div class="absolute top-20 left-0 w-72 h-72 bg-emerald-100 rounded-full blur-3xl opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                Data Prestasi
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Pencapaian Siswa
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- TABLE DESKTOP --}}
        <div class="hidden lg:block overflow-hidden rounded-[2rem] border border-gray-100 shadow-[0_20px_80px_rgba(0,0,0,0.08)] bg-white">

            {{-- TABLE HEADER --}}
            <div class="grid grid-cols-12 bg-gray-900 text-white px-8 py-6 text-sm font-semibold tracking-wide">

                <div class="col-span-4">
                    Kegiatan
                </div>

                <div class="col-span-2">
                    Jenis
                </div>

                <div class="col-span-2">
                    Tingkat
                </div>

                <div class="col-span-2">
                    Tahun
                </div>

                <div class="col-span-2">
                    Pencapaian
                </div>

            </div>

            {{-- TABLE CONTENT --}}
            <div class="divide-y divide-gray-100">

                @foreach([
                    [
                        'kegiatan' => 'Olimpiade Matematika',
                        'jenis' => 'Individu',
                        'tingkat' => 'Kabupaten',
                        'tahun' => '2024',
                        'juara' => 'Juara 1'
                    ],
                    [
                        'kegiatan' => 'Lomba Desain Poster',
                        'jenis' => 'Individu',
                        'tingkat' => 'Nasional',
                        'tahun' => '2024',
                        'juara' => 'Juara 2'
                    ],
                    [
                        'kegiatan' => 'Futsal Antar Sekolah',
                        'jenis' => 'Tim',
                        'tingkat' => 'Kabupaten',
                        'tahun' => '2023',
                        'juara' => 'Juara 1'
                    ],
                    [
                        'kegiatan' => 'Kompetisi Robotik',
                        'jenis' => 'Tim',
                        'tingkat' => 'Provinsi',
                        'tahun' => '2023',
                        'juara' => 'Juara 3'
                    ],
                ] as $item)

                <div class="grid grid-cols-12 items-center px-8 py-7 hover:bg-emerald-50/40 transition duration-300">

                    {{-- KEGIATAN --}}
                    <div class="col-span-4">

                        <h3 class="text-lg font-bold text-gray-900 mb-1">

                            {{ $item['kegiatan'] }}

                        </h3>

                        <p class="text-sm text-gray-500">
                            Prestasi siswa MA Wahid Hasyim
                        </p>

                    </div>

                    {{-- JENIS --}}
                    <div class="col-span-2">

                        <span class="inline-flex px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">

                            {{ $item['jenis'] }}

                        </span>

                    </div>

                    {{-- TINGKAT --}}
                    <div class="col-span-2">

                        <span class="text-gray-700 font-medium">

                            {{ $item['tingkat'] }}

                        </span>

                    </div>

                    {{-- TAHUN --}}
                    <div class="col-span-2">

                        <span class="text-gray-700 font-semibold">

                            {{ $item['tahun'] }}

                        </span>

                    </div>

                    {{-- JUARA --}}
                    <div class="col-span-2">

                        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-100 text-emerald-600 font-bold text-sm">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-4 h-4"
                                 fill="currentColor"
                                 viewBox="0 0 20 20">

                                <path d="M9.049 2.927C9.349 2.005 10.651 2.005 10.951 2.927L12.09 6.41a1 1 0 00.95.69h3.664c.969 0 1.371 1.24.588 1.81l-2.964 2.154a1 1 0 00-.364 1.118l1.132 3.486c.3.922-.755 1.688-1.54 1.118l-2.964-2.154a1 1 0 00-1.176 0l-2.964 2.154c-.784.57-1.838-.196-1.539-1.118l1.132-3.486a1 1 0 00-.364-1.118L2.708 8.91c-.783-.57-.38-1.81.588-1.81H6.96a1 1 0 00.95-.69l1.139-3.483z"/>

                            </svg>

                            {{ $item['juara'] }}

                        </span>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

        {{-- MOBILE CARD --}}
        <div class="grid gap-6 lg:hidden">

            @foreach([
                [
                    'kegiatan' => 'Olimpiade Matematika',
                    'jenis' => 'Individu',
                    'tingkat' => 'Kabupaten',
                    'tahun' => '2024',
                    'juara' => 'Juara 1'
                ],
                [
                    'kegiatan' => 'Lomba Desain Poster',
                    'jenis' => 'Individu',
                    'tingkat' => 'Nasional',
                    'tahun' => '2024',
                    'juara' => 'Juara 2'
                ],
                [
                    'kegiatan' => 'Futsal Antar Sekolah',
                    'jenis' => 'Tim',
                    'tingkat' => 'Kabupaten',
                    'tahun' => '2023',
                    'juara' => 'Juara 1'
                ],
                [
                    'kegiatan' => 'Kompetisi Robotik',
                    'jenis' => 'Tim',
                    'tingkat' => 'Provinsi',
                    'tahun' => '2023',
                    'juara' => 'Juara 3'
                ],
            ] as $item)

            <div class="bg-white rounded-[2rem] border border-gray-100 shadow-lg p-7">

                <div class="flex items-start justify-between gap-4 mb-6">

                    <div>

                        <h3 class="text-xl font-black text-gray-900 mb-2">

                            {{ $item['kegiatan'] }}

                        </h3>

                        <p class="text-sm text-gray-500">

                            {{ $item['tingkat'] }}

                        </p>

                    </div>

                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-emerald-500"
                             fill="currentColor"
                             viewBox="0 0 20 20">

                            <path d="M9.049 2.927C9.349 2.005 10.651 2.005 10.951 2.927L12.09 6.41a1 1 0 00.95.69h3.664c.969 0 1.371 1.24.588 1.81l-2.964 2.154a1 1 0 00-.364 1.118l1.132 3.486c.3.922-.755 1.688-1.54 1.118l-2.964-2.154a1 1 0 00-1.176 0l-2.964 2.154c-.784.57-1.838-.196-1.539-1.118l1.132-3.486a1 1 0 00-.364-1.118L2.708 8.91c-.783-.57-.38-1.81.588-1.81H6.96a1 1 0 00.95-.69l1.139-3.483z"/>

                        </svg>

                    </div>

                </div>

                <div class="space-y-4">

                    <div class="flex justify-between items-center">

                        <span class="text-gray-500 text-sm">
                            Jenis
                        </span>

                        <span class="font-semibold text-gray-800">
                            {{ $item['jenis'] }}
                        </span>

                    </div>

                    <div class="flex justify-between items-center">

                        <span class="text-gray-500 text-sm">
                            Tahun
                        </span>

                        <span class="font-semibold text-gray-800">
                            {{ $item['tahun'] }}
                        </span>

                    </div>

                    <div class="flex justify-between items-center">

                        <span class="text-gray-500 text-sm">
                            Prestasi
                        </span>

                        <span class="font-bold text-emerald-500">
                            {{ $item['juara'] }}
                        </span>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- QUOTE --}}
<section class="pb-32 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        <div class="relative overflow-hidden rounded-[2.5rem] bg-gray-900 p-14 md:p-20 text-center shadow-[0_30px_100px_rgba(0,0,0,0.25)]">

            {{-- GLOW --}}
            <div class="absolute top-0 left-0 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl"></div>

            {{-- ICON --}}
            <svg class="w-14 h-14 text-emerald-400 mx-auto mb-10"
                 fill="currentColor"
                 viewBox="0 0 24 24">

                <path d="M5 16L3 5l5.5 3L12 3l3.5 5L21 5l-2 11H5zm0 2h14v2H5v-2z"/>

            </svg>

            <p class="relative text-2xl md:text-4xl leading-relaxed font-semibold text-white max-w-4xl mx-auto">

                “Prestasi bukan hanya tentang kemenangan,
                tetapi tentang kerja keras,
                disiplin,
                dan semangat untuk terus berkembang.”

            </p>

        </div>

    </div>

</section>

@endsection