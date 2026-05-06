@extends('layouts.app')

@section('title', 'Detail Berita')

@section('content')

{{-- HEADER --}}
<section class="bg-gray-100 py-10">
    <div class="container mx-auto px-6 max-w-4xl">
        <h1 class="text-2xl md:text-3xl font-semibold text-gray-800 leading-snug">
            Persiapan Menghadapi Ujian Satuan Pendidikan (USP) Tahun 2026
        </h1>

        <div class="flex items-center gap-3 text-sm text-gray-500 mt-3">
            <span class="bg-gray-200 px-2 py-1 rounded">Pendidikan</span>
            <span>•</span>
            <span>10 April 2026</span>
            <span>•</span>
            <span>Admin Sekolah</span>
        </div>
    </div>
</section>

{{-- CONTENT --}}
<section class="py-12">
    <div class="container mx-auto px-6 max-w-4xl"> 

        {{-- IMAGE --}}
        <img src="https://picsum.photos/900/450"
             class="w-full rounded-lg mb-8 object-cover">

        {{-- ISI --}}
        <article class="space-y-5 text-gray-700 leading-relaxed text-[15px]">

            <p>
                Siswa kelas XII diharapkan mulai mempersiapkan diri dengan baik dalam menghadapi Ujian Satuan Pendidikan (USP) tahun 2026.
                Kegiatan ini merupakan bagian penting dalam menentukan kelulusan siswa.
            </p>

            <p>
                Sekolah telah menyiapkan berbagai program pendampingan seperti bimbingan belajar, try out, dan pendalaman materi
                yang dilaksanakan secara rutin setiap minggu.
            </p>

            <p>
                Kepala sekolah menegaskan bahwa seluruh siswa harus mengikuti kegiatan ini dengan serius agar dapat mencapai hasil yang maksimal.
            </p>

            <blockquote class="border-l-4 border-teal-600 pl-4 italic text-gray-600">
                “Kesuksesan tidak datang secara instan, tetapi melalui persiapan yang matang dan disiplin belajar.”
            </blockquote>

            <p>
                Dengan adanya dukungan dari guru dan orang tua, diharapkan siswa dapat menghadapi ujian dengan percaya diri
                dan memperoleh hasil yang memuaskan.
            </p>

        </article>

        {{-- SHARE / NAV --}}
        <div class="mt-10 border-t pt-6 flex justify-between items-center text-sm text-gray-500">

            <a href="/berita" class="hover:text-gray-800 transition">
                ← Kembali ke Berita
            </a>

            <div class="flex gap-3">
                <a href="#" class="hover:text-teal-600">Share</a>
                <a href="#" class="hover:text-teal-600">Print</a>
            </div>

        </div>

    </div>
</section>

@endsection