<a href="{{ route('berita.detail', $berita->slug) }}"
    class="group block py-8 border-b border-gray-200 hover:bg-gray-50 transition duration-300">

    {{-- JUDUL --}}
    <h2
        class="text-2xl font-bold text-gray-900 leading-snug mb-4 group-hover:text-blue-700 transition">

        {{ $berita->judul }}

    </h2>

    {{-- TANGGAL --}}
    <div class="flex items-center text-sm text-gray-500 mb-6">

        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">

            <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />

        </svg>

        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}

    </div>

    {{-- CONTENT --}}
    <div class="grid md:grid-cols-12 gap-6 items-start">

        {{-- GAMBAR --}}
        <div class="md:col-span-4 overflow-hidden rounded-lg">

            <img
                src="{{ $berita->thumbnail }}"
                alt="{{ $berita->judul }}"
                loading="lazy"
                class="w-full h-56 object-cover group-hover:scale-[1.03] transition duration-700">

        </div>

        {{-- KONTEN --}}
        <div class="md:col-span-8 flex flex-col justify-between h-full">

            {{-- ISI --}}
            <p
                class="text-gray-700 leading-relaxed line-clamp-5">

                {{ strip_tags($berita->konten) }}

            </p>

            {{-- BUTTON --}}
            <div class="mt-6">

                <span
                    class="inline-flex items-center text-sm font-semibold text-gray-900">

                    Baca Selengkapnya

                    <span
                        class="ml-2 group-hover:translate-x-1 transition">
                        →
                    </span>

                </span>

            </div>

        </div>

    </div>

</a>