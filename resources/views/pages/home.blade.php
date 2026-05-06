@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- HERO SLIDER --}}
    <section class="relative h-[90vh] overflow-hidden">

        {{-- SLIDES --}}
        <div id="slider" class="absolute inset-0">

            <div class="slide active"
                style="background-image: url('https://images.unsplash.com/photo-1588072432836-e10032774350');"></div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7');"></div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1577896851231-70ef18881754');"></div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1497633762265-9d179a990aa6');"></div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1519452575417-564c1401ecc0');"></div>

        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/50"></div>

        {{-- CONTENT --}}
        <div class="relative z-10 flex items-start h-full  text-white px-6 pt-32">
            <div id="hero-text" class="opacity-0 translate-y-10 transition duration-1000 max-w-2xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">
                    MA WAHID HASYIM
                </h1>
                <p class="text-lg md:text-xl">
                    Selamat datang di website resmi MA Wahid Hasyim, tempat di mana pendidikan
                    berkualitas dan karakter mulia bertemu untuk mencetak generasi masa depan yang cemerlang.
                </p>
            </div>
        </div>

        {{-- BUTTON NAV --}}
        <button id="prev" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 text-white text-3xl">‹</button>
        <button id="next" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 text-white text-3xl">›</button>

        {{-- DOTS --}}
        <div id="dots" class="absolute bottom-6 w-full flex justify-center gap-3 z-20"></div>

    </section>

    {{-- STYLE --}}
    <style>
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 1s ease-in-out, transform 6s ease;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        .dot {
            width: 10px;
            height: 10px;
            background: white;
            opacity: 0.5;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }

        .dot.active {
            opacity: 1;
            transform: scale(1.3);
        }
    </style>

    {{-- SCRIPT --}}
    <script>
        const slides = document.querySelectorAll('.slide');
        const heroText = document.getElementById('hero-text');
        const dotsContainer = document.getElementById('dots');
        const nextBtn = document.getElementById('next');
        const prevBtn = document.getElementById('prev');

        let index = 0;
        let interval;

        // CREATE DOTS
        slides.forEach((_, i) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        function showSlide(i) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[i].classList.add('active');
            dots[i].classList.add('active');

            // animasi teks
            heroText.classList.remove('opacity-100', 'translate-y-0');
            heroText.classList.add('opacity-0', 'translate-y-10');

            setTimeout(() => {
                heroText.classList.remove('opacity-0', 'translate-y-10');
                heroText.classList.add('opacity-100', 'translate-y-0');
            }, 300);
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide(index);
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            showSlide(index);
        }

        function goToSlide(i) {
            index = i;
            showSlide(index);
            resetInterval();
        }

        function startAutoSlide() {
            interval = setInterval(nextSlide, 5000);
        }

        function resetInterval() {
            clearInterval(interval);
            startAutoSlide();
        }

        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetInterval();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetInterval();
        });

        // INIT
        showSlide(index);
        startAutoSlide();
    </script>

    {{-- SAMBUTAN --}}
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-6 max-w-5xl">

            <div class="flex flex-col md:flex-row gap-10">

                {{-- FOTO --}}
                <div class="md:w-1/4">
                    <img src="https://picsum.photos/300/400" alt="Kepala Sekolah" class="w-full h-64 md:h-72 object-cover">
                </div>

                {{-- TEKS --}}
                <div class="md:w-3/4">

                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                        Sambutan Kepala Sekolah
                    </h2>

                    <div class="w-10 h-[2px] bg-gray-300 mb-6"></div>

                    <div class="space-y-4 text-gray-600 text-sm md:text-base leading-relaxed">
                        <p>
                            Alhamdulillah, puji dan syukur kami panjatkan kehadirat Allah SWT. Melalui website ini
                            diharapkan masyarakat dapat memperoleh informasi terkait sekolah secara mudah dan akurat.
                        </p>
                        <p>
                            Informasi akan diperbarui secara berkala agar tetap relevan. Kritik dan saran sangat kami
                            harapkan demi pengembangan yang lebih baik.
                        </p>
                        <p class="text-gray-700 font-medium">
                            Semoga website ini memberikan manfaat bagi semua pihak.
                        </p>
                    </div>

                    {{-- IDENTITAS --}}
                    <div class="mt-8 pt-4 border-t border-gray-200 text-right">
                        <p class="text-sm text-gray-500">Kepala Sekolah</p>
                        <p class="text-base font-semibold text-gray-800">
                            Erni Sulistiana, S.Pd., M.P.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- BERITA + SIDEBAR --}}
    <section class="py-14 bg-gray-50" x-data="{ activeTab: 'info' }">

        <div class="container mx-auto px-4 md:px-6">

            {{-- HEADER SECTION --}}
            <div class="flex items-center justify-between mb-6 pb-3 border-b border-gray-200">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                    Postingan Terbaru
                </h2>


            </div>

            {{-- GRID --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                {{-- LEFT: BERITA --}}
                <div class="lg:col-span-8 space-y-6">


                    @for ($i = 0; $i < 3; $i++)
                        <a href="/berita/{{ $i + 1 }}" class="block group">

                            <article class="bg-white border border-gray-200 hover:shadow-sm transition">

                                <div class="flex flex-col md:flex-row gap-5 p-4">

                                    {{-- IMAGE --}}
                                    <div class="md:w-1/4">
                                        <img src="https://picsum.photos/300/200?random={{ $i }}"
                                            class="w-full h-36 object-cover rounded">
                                    </div>

                                    {{-- CONTENT --}}
                                    <div class="md:w-3/4 flex flex-col justify-between">

                                        <div>

                                            {{-- META --}}
                                            <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
                                                <span class="bg-gray-100 px-2 py-1 rounded">
                                                    Pendidikan
                                                </span>
                                                <span>•</span>
                                                <span>10 April 2026</span>
                                            </div>

                                            {{-- TITLE --}}
                                            <h3
                                                class="text-base md:text-lg font-semibold text-gray-800 group-hover:text-black transition">
                                                Persiapan USP Tahun 2026
                                            </h3>

                                            {{-- DESC --}}
                                            <p class="text-sm text-gray-500 mt-2 line-clamp-2">
                                                Siswa kelas XII diharapkan mulai mempersiapkan diri dengan baik dalam
                                                menghadapi ujian...
                                            </p>

                                        </div>

                                        {{-- CTA (opsional, tetap ada tapi tidak wajib diklik) --}}
                                        <div class="mt-3">
                                            <span
                                                class="inline-flex items-center text-sm font-medium text-gray-700 group-hover:text-black transition">
                                                Baca selengkapnya →
                                            </span>
                                        </div>

                                    </div>

                                </div>

                            </article>

                        </a>
                    @endfor

                    <a href="#" class="text-sm text-gray-600 hover:text-black mt-4 inline-block">
                        Lihat Semua →
                    </a>

                </div>
                <div class="lg:col-span-4">
                    @include('components.sidebar')
                </div>

            </div>
        </div>

    </section>

    {{-- GALERI --}}
    <section class="py-14 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-6">

            {{-- Header --}}
            <div class="flex items-center justify-between mb-6 pb-3 border-b border-gray-200">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                    Galeri
                </h2>
                <a href="#" class="text-sm text-gray-600 hover:text-black">
                    Lihat Semua →
                </a>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

                @for ($i = 0; $i < 8; $i++)
                    <div class="group overflow-hidden">
                        <img src="https://picsum.photos/300/300?random={{ $i }}"
                            class="w-full h-40 md:h-44 object-cover transition duration-300 group-hover:scale-105">
                    </div>
                @endfor

            </div>

        </div>
    </section>

@endsection
