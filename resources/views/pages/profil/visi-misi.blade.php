@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')

{{-- HEADER --}}
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Visi & Misi
        </h1>
        <p class="text-gray-500 mt-2">
            Arah dan tujuan dalam pengembangan madrasah
        </p>
    </div>
</section>

{{-- VISI --}}
<section class="py-14">
    <div class="container mx-auto px-6 max-w-3xl text-center">

        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
            Visi
        </h2>

        <div class="h-[2px] w-12 bg-gray-300 mx-auto mb-6"></div>

        <p class="text-gray-700 leading-relaxed text-lg font-medium">
            Terwujudnya Madrasah Profesional, Berprestasi serta Entrepreneurship 
            berdasarkan Iman dan Takwa.
        </p>

    </div>
</section>

{{-- MISI --}}
<section class="py-14 bg-gray-50">
    <div class="container mx-auto px-6 max-w-4xl">

        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">
            Misi
        </h2>

        <div class="h-[2px] w-12 bg-gray-300 mx-auto mb-10"></div>

        <div class="grid md:grid-cols-2 gap-6">

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
            ] as $misi)

            <div class="flex gap-3 items-start">
                <div class="mt-1 w-2 h-2 bg-teal-600 rounded-full"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ $misi }}
                </p>
            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection