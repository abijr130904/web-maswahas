@extends('layouts.app')

@section('title', 'Prestasi Sekolah')

@section('content')

{{-- HEADER --}}
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Prestasi Sekolah
        </h1>
        <p class="text-gray-500 mt-2">
            Data pencapaian siswa dalam berbagai kegiatan
        </p>
    </div>
</section>

{{-- CONTENT --}}
<section class="py-14">
    <div class="container mx-auto px-6 max-w-6xl">

        {{-- TABLE HEADER --}}
        <div class="grid grid-cols-12 text-xs font-semibold text-gray-500 border-b pb-3 hidden md:grid">
            <div class="col-span-3">Kegiatan</div>
            <div class="col-span-2">Jenis</div>
            <div class="col-span-2">Tingkat</div>
            <div class="col-span-2">Tahun</div>
            <div class="col-span-3">Pencapaian</div>
        </div>

        {{-- DATA --}}
        <div class="divide-y">

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

            <div class="py-4 grid grid-cols-1 md:grid-cols-12 gap-2 md:gap-0 items-start">

                {{-- KEGIATAN --}}
                <div class="md:col-span-3">
                    <p class="text-gray-800 font-medium">
                        {{ $item['kegiatan'] }}
                    </p>
                </div>

                {{-- JENIS --}}
                <div class="md:col-span-2">
                    <span class="text-sm text-gray-600">
                        {{ $item['jenis'] }}
                    </span>
                </div>

                {{-- TINGKAT --}}
                <div class="md:col-span-2">
                    <span class="text-sm text-gray-600">
                        {{ $item['tingkat'] }}
                    </span>
                </div>

                {{-- TAHUN --}}
                <div class="md:col-span-2">
                    <span class="text-sm text-gray-600">
                        {{ $item['tahun'] }}
                    </span>
                </div>

                {{-- JUARA --}}
                <div class="md:col-span-3">
                    <span class="text-sm font-semibold text-teal-700">
                        {{ $item['juara'] }}
                    </span>
                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection