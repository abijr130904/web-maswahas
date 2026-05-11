@extends('layouts.app')

@section('title', 'Guru & Staff')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden min-h-[65vh] flex items-center">

    {{-- BG --}}
    <div class="absolute inset-0">
        <img src="https://picsum.photos/1600/900"
             alt="Guru dan Staff"
             class="w-full h-full object-cover">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/70"></div>

    {{-- GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

        <div class="max-w-3xl">

            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">

                <div class="w-2 h-2 rounded-full bg-blue-400"></div>

                <p class="text-sm tracking-[0.25em] uppercase text-gray-200">
                    Tenaga Pendidik
                </p>

            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                Guru &
                <span class="text-emerald-400">
                    Staff
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                Didukung tenaga pendidik profesional,
                berpengalaman,
                dan berkomitmen membangun generasi unggul.

            </p>

        </div>

    </div>

</section>

{{-- CONTENT --}}
<section class="py-28 bg-gradient-to-b from-white to-gray-50">

    <div class="max-w-7xl mx-auto px-6 space-y-28">

        {{-- =========================
            KEPALA SEKOLAH
        ========================== --}}
        <div>

            {{-- HEADER --}}
            <div class="text-center mb-16">

                <p class="text-sm uppercase tracking-[0.25em] text-blue-600 font-semibold mb-4">
                    Pimpinan
                </p>

                <h2 class="text-4xl md:text-5xl font-black text-gray-900">
                    Kepala Sekolah
                </h2>

            </div>

            {{-- CARD --}}
            <div class="flex justify-center">

                <div class="group relative max-w-sm">

                    {{-- GLOW --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-500"></div>

                    <div class="relative bg-white rounded-[2rem] overflow-hidden shadow-2xl border border-gray-100">

                        {{-- IMAGE --}}
                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/500/650?1"
                                 class="w-full h-[500px] object-cover group-hover:scale-105 transition duration-700">

                        </div>

                        {{-- CONTENT --}}
                        <div class="p-8 text-center">

                            <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                Erni Sulistiana, S.Pd., M.P.
                            </h3>

                            <p class="text-blue-600 font-medium">
                                Kepala Sekolah
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- =========================
            GURU
        ========================== --}}
        <div>

            {{-- HEADER --}}
            <div class="flex items-end justify-between mb-12">

                <div>

                    <p class="text-sm uppercase tracking-[0.25em] text-blue-600 font-semibold mb-3">
                        Tenaga Pengajar
                    </p>

                    <h2 class="text-4xl font-black text-gray-900">
                        Guru
                    </h2>

                </div>

                <div class="hidden md:block w-32 h-[2px] bg-gradient-to-r from-blue-500 to-transparent"></div>

            </div>

            {{-- GRID --}}
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">

                @foreach([
                    ['nama' => 'Ahmad Fauzi, S.Pd', 'jabatan' => 'Matematika'],
                    ['nama' => 'Siti Aminah, S.Pd', 'jabatan' => 'Bahasa Indonesia'],
                    ['nama' => 'Budi Santoso, S.Kom', 'jabatan' => 'Informatika'],
                    ['nama' => 'Dewi Lestari, S.Pd', 'jabatan' => 'Biologi'],
                ] as $guru)

                <div class="group">

                    <div class="relative overflow-hidden rounded-[2rem] bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition duration-500">

                        {{-- IMAGE --}}
                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/500/650?random={{ $loop->index }}"
                                 class="w-full h-[340px] object-cover group-hover:scale-105 transition duration-700">

                        </div>

                        {{-- CONTENT --}}
                        <div class="p-6 text-center">

                            <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">

                                {{ $guru['nama'] }}

                            </h3>

                            <p class="text-blue-600 text-sm font-medium">

                                {{ $guru['jabatan'] }}

                            </p>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

        {{-- =========================
            STAFF
        ========================== --}}
        <div>

            {{-- HEADER --}}
            <div class="flex items-end justify-between mb-12">

                <div>

                    <p class="text-sm uppercase tracking-[0.25em] text-blue-600 font-semibold mb-3">
                        Kependidikan
                    </p>

                    <h2 class="text-4xl font-black text-gray-900">
                        Staff & Karyawan
                    </h2>

                </div>

                <div class="hidden md:block w-32 h-[2px] bg-gradient-to-r from-blue-500 to-transparent"></div>

            </div>

            {{-- GRID --}}
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">

                @foreach([
                    ['nama' => 'Rudi Hartono', 'jabatan' => 'TU'],
                    ['nama' => 'Lina Marlina', 'jabatan' => 'Administrasi'],
                    ['nama' => 'Andi Wijaya', 'jabatan' => 'Operator Sekolah'],
                    ['nama' => 'Nur Hasanah', 'jabatan' => 'Perpustakaan'],
                ] as $staff)

                <div class="group">

                    <div class="relative overflow-hidden rounded-[2rem] bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition duration-500">

                        {{-- IMAGE --}}
                        <div class="overflow-hidden">

                            <img src="https://picsum.photos/500/650?random={{ $loop->index + 10 }}"
                                 class="w-full h-[340px] object-cover group-hover:scale-105 transition duration-700">

                        </div>

                        {{-- CONTENT --}}
                        <div class="p-6 text-center">

                            <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">

                                {{ $staff['nama'] }}

                            </h3>

                            <p class="text-blue-600 text-sm font-medium">

                                {{ $staff['jabatan'] }}

                            </p>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

{{-- QUOTE --}}
<section class="pb-28 bg-gray-50">

    <div class="max-w-5xl mx-auto px-6">

        <div class="relative overflow-hidden rounded-[2rem] bg-gray-900 p-12 md:p-16 text-center shadow-2xl">

            {{-- GLOW --}}
            <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>

            {{-- ICON --}}
            <svg class="w-12 h-12 text-emerald-400 mx-auto mb-8"
                 fill="currentColor"
                 viewBox="0 0 24 24">

                <path d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 8H9V6H7.17zm10 0A5.001 5.001 0 0012 11v7h7v-7h-3.92A3.001 3.001 0 0117.17 8H19V6h-1.83z"/>

            </svg>

            <p class="relative text-2xl md:text-3xl leading-relaxed font-semibold text-white max-w-4xl mx-auto">

                “Guru yang hebat bukan hanya mengajar ilmu,
                tetapi juga menginspirasi dan membentuk karakter generasi masa depan.”

            </p>

        </div>

    </div>

</section>

@endsection