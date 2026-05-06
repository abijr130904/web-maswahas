@extends('layouts.app')

@section('title', 'Sejarah Sekolah')

@section('content')

    {{-- HEADER --}}
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-semibold text-gray-800">
                Sejarah Sekolah
            </h1>
            <p class="text-gray-500 mt-2">
                Perjalanan dan perkembangan sekolah dari masa ke masa
            </p>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="py-14">
        <div class="container mx-auto px-6 max-w-4xl">

            {{-- GAMBAR --}}
            <img src="https://picsum.photos/800/400" class="w-full h-64 object-cover rounded mb-8" alt="Gedung Sekolah">

            {{-- DESKRIPSI --}}
            <div class="space-y-5 text-gray-600 leading-relaxed">
                <div class="space-y-6 text-gray-600 leading-relaxed">

                    <p>
                        Yayasan Pendidikan Islam Abdul Wahid Hasyim Balung berdiri pada tahun
                        <span class="font-semibold text-gray-800">1957</span>.
                        Berawal pada tahun <span class="font-semibold text-gray-800">1954</span>
                        dimana para ulama kota Balung mendirikan majlis ta’lim yang kegiatannya
                        dilaksanakan di rumah warga.
                    </p>

                    <p>
                        Seiring perkembangan, majlis ta’lim tersebut berkembang menjadi madrasah diniyah
                        yang diselenggarakan di rumah salah satu warga NU Balung. Pada tahun
                        <span class="font-semibold text-gray-800">1956</span>, madrasah diniyah ini
                        dikembangkan menjadi Madrasah Ibtidaiyah NU dengan kurikulum pondok pesantren,
                        yang tenaga pengajarnya sebagian besar berasal dari pengurus MWC NU Balung.
                    </p>

                    <p>
                        Madrasah Aliyah Wahid Hasyim yang berdiri sejak
                        <span class="font-semibold text-gray-800">14 Juni 1978</span>
                        tercatat sebagai sekolah berstatus terdaftar berdasarkan keputusan
                        Kepala Kantor Wilayah Departemen Agama Provinsi Jawa Timur
                        No. L.m./3/283-c/1983 pada tanggal
                        <span class="font-semibold text-gray-800">12 Agustus 1983</span>,
                        dengan nomor statistik madrasah 31.2.35.09.13.117.
                    </p>

                    <p>
                        Selanjutnya, berdasarkan keputusan Pimpinan Wilayah Lembaga Pendidikan
                        Ma’arif Jawa Timur pada tanggal
                        <span class="font-semibold text-gray-800">20 Mei 1986</span>,
                        serta Surat Keputusan Pimpinan Pusat LP Ma’arif No. PP/202/A-8/VII/1973
                        tanggal 18 Juli 1973, Madrasah Aliyah Wahid Hasyim dinyatakan terdaftar
                        sebagai anggota lembaga pendidikan Ma’arif wilayah Jawa Timur dengan nomor:
                        B-403306.
                    </p>

                    <p>
                        Setelah melalui proses akreditasi, Madrasah Aliyah Wahid Hasyim memperoleh
                        status <span class="font-semibold text-gray-800">“Diakui”</span> berdasarkan
                        keputusan Direktur Jenderal Pembinaan Kelembagaan Agama Islam Departemen Agama RI
                        nomor E.IV/29/1994 pada tanggal
                        <span class="font-semibold text-gray-800">24 Maret 1994</span>,
                        dengan nomor Piagam Akreditasi B/E.IV/MA/0198/1994.
                    </p>

                </div>
            </div>

            {{-- GARIS --}}
            <div class="h-[2px] w-12 bg-gray-300 my-10"></div>

            {{-- TIMELINE --}}
            <h2 class="text-xl font-semibold text-gray-800 mb-6">
                Perkembangan Sekolah
            </h2>

            <div class="space-y-8">

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
                'text' => 'Mendapat status "Diakui" dari Departemen Agama RI.',
            ],
        ] as $item)
                    <div class="flex gap-5 group">

                        {{-- GARIS --}}
                        <div class="flex flex-col items-center">
                            <div class="w-3 h-3 bg-gray-700 rounded-full mt-2 group-hover:bg-teal-600 transition"></div>
                            <div class="w-[1px] flex-1 bg-gray-300"></div>
                        </div>

                        {{-- ISI --}}
                        <div class="pb-6">
                            <p class="text-sm font-semibold text-teal-700">
                                {{ $item['tahun'] }}
                            </p>

                            <h3 class="text-base font-semibold text-gray-800">
                                {{ $item['judul'] }}
                            </h3>

                            <p class="text-sm text-gray-600 mt-1 leading-relaxed">
                                {{ $item['text'] }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

@endsection
