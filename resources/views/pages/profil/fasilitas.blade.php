@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')

{{-- HEADER --}}
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Fasilitas Sekolah
        </h1>
        <p class="text-gray-500 mt-2">
            Sarana dan prasarana pendukung kegiatan belajar mengajar
        </p>
    </div>
</section>

{{-- CONTENT --}}
<section class="py-14">
    <div class="container mx-auto px-6 max-w-6xl">

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

            @foreach([
                ['nama' => 'Ruang Kelas', 'img' => 'https://picsum.photos/400/300?1'],
                ['nama' => 'Laboratorium Komputer', 'img' => 'https://picsum.photos/400/300?2'],
                ['nama' => 'Perpustakaan', 'img' => 'https://picsum.photos/400/300?3'],
                ['nama' => 'Masjid', 'img' => 'https://picsum.photos/400/300?4'],
                ['nama' => 'Lapangan Olahraga', 'img' => 'https://picsum.photos/400/300?5'],
                ['nama' => 'Ruang Guru', 'img' => 'https://picsum.photos/400/300?6'],
            ] as $item)

            <div class="group border border-gray-200 rounded-lg overflow-hidden bg-white">

                {{-- IMAGE --}}
                <div class="overflow-hidden">
                    <img src="{{ $item['img'] }}"
                         class="w-full h-40 object-cover group-hover:scale-105 transition duration-300">
                </div>

                {{-- TEXT --}}
                <div class="p-4 text-center">
                    <h3 class="text-gray-800 font-semibold">
                        {{ $item['nama'] }}
                    </h3>
                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection