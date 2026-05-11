@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden min-h-[70vh] flex items-center">

        {{-- BACKGROUND --}}
        <div class="absolute inset-0">
            <img src="https://picsum.photos/1600/900" alt="Kontak Sekolah" class="w-full h-full object-cover">
        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/75"></div>

        {{-- GRADIENT --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent"></div>

        {{-- GLOW --}}
        <div class="absolute top-0 right-0 w-[450px] h-[450px] bg-emerald-400/10 rounded-full blur-3xl"></div>

        {{-- CONTENT --}}
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-3xl" data-aos="fade-right">

                <div
                    class="inline-flex items-center gap-3 px-5 py-3 rounded-full bg-white/10 border border-white/10 backdrop-blur-md mb-8">

                    <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>

                    <p class="text-sm tracking-[0.3em] uppercase text-gray-200 font-medium">
                        Hubungi Kami
                    </p>

                </div>

                <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">

                    Kontak
                    <span class="text-emerald-400">
                        Sekolah
                    </span>

                </h1>

                <p class="mt-8 text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl">

                    Kami siap membantu memberikan informasi,
                    menerima pertanyaan,
                    kritik,
                    maupun saran untuk kemajuan sekolah.

                </p>

            </div>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="py-28 bg-white relative overflow-hidden">

        {{-- DECORATION --}}
        <div class="absolute left-0 top-20 w-72 h-72 bg-emerald-50 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-5 gap-16 items-start">

                {{-- LEFT --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- HEADER --}}
                    <div data-aos="fade-up">

                        <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                            Informasi
                        </p>

                        <h2 class="text-4xl font-black text-gray-900 leading-tight mb-5">

                            Mari Terhubung
                            Bersama Kami

                        </h2>

                        <p class="text-gray-600 leading-relaxed text-lg">

                            Jangan ragu untuk menghubungi kami apabila membutuhkan
                            informasi mengenai sekolah maupun program pendidikan.

                        </p>

                    </div>

                    {{-- ITEM --}}
                    <div class="space-y-4">

                        {{-- TELEPON --}}
                        <div class="group border border-gray-100 rounded-[2rem] p-6 hover:border-emerald-200 transition duration-300"
                            data-aos="fade-up" data-aos-delay="100">

                            <div class="flex gap-5">

                                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-2xl">
                                    📞
                                </div>

                                <div>

                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Telepon
                                    </h3>

                                    <p class="text-gray-600">
                                        (0336) 622577
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- EMAIL --}}
                        <div class="group border border-gray-100 rounded-[2rem] p-6 hover:border-emerald-200 transition duration-300"
                            data-aos="fade-up" data-aos-delay="200">

                            <div class="flex gap-5">

                                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-2xl">
                                    ✉️
                                </div>

                                <div>

                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Email
                                    </h3>

                                    <p class="text-gray-600">
                                        info@maswahas.sch.id
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- JAM --}}
                        <div class="group border border-gray-100 rounded-[2rem] p-6 hover:border-emerald-200 transition duration-300"
                            data-aos="fade-up" data-aos-delay="300">

                            <div class="flex gap-5">

                                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-2xl">
                                    🕒
                                </div>

                                <div>

                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Jam Operasional
                                    </h3>

                                    <p class="text-gray-600 leading-relaxed">
                                        Senin - Sabtu <br>
                                        07.00 - 15.00 WIB
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- SOSMED --}}
                    <div class="pt-6" data-aos="fade-up" data-aos-delay="400">

                        {{-- TITLE --}}
                        <div class="flex items-center gap-4 mb-6">

                            <p class="text-sm uppercase tracking-[0.3em] text-emerald-400 font-semibold">
                                Sosial Media
                            </p>

                        </div>

                        {{-- LIST --}}
                        <div class="flex flex-wrap gap-4">

                            {{-- FACEBOOK --}}
                            <a href="#" target="_blank"
                                class="group w-14 h-14 rounded-2xl border border-gray-200 bg-white flex items-center justify-center transition duration-300 hover:border-emerald-400 hover:bg-emerald-400 hover:-translate-y-1">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-700 group-hover:text-white transition" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.19 2.23.19v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.77l-.44 2.89h-2.33v6.99A10 10 0 0 0 22 12Z" />

                                </svg>

                            </a>

                            {{-- INSTAGRAM --}}
                            <a href="#" target="_blank"
                                class="group w-14 h-14 rounded-2xl border border-gray-200 bg-white flex items-center justify-center transition duration-300 hover:border-emerald-400 hover:bg-emerald-400 hover:-translate-y-1">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-700 group-hover:text-white transition" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5Zm0 1.8h8.5a3.95 3.95 0 0 1 3.95 3.95v8.5a3.95 3.95 0 0 1-3.95 3.95h-8.5a3.95 3.95 0 0 1-3.95-3.95v-8.5A3.95 3.95 0 0 1 7.75 3.8Zm8.95 1.35a1.05 1.05 0 1 0 0 2.1 1.05 1.05 0 0 0 0-2.1ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 1.8A3.2 3.2 0 1 1 8.8 12 3.2 3.2 0 0 1 12 8.8Z" />

                                </svg>

                            </a>

                            {{-- LINKEDIN --}}
                            <a href="#" target="_blank"
                                class="group w-14 h-14 rounded-2xl border border-gray-200 bg-white flex items-center justify-center transition duration-300 hover:border-emerald-400 hover:bg-emerald-400 hover:-translate-y-1">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-700 group-hover:text-white transition" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M4.98 3.5C4.98 4.6 4.1 5.5 3 5.5S1 4.6 1 3.5 1.9 1.5 3 1.5 4.98 2.4 4.98 3.5ZM1.5 8h3V22h-3V8Zm7 0h2.88v1.91h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.59V22h-3v-7.04c0-1.68-.03-3.84-2.34-3.84-2.34 0-2.7 1.83-2.7 3.72V22h-3V8Z" />

                                </svg>

                            </a>

                            {{-- YOUTUBE --}}
                            <a href="#" target="_blank"
                                class="group w-14 h-14 rounded-2xl border border-gray-200 bg-white flex items-center justify-center transition duration-300 hover:border-emerald-400 hover:bg-emerald-400 hover:-translate-y-1">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-700 group-hover:text-white transition" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.4 31.4 0 0 0 0 12a31.4 31.4 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.4 31.4 0 0 0 24 12a31.4 31.4 0 0 0-.5-5.8ZM9.75 15.5v-7l6 3.5-6 3.5Z" />

                                </svg>

                            </a>

                        </div>

                    </div>
                </div>

                {{-- FORM --}}
                <div class="lg:col-span-3" data-aos="fade-left">

                    <div class="border border-gray-100 rounded-[2.5rem] overflow-hidden">

                        {{-- TOP LINE --}}
                        <div class="h-1 bg-emerald-400"></div>

                        <div class="p-8 md:p-12">

                            {{-- HEADER --}}
                            <div class="mb-10">

                                <p class="text-sm uppercase tracking-[0.25em] text-emerald-500 font-semibold mb-4">
                                    Formulir Kontak
                                </p>

                                <h2 class="text-4xl font-black text-gray-900 mb-4">
                                    Kirim Pesan
                                </h2>

                                <p class="text-gray-600 leading-relaxed">
                                    Isi formulir berikut dan kami akan segera merespon pesan Anda.
                                </p>

                            </div>

                            {{-- FORM --}}
                            <form class="space-y-7">

                                {{-- NAMA --}}
                                <div>

                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Nama Lengkap
                                    </label>

                                    <input type="text"
                                        class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-5 py-4 focus:outline-none focus:border-emerald-400 focus:bg-white transition duration-300"
                                        placeholder="Masukkan nama lengkap">

                                </div>

                                {{-- EMAIL --}}
                                <div>

                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Email
                                    </label>

                                    <input type="email"
                                        class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-5 py-4 focus:outline-none focus:border-emerald-400 focus:bg-white transition duration-300"
                                        placeholder="Masukkan email">

                                </div>

                                {{-- SUBJEK --}}
                                <div>

                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Subjek
                                    </label>

                                    <input type="text"
                                        class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-5 py-4 focus:outline-none focus:border-emerald-400 focus:bg-white transition duration-300"
                                        placeholder="Masukkan subjek">

                                </div>

                                {{-- PESAN --}}
                                <div>

                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Pesan
                                    </label>

                                    <textarea rows="6"
                                        class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-5 py-4 focus:outline-none focus:border-emerald-400 focus:bg-white transition duration-300 resize-none"
                                        placeholder="Tulis pesan Anda"></textarea>

                                </div>

                                {{-- BUTTON --}}
                                <button type="submit"
                                    class="inline-flex items-center gap-3 bg-emerald-400 hover:bg-emerald-500 text-black font-bold px-8 py-4 rounded-2xl transition duration-300 hover:scale-[1.02]">

                                    Kirim Pesan

                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />

                                    </svg>

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            {{-- MAP --}}
            <div class="mt-24" data-aos="fade-up">

                {{-- HEADER --}}
                <div class="text-center mb-10">

                    <p class="text-sm uppercase tracking-[0.3em] text-emerald-500 font-semibold mb-4">
                        Lokasi Sekolah
                    </p>

                    <h2 class="text-4xl font-black text-gray-900">
                        Temukan Kami
                    </h2>

                </div>

                {{-- MAP --}}
                <div class="overflow-hidden rounded-[2.5rem] border border-gray-200">

                    <iframe src="https://www.google.com/maps?q=MTs+Wahid+Hasyim+Balung&output=embed" width="100%"
                        height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

            </div>

        </div>

    </section>

@endsection
