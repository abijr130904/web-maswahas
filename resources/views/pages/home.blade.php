@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- HERO --}}
    <section id="modern-hero" class="relative h-screen overflow-hidden bg-black">

        {{-- SLIDER --}}
        <div id="slider" class="absolute inset-0">

            <div class="slide active"
                style="background-image:url('https://images.unsplash.com/photo-1588072432836-e10032774350');">
            </div>

            <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1509062522246-3755977927d7');">
            </div>

            <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1577896851231-70ef18881754');">
            </div>

        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40">
        </div>

        {{-- CONTENT --}}
        <div class="relative z-10 h-full pl-10 flex items-center">

            <div class="container mx-auto px-6 bg">

                <div id="hero-text" class="max-w-2xl opacity-0 translate-y-10 transition duration-1000">

                    <p class="text-sm uppercase tracking-[0.3em] text-gray-300 mb-5">
                        Website Resmi Sekolah
                    </p>

                    <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">

                        Membangun Generasi
                        Unggul dan Berkarakter

                    </h1>

                    <p class="mt-6 text-lg text-gray-200 leading-relaxed">

                        MA Wahid Hasyim hadir sebagai lembaga pendidikan
                        yang mengintegrasikan ilmu pengetahuan,
                        karakter, dan nilai-nilai islami.

                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">

                        <a href="/profil/sejarah"
                            class="px-6 py-3 bg-white text-black text-sm font-semibold hover:bg-gray-200 transition">

                            Profil Sekolah

                        </a>

                        <a href="/berita"
                            class="px-6 py-3 border border-white text-white text-sm font-semibold hover:bg-white hover:text-black transition">

                            Lihat Berita

                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- NAVIGATION --}}
        <button id="prev"
            class="absolute left-6 top-1/2 -translate-y-1/2 z-20 text-white/70 hover:text-white text-5xl transition">

            ‹

        </button>

        <button id="next"
            class="absolute right-6 top-1/2 -translate-y-1/2 z-20 text-white/70 hover:text-white text-5xl transition">

            ›

        </button>

        {{-- DOTS --}}
        <div id="dots" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-20">
        </div>

    </section>

    {{-- SAMBUTAN --}}
    <section class="py-24 bg-white border-t border-gray-100">

        <div class="container mx-auto px-6 max-w-6xl">

            <div class="grid md:grid-cols-12 gap-12 items-start">

                {{-- FOTO --}}
                <div class="md:col-span-4">

                    <img src="https://picsum.photos/500/700" alt="Kepala Sekolah"
                        class="w-full h-[500px] object-cover border border-gray-200">

                </div>

                {{-- CONTENT --}}
                <div class="md:col-span-8">

                    <p class="text-sm uppercase tracking-[0.25em] text-gray-500 mb-4">

                        Sambutan Kepala Sekolah

                    </p>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-8">

                        Mewujudkan Pendidikan
                        Berkualitas dan Berkarakter

                    </h2>

                    <div class="space-y-6 text-gray-600 leading-relaxed text-base">

                        <p>
                            Alhamdulillah, puji syukur kehadirat Allah SWT.
                            Kehadiran website ini diharapkan menjadi media informasi
                            yang mampu memberikan akses cepat, tepat, dan transparan
                            kepada masyarakat mengenai berbagai kegiatan sekolah.
                        </p>

                        <p>
                            Kami terus berkomitmen menghadirkan pendidikan yang
                            tidak hanya unggul dalam akademik, tetapi juga membangun
                            karakter, kedisiplinan, dan nilai-nilai islami.
                        </p>

                        <p>
                            Semoga website ini dapat memberikan manfaat bagi seluruh
                            siswa, orang tua, alumni, dan masyarakat luas.
                        </p>

                    </div>

                    {{-- IDENTITAS --}}
                    <div class="mt-10 pt-6 border-t border-gray-200">

                        <p class="text-sm text-gray-500 mb-1">
                            Kepala Sekolah
                        </p>

                        <h3 class="text-xl font-semibold text-gray-900">

                            Erni Sulistiana, S.Pd., M.P.

                        </h3>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- BERITA --}}
    <section id="modern-news" class="py-24 bg-white border-t border-gray-100">

        <div class="container mx-auto px-4 md:px-6">

            {{-- HEADER --}}
            <div class="flex items-end justify-between mb-12">

                <div>

                    <p class="text-sm uppercase tracking-[0.25em] text-gray-500 mb-3">

                        Informasi Sekolah

                    </p>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">

                        Berita Terbaru

                    </h2>

                </div>

                <a href="/semua-berita"
                    class="hidden md:flex items-center text-sm font-semibold text-gray-700 hover:text-black transition">

                    Semua Berita

                    <span class="ml-2">→</span>

                </a>

            </div>

            {{-- GRID --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                {{-- BERITA --}}
                {{-- BERITA --}}
                <div class="lg:col-span-8 space-y-6">

                    @foreach ($beritas as $berita)
                        <x-card_berita :berita="$berita" />
                    @endforeach

                </div>


                {{-- SIDEBAR --}}
                <aside class="lg:col-span-4">

                    <div class="sticky top-24">

                        @include('components.sidebar')

                    </div>

                </aside>

            </div>

        </div>

    </section>

    {{-- GALERI --}}
    <section id="modern-gallery" class="py-24 bg-gray-50 border-t border-gray-100">

        <div class="container mx-auto px-4 md:px-6">

            {{-- HEADER --}}
            <div class="flex items-end justify-between mb-12">

                <div>

                    <p class="text-sm uppercase tracking-[0.25em] text-gray-500 mb-3">

                        Dokumentasi

                    </p>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">

                        Galeri Sekolah

                    </h2>

                </div>

            </div>

            {{-- GRID --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                @for ($i = 0; $i < 8; $i++)
                    <div class="group aspect-square overflow-hidden border border-gray-200 relative">

                        <img src="https://picsum.photos/500/500?random={{ $i }}" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">

                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-500">
                        </div>

                    </div>
                @endfor

            </div>

        </div>

    </section>

    {{-- HERO STYLE --}}
    <style>
        .slide {

            position: absolute;
            inset: 0;

            background-size: cover;
            background-position: center;

            opacity: 0;

            transform: scale(1.05);

            transition:
                opacity 1.2s ease,
                transform 7s ease;

        }

        .slide.active {

            opacity: 1;

            transform: scale(1);

        }

        .dot {

            width: 10px;
            height: 10px;

            background: rgba(255, 255, 255, 0.5);

            cursor: pointer;

            transition: all 0.3s ease;

        }

        .dot.active {

            background: white;

            transform: scale(1.3);

        }
    </style>

    {{-- HERO SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const slides = document.querySelectorAll('.slide');

            const heroText = document.getElementById('hero-text');

            const dotsContainer = document.getElementById('dots');

            const nextBtn = document.getElementById('next');

            const prevBtn = document.getElementById('prev');

            let index = 0;

            let interval;

            /*
            |--------------------------------------------------------------------------
            | CREATE DOTS
            |--------------------------------------------------------------------------
            */

            slides.forEach((_, i) => {

                const dot = document.createElement('div');

                dot.classList.add('dot');

                dot.addEventListener('click', () => {

                    goToSlide(i);

                });

                dotsContainer.appendChild(dot);

            });

            const dots = document.querySelectorAll('.dot');

            /*
            |--------------------------------------------------------------------------
            | SHOW SLIDE
            |--------------------------------------------------------------------------
            */

            function showSlide(i) {

                slides.forEach(slide =>
                    slide.classList.remove('active')
                );

                dots.forEach(dot =>
                    dot.classList.remove('active')
                );

                slides[i].classList.add('active');

                dots[i].classList.add('active');

                /*
                |--------------------------------------------------------------------------
                | TEXT ANIMATION
                |--------------------------------------------------------------------------
                */

                heroText.classList.remove(
                    'opacity-100',
                    'translate-y-0'
                );

                heroText.classList.add(
                    'opacity-0',
                    'translate-y-10'
                );

                setTimeout(() => {

                    heroText.classList.remove(
                        'opacity-0',
                        'translate-y-10'
                    );

                    heroText.classList.add(
                        'opacity-100',
                        'translate-y-0'
                    );

                }, 300);

            }

            /*
            |--------------------------------------------------------------------------
            | NEXT
            |--------------------------------------------------------------------------
            */

            function nextSlide() {

                index = (index + 1) % slides.length;

                showSlide(index);

            }

            /*
            |--------------------------------------------------------------------------
            | PREV
            |--------------------------------------------------------------------------
            */

            function prevSlide() {

                index = (index - 1 + slides.length) % slides.length;

                showSlide(index);

            }

            /*
            |--------------------------------------------------------------------------
            | GO TO SLIDE
            |--------------------------------------------------------------------------
            */

            function goToSlide(i) {

                index = i;

                showSlide(index);

                resetInterval();

            }

            /*
            |--------------------------------------------------------------------------
            | AUTO SLIDE
            |--------------------------------------------------------------------------
            */

            function startAutoSlide() {

                interval = setInterval(nextSlide, 5000);

            }

            function resetInterval() {

                clearInterval(interval);

                startAutoSlide();

            }

            /*
            |--------------------------------------------------------------------------
            | EVENTS
            |--------------------------------------------------------------------------
            */

            nextBtn.addEventListener('click', () => {

                nextSlide();

                resetInterval();

            });

            prevBtn.addEventListener('click', () => {

                prevSlide();

                resetInterval();

            });

            /*
            |--------------------------------------------------------------------------
            | INIT
            |--------------------------------------------------------------------------
            */

            showSlide(index);

            startAutoSlide();

        });
    </script>

@endsection
