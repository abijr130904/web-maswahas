@extends('layouts.app')

@section('title', 'Guru & Staff')

@section('content')

{{-- HEADER --}}
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
            Guru & Staff
        </h1>
        <p class="text-gray-500 mt-2">
            Tenaga pendidik dan kependidikan profesional
        </p>
    </div>
</section>

<section class="py-14">
    <div class="container mx-auto px-6 max-w-6xl space-y-14">

        {{-- =========================
            KEPALA SEKOLAH
        ========================== --}}
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">
                Kepala Sekolah
            </h2>

            <div class="flex justify-center">
                <div class="text-center group max-w-xs">

                    <div class="aspect-[3/4] overflow-hidden rounded-lg border border-gray-200 mb-3">
                        <img src="https://picsum.photos/300/400?1"
                             class="w-full h-full object-cover group-hover:scale-105 transition">
                    </div>

                    <h3 class="text-base font-semibold text-gray-800">
                        Erni Sulistiana, S.Pd., M.P.
                    </h3>

                    <p class="text-sm text-gray-500">
                        Kepala Sekolah
                    </p>

                </div>
            </div>
        </div>

        {{-- =========================
            GURU
        ========================== --}}
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-6">
                Guru
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">

                @foreach([
                    ['nama' => 'Ahmad Fauzi, S.Pd', 'jabatan' => 'Matematika'],
                    ['nama' => 'Siti Aminah, S.Pd', 'jabatan' => 'Bahasa Indonesia'],
                    ['nama' => 'Budi Santoso, S.Kom', 'jabatan' => 'Informatika'],
                    ['nama' => 'Dewi Lestari, S.Pd', 'jabatan' => 'Biologi'],
                ] as $guru)

                <div class="group text-center">

                    <div class="aspect-[3/4] overflow-hidden rounded-lg border border-gray-200 mb-3">
                        <img src="https://picsum.photos/300/400?random={{ $loop->index }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition">
                    </div>

                    <h3 class="text-sm font-semibold text-gray-800">
                        {{ $guru['nama'] }}
                    </h3>

                    <p class="text-xs text-gray-500">
                        {{ $guru['jabatan'] }}
                    </p>

                </div>

                @endforeach

            </div>
        </div>

        {{-- =========================
            STAFF / KARYAWAN
        ========================== --}}
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-6">
                Staff & Karyawan
            </h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">

                @foreach([
                    ['nama' => 'Rudi Hartono', 'jabatan' => 'TU'],
                    ['nama' => 'Lina Marlina', 'jabatan' => 'Administrasi'],
                    ['nama' => 'Andi Wijaya', 'jabatan' => 'Operator Sekolah'],
                    ['nama' => 'Nur Hasanah', 'jabatan' => 'Perpustakaan'],
                ] as $staff)

                <div class="group text-center">

                    <div class="aspect-[3/4] overflow-hidden rounded-lg border border-gray-200 mb-3">
                        <img src="https://picsum.photos/300/400?random={{ $loop->index+10 }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition">
                    </div>

                    <h3 class="text-sm font-semibold text-gray-800">
                        {{ $staff['nama'] }}
                    </h3>

                    <p class="text-xs text-gray-500">
                        {{ $staff['jabatan'] }}
                    </p>

                </div>

                @endforeach

            </div>
        </div>

    </div>
</section>

@endsection