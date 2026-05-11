@extends('layouts.app')

@section('title', 'Sejarah Sekolah')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-[80vh] flex items-center overflow-hidden">

        {{-- BG IMAGE --}}
        <div class="absolute inset-0">
            <img src="https://picsum.photos/1600/900"
                alt="Sejarah Sekolah"
                class="w-full h-full object-cover scale-105">
        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/70"></div>

        {{-- GRADIENT --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

        {{-- CONTENT --}}
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">

                    <div class="w-2 h-2 rounded-full bg-green-400"></div>

                    <p class="text-sm tracking-[0.25em] uppercase text-gray-200">
                        Profil Sekolah
                    </p>

                </div>

                <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                    Sejarah
                    <span class="text-blue-400">
                        MA Wahid Hasyim
                    </span>

                </h1>

                <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                    Perjalanan panjang membangun pendidikan islami,
                    membentuk generasi berkarakter,
                    dan menciptakan lingkungan belajar yang unggul.

                </p>

            </div>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="py-28 bg-gradient-to-b from-white to-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-12 gap-16 items-start">

                {{-- LEFT --}}
                <div class="lg:col-span-8">

                    {{-- IMAGE --}}
                    <div class="overflow-hidden rounded-3xl shadow-2xl mb-14 group">

                        <img src="https://picsum.photos/1200/650"
                            alt="Gedung Sekolah"
                            class="w-full h-[520px] object-cover group-hover:scale-105 transition duration-700">

                    </div>

                    {{-- TITLE --}}
                    <div class="mb-12">

                        <p class="text-sm uppercase tracking-[0.25em] text-blue-600 font-semibold mb-4">
                            Perjalanan Sekolah
                        </p>

                        <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">

                            Dari Majlis Ta’lim
                            Menjadi Lembaga Pendidikan Modern

                        </h2>

                    </div>

                    {{-- ARTICLE --}}
                    <div class="space-y-8 text-gray-700 leading-9 text-[18px]">

                        <p>
                            Yayasan Pendidikan Islam Abdul Wahid Hasyim Balung berdiri pada tahun
                            <span class="font-semibold text-gray-900">1957</span>.
                            Awalnya, pada tahun
                            <span class="font-semibold text-gray-900">1954</span>,
                            para ulama kota Balung mendirikan majlis ta’lim
                            yang dilaksanakan secara sederhana di rumah warga.
                        </p>

                        <p>
                            Seiring perkembangan zaman, kegiatan majlis ta’lim tersebut
                            berkembang menjadi madrasah diniyah yang diselenggarakan
                            di rumah salah satu warga NU Balung.
                        </p>

                        <p>
                            Pada tahun
                            <span class="font-semibold text-gray-900">1956</span>,
                            madrasah diniyah berkembang menjadi Madrasah Ibtidaiyah NU
                            dengan kurikulum pondok pesantren,
                            yang didukung para pengajar dari pengurus MWC NU Balung.
                        </p>

                        <p>
                            Madrasah Aliyah Wahid Hasyim resmi berdiri pada tanggal
                            <span class="font-semibold text-gray-900">14 Juni 1978</span>.
                            Sekolah kemudian memperoleh status terdaftar berdasarkan keputusan
                            Departemen Agama Provinsi Jawa Timur pada tahun
                            <span class="font-semibold text-gray-900">1983</span>.
                        </p>

                        <p>
                            Perjalanan terus berlanjut hingga sekolah memperoleh status
                            <span class="font-semibold text-gray-900">“Diakui”</span>
                            dari Departemen Agama Republik Indonesia pada tahun
                            <span class="font-semibold text-gray-900">1994</span>.
                        </p>

                    </div>

                </div>

                {{-- RIGHT --}}
                <div class="lg:col-span-4">

                    <div class="sticky top-24 space-y-8">

                        {{-- INFO BOX --}}
                        <div class="rounded-3xl border border-gray-200 bg-white shadow-xl p-8">

                            <p class="text-sm uppercase tracking-[0.25em] text-gray-500 mb-8">
                                Informasi Sekolah
                            </p>

                            <div class="space-y-7">

                                <div>

                                    <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">
                                        Berdiri
                                    </p>

                                    <h3 class="text-2xl font-bold text-gray-900">
                                        14 Juni 1978
                                    </h3>

                                </div>

                                <div class="border-t border-gray-100 pt-6">

                                    <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">
                                        Yayasan
                                    </p>

                                    <h3 class="text-lg font-semibold text-gray-900 leading-relaxed">
                                        Yayasan Pendidikan Islam Abdul Wahid Hasyim
                                    </h3>

                                </div>

                                <div class="border-t border-gray-100 pt-6">

                                    <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">
                                        Lokasi
                                    </p>

                                    <h3 class="text-lg font-semibold text-gray-900">
                                        Balung, Jawa Timur
                                    </h3>

                                </div>

                            </div>

                        </div>

                        {{-- QUOTE --}}
                        <div class="relative rounded-3xl bg-gray-900 p-8 overflow-hidden">

                            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/20 rounded-full blur-3xl"></div>

                            <svg class="w-10 h-10 text-blue-400 mb-5"
                                fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 8H9V6H7.17zm10 0A5.001 5.001 0 0012 11v7h7v-7h-3.92A3.001 3.001 0 0117.17 8H19V6h-1.83z"/>
                            </svg>

                            <p class="relative text-xl leading-relaxed text-white font-medium">

                                Pendidikan bukan hanya tentang ilmu,
                                tetapi juga membentuk karakter dan akhlak mulia.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- TIMELINE --}}
    <section class="py-28 bg-gray-50 border-t border-gray-200">

        <div class="max-w-5xl mx-auto px-6">

            {{-- HEADER --}}
            <div class="mb-20 text-center">

                <p class="text-sm uppercase tracking-[0.25em] text-blue-600 font-semibold mb-4">
                    Timeline
                </p>

                <h2 class="text-4xl md:text-5xl font-black text-gray-900">

                    Perjalanan dan Perkembangan

                </h2>

            </div>

            {{-- TIMELINE --}}
            <div class="relative">

                {{-- LINE --}}
                <div class="absolute left-3 top-0 bottom-0 w-[2px] bg-gradient-to-b from-blue-500 to-gray-300"></div>

                <div class="space-y-16">

                    @foreach ([
                        [
                            'tahun' => '1954',
                            'judul' => 'Awal Berdiri',
                            'text' => 'Para ulama di Balung mendirikan majlis ta’lim yang dilaksanakan di rumah warga.',
                        ],
                        [
                            'tahun' => '1956',
                            'judul' => 'Pengembangan Madrasah',
                            'text' => 'Majlis ta’lim berkembang menjadi Madrasah Ibtidaiyah NU dengan kurikulum pondok pesantren.',
                        ],
                        [
                            'tahun' => '1957',
                            'judul' => 'Yayasan Berdiri',
                            'text' => 'Yayasan Pendidikan Islam Abdul Wahid Hasyim Balung resmi didirikan.',
                        ],
                        [
                            'tahun' => '1978',
                            'judul' => 'MA Wahid Hasyim Berdiri',
                            'text' => 'Madrasah Aliyah Wahid Hasyim didirikan pada 14 Juni 1978.',
                        ],
                        [
                            'tahun' => '1983',
                            'judul' => 'Status Terdaftar',
                            'text' => 'Mendapat status terdaftar dari Departemen Agama Provinsi Jawa Timur.',
                        ],
                        [
                            'tahun' => '1986',
                            'judul' => 'Terdaftar di LP Ma’arif',
                            'text' => 'Resmi menjadi anggota Lembaga Pendidikan Ma’arif Jawa Timur.',
                        ],
                        [
                            'tahun' => '1994',
                            'judul' => 'Akreditasi Diakui',
                            'text' => 'Mendapat status “Diakui” dari Departemen Agama RI.',
                        ],
                    ] as $item)

                        <div class="relative pl-14 group">

                            {{-- DOT --}}
                            <div
                                class="absolute left-0 top-3 w-6 h-6 rounded-full border-4 border-white bg-blue-600 shadow-lg group-hover:scale-125 transition duration-300">
                            </div>

                            {{-- CONTENT --}}
                            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition duration-500">

                                <p class="text-sm font-semibold tracking-[0.15em] text-blue-600 mb-3">
                                    {{ $item['tahun'] }}
                                </p>

                                <h3
                                    class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition">

                                    {{ $item['judul'] }}

                                </h3>

                                <p class="text-gray-600 leading-relaxed text-base">

                                    {{ $item['text'] }}

                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>

@endsection