@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

    <section class="pt-28 pb-20 bg-white">

        <div class="max-w-3xl mx-auto px-4">

            {{-- JUDUL --}}
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-6">
                {{ $berita->judul }}
            </h1>

            {{-- META --}}
            <div class="flex items-center text-sm text-gray-600 mb-10">
                <span class="mr-4">
                    <i class="far fa-calendar-alt mr-1"></i>
                    {{ $berita->created_at->format('d M Y') }}
                </span>

            </div>



            {{-- KONTEN --}}
            <article class="prose prose-lg max-w-none text-gray-800 leading-relaxed">

                {!! $berita->konten !!}

            </article>

            {{-- BACK --}}
            {{-- BACK --}}
            <div class="mt-10">
                <a href="{{ url()->previous() != url()->current() ? url()->previous() : route('berita.index') }}"
                    class="text-sm text-gray-600 hover:text-black transition">
                    ← Kembali
                </a>
            </div>



        </div>

    </section>

@endsection
