@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden min-h-[60vh] flex items-center">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900"
             alt="Fasilitas Sekolah"
             class="w-full h-full object-cover">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/70"></div>

    {{-- GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

        <div class="max-w-3xl"
             data-aos="fade-right">

            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-md mb-8">

                <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>

                <p class="text-sm uppercase tracking-[0.3em] text-gray-200">
                    Sarana Sekolah
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Fasilitas
                <span class="text-emerald-400">
                    Sekolah
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                Lingkungan belajar modern dan nyaman
                untuk mendukung proses pendidikan,
                kreativitas,
                dan pengembangan keterampilan siswa.

            </p>

        </div>

    </div>

</section>

{{-- CONTENT --}}
<section class="py-28 bg-gradient-to-b from-white to-gray-50 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-20"
             data-aos="fade-up">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                Fasilitas Unggulan
            </p>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Sarana & Prasarana
            </h2>

            <div class="w-24 h-1 bg-emerald-400 mx-auto rounded-full"></div>

        </div>

        {{-- GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach([
                [
                    'nama' => 'Ruang Kelas',
                    'img' => 'https://picsum.photos/600/500?1',
                    'desc' => 'Ruang belajar nyaman dengan fasilitas modern.'
                ],
                [
                    'nama' => 'Laboratorium Komputer',
                    'img' => 'https://picsum.photos/600/500?2',
                    'desc' => 'Mendukung pembelajaran teknologi dan digital.'
                ],
                [
                    'nama' => 'Perpustakaan',
                    'img' => 'https://picsum.photos/600/500?3',
                    'desc' => 'Koleksi buku lengkap untuk menunjang literasi siswa.'
                ],
                [
                    'nama' => 'Masjid',
                    'img' => 'https://picsum.photos/600/500?4',
                    'desc' => 'Pusat kegiatan ibadah dan pembinaan karakter islami.'
                ],
                [
                    'nama' => 'Lapangan Olahraga',
                    'img' => 'https://picsum.photos/600/500?5',
                    'desc' => 'Fasilitas olahraga untuk pengembangan bakat siswa.'
                ],
                [
                    'nama' => 'Ruang Guru',
                    'img' => 'https://picsum.photos/600/500?6',
                    'desc' => 'Area kerja nyaman bagi tenaga pendidik dan staff.'
                ],
            ] as $item)

            <div class="group"
                 data-aos="fade-up"
                 data-aos-delay="{{ $loop->index * 100 }}">

                <div class="overflow-hidden rounded-[2rem] border border-gray-200 bg-white transition duration-500 hover:-translate-y-2 hover:border-emerald-300">

                    {{-- IMAGE --}}
                    <div class="relative overflow-hidden">

                        <img src="{{ $item['img'] }}"
                             alt="{{ $item['nama'] }}"
                             class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">

                        {{-- OVERLAY --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>

                        {{-- LABEL --}}
                        <div class="absolute top-5 left-5">

                            <div class="px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20">

                                <p class="text-xs uppercase tracking-[0.2em] text-white">
                                    Fasilitas
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- CONTENT --}}
                    <div class="p-7">

                        <div class="flex items-start justify-between gap-4 mb-4">

                            <h3 class="text-2xl font-bold text-gray-900 leading-snug">

                                {{ $item['nama'] }}

                            </h3>

                            {{-- ICON --}}
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center flex-shrink-0">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-6 h-6 text-emerald-400"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M5 12h14M12 5l7 7-7 7"/>

                                </svg>

                            </div>

                        </div>

                        <p class="text-gray-600 leading-relaxed">

                            {{ $item['desc'] }}

                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- EXTRA --}}
<section class="pb-28 bg-gray-50">

    <div class="max-w-6xl mx-auto px-6">

        <div class="rounded-[2.5rem] border border-gray-200 bg-white overflow-hidden">

            <div class="grid lg:grid-cols-2">

                {{-- IMAGE --}}
                <div class="relative min-h-[350px]"
                     data-aos="fade-right">

                    <img src="https://picsum.photos/900/700?school"
                         class="absolute inset-0 w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent"></div>

                </div>

                {{-- CONTENT --}}
                <div class="p-10 md:p-14 flex flex-col justify-center"
                     data-aos="fade-left">

                    <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-5">
                        Lingkungan Belajar
                    </p>

                    <h2 class="text-4xl font-black text-gray-900 leading-tight mb-6">

                        Mendukung Pembelajaran
                        yang Modern & Nyaman

                    </h2>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Seluruh fasilitas sekolah dirancang untuk menciptakan
                        suasana belajar yang nyaman,
                        produktif,
                        dan mendukung pengembangan akademik maupun non-akademik siswa.

                    </p>

                    <div class="flex flex-wrap gap-4">

                        <div class="px-5 py-3 rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-600 font-medium">
                            Modern
                        </div>

                        <div class="px-5 py-3 rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-600 font-medium">
                            Nyaman
                        </div>

                        <div class="px-5 py-3 rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-600 font-medium">
                            Lengkap
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection