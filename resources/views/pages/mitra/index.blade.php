@extends('layouts.app')

@section('title', 'Mitra Sekolah')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden min-h-[70vh] flex items-center">

    {{-- BG --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900?business"
             alt="Mitra Sekolah"
             class="w-full h-full object-cover">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/75"></div>

    {{-- GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

        <div class="max-w-3xl"
             data-aos="fade-right">

            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-md mb-8">

                <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>

                <p class="text-sm uppercase tracking-[0.3em] text-gray-200">
                    Kerjasama Sekolah
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Mitra
                <span class="text-emerald-400">
                    Sekolah
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                Menjalin kolaborasi dengan berbagai institusi,
                perusahaan,
                dan perguruan tinggi
                untuk meningkatkan kualitas pendidikan dan keterampilan siswa.

            </p>

        </div>

    </div>

</section>

{{-- MITRA --}}
<section class="py-28 bg-gradient-to-b from-white to-gray-50 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20"
             data-aos="fade-up">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                Kolaborasi Pendidikan
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Partner & Kerjasama
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach([
                [
                    'nama' => 'Universitas Negeri Jember',
                    'kategori' => 'Perguruan Tinggi',
                    'logo' => '🎓',
                    'desc' => 'Kerjasama pengembangan pendidikan dan pembinaan akademik siswa.'
                ],
                [
                    'nama' => 'PT Teknologi Nusantara',
                    'kategori' => 'Industri Teknologi',
                    'logo' => '💻',
                    'desc' => 'Mendukung program keterampilan dan praktik industri siswa.'
                ],
                [
                    'nama' => 'Balai Pelatihan Kerja',
                    'kategori' => 'Lembaga Pelatihan',
                    'logo' => '🛠️',
                    'desc' => 'Kolaborasi pelatihan keterampilan dan pengembangan soft skill.'
                ],
                [
                    'nama' => 'Bank Syariah Indonesia',
                    'kategori' => 'Perbankan',
                    'logo' => '🏦',
                    'desc' => 'Mendukung edukasi literasi keuangan dan kewirausahaan siswa.'
                ],
                [
                    'nama' => 'Komunitas Digital Kreatif',
                    'kategori' => 'Komunitas',
                    'logo' => '🌐',
                    'desc' => 'Pembinaan kreativitas digital dan pengembangan teknologi.'
                ],
                [
                    'nama' => 'Lembaga Bahasa Internasional',
                    'kategori' => 'Pendidikan Bahasa',
                    'logo' => '📘',
                    'desc' => 'Meningkatkan kemampuan bahasa asing dan komunikasi global.'
                ],
            ] as $item)

            <div class="group"
                 data-aos="fade-up"
                 data-aos-delay="{{ $loop->index * 100 }}">

                <div class="h-full rounded-[2rem] border border-gray-200 bg-white p-8 transition duration-500 hover:-translate-y-2 hover:border-emerald-300">

                    {{-- ICON --}}
                    <div class="w-20 h-20 rounded-3xl bg-emerald-50 flex items-center justify-center text-4xl mb-8 transition duration-500 group-hover:bg-emerald-400 group-hover:scale-110">

                        <span class="group-hover:scale-110 transition">
                            {{ $item['logo'] }}
                        </span>

                    </div>

                    {{-- CATEGORY --}}
                    <p class="text-sm uppercase tracking-[0.2em] text-emerald-500 font-semibold mb-4">

                        {{ $item['kategori'] }}

                    </p>

                    {{-- TITLE --}}
                    <h3 class="text-2xl font-bold text-gray-900 leading-snug mb-5">

                        {{ $item['nama'] }}

                    </h3>

                    {{-- DESC --}}
                    <p class="text-gray-600 leading-relaxed">

                        {{ $item['desc'] }}

                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- BENEFIT --}}
<section class="pb-28 bg-gray-50">

    <div class="max-w-6xl mx-auto px-6">

        <div class="rounded-[2.5rem] overflow-hidden border border-gray-200 bg-white">

            <div class="grid lg:grid-cols-2">

                {{-- IMAGE --}}
                <div class="relative min-h-[350px]"
                     data-aos="fade-right">

                    <img src="https://picsum.photos/900/700?meeting"
                         alt="Kerjasama"
                         class="absolute inset-0 w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent"></div>

                </div>

                {{-- CONTENT --}}
                <div class="p-10 md:p-14 flex flex-col justify-center"
                     data-aos="fade-left">

                    <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-5">
                        Manfaat Kerjasama
                    </p>

                    <h2 class="text-4xl font-black text-gray-900 leading-tight mb-6">

                        Membuka Peluang
                        dan Pengalaman Baru

                    </h2>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Kerjasama dengan berbagai mitra membantu siswa memperoleh
                        pengalaman nyata,
                        meningkatkan kompetensi,
                        dan memperluas wawasan dunia pendidikan maupun industri.

                    </p>

                    {{-- LIST --}}
                    <div class="space-y-4">

                        @foreach([
                            'Program magang dan praktik kerja',
                            'Pembinaan akademik dan keterampilan',
                            'Pengembangan teknologi dan digitalisasi',
                            'Peluang studi lanjut dan karier'
                        ] as $item)

                        <div class="flex items-start gap-4">

                            <div class="w-10 h-10 rounded-2xl bg-emerald-50 flex items-center justify-center flex-shrink-0">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-5 h-5 text-emerald-400"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M5 13l4 4L19 7"/>

                                </svg>

                            </div>

                            <p class="text-gray-700 leading-relaxed">

                                {{ $item }}

                            </p>

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection