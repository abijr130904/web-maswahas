@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<section class="pt-32 pb-24 bg-gradient-to-b from-gray-50 to-white min-h-screen overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold mb-5">
                Portal Informasi Sekolah
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-5">
                Berita Terbaru
            </h1>

            <p class="max-w-2xl mx-auto text-gray-600 text-lg leading-relaxed">
                Ikuti informasi terbaru, kegiatan sekolah, prestasi siswa,
                dan berbagai berita menarik lainnya.
            </p>

        </div>

        {{-- LIST BERITA --}}
        @if($beritas->count())

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                @foreach($beritas as $berita)

                    <article class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">

                        {{-- IMAGE --}}
                        <div class="relative overflow-hidden">

                            <a href="{{ url('/berita/' . $berita->slug) }}">

                                <img
                                    src="{{ $berita->thumbnail }}"
                                    alt="{{ $berita->judul }}"
                                    class="w-full h-64 object-cover group-hover:scale-110 transition duration-700"
                                >

                            </a>

                            {{-- OVERLAY --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>

                            {{-- DATE --}}
                            <div class="absolute top-4 left-4">

                                <div class="bg-white/90 backdrop-blur-md px-4 py-2 rounded-xl shadow-lg">

                                    <div class="text-xs text-gray-500 uppercase tracking-wide">
                                        Tanggal
                                    </div>

                                    <div class="text-sm font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- CONTENT --}}
                        <div class="p-7">

                            {{-- TITLE --}}
                            <h2 class="text-2xl font-bold text-gray-900 leading-snug mb-4 line-clamp-2">

                                <a
                                    href="{{ url('/berita/' . $berita->slug) }}"
                                    class="hover:text-blue-600 transition"
                                >
                                    {{ $berita->judul }}
                                </a>

                            </h2>

                            {{-- EXCERPT --}}
                            <p class="text-gray-600 leading-relaxed text-sm line-clamp-3 mb-6">
                                {{ \Illuminate\Support\Str::limit(strip_tags($berita->konten), 140) }}
                            </p>

                            {{-- FOOTER --}}
                            <div class="flex items-center justify-between">

                                <a
                                    href="{{ url('/berita/' . $berita->slug) }}"
                                    class="inline-flex items-center text-sm font-semibold text-blue-600 hover:text-blue-800 transition"
                                >

                                    Baca Selengkapnya

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 ml-2 group-hover:translate-x-1 transition"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>

                                </a>

                                {{-- DECORATION --}}
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-blue-600"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 11H5m14 0l-4-4m4 4l-4 4" />

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            {{-- EMPTY STATE --}}
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 py-24 text-center">

                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-12 h-12 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M19 11H5m14 0l-4-4m4 4l-4 4" />

                    </svg>

                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-3">
                    Belum Ada Berita
                </h2>

                <p class="text-gray-500 text-lg">
                    Berita yang dipublish akan muncul di halaman ini.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection