<div class="space-y-6 sticky top-24">

    {{-- ================= PENGUMUMAN ================= --}}
    <div class="bg-white border border-gray-200">

        <div class="border-b px-5 py-3">
            <h3 class="text-xs font-semibold text-gray-600 uppercase">
                Pengumuman
            </h3>
        </div>

        <div class="p-4 space-y-3">

            @foreach ([
                ['judul' => 'PPDB 2026 Dibuka', 'tanggal' => '1 Mei 2026'],
                ['judul' => 'Libur Semester', 'tanggal' => '10 Juni 2026'],
                ['judul' => 'Ujian Sekolah', 'tanggal' => '15 Juni 2026'],
            ] as $item)

                <div class="border-b pb-3">
                    <p class="text-sm text-gray-800 font-medium">
                        {{ $item['judul'] }}
                    </p>
                    <p class="text-xs text-gray-500">
                        {{ $item['tanggal'] }}
                    </p>
                </div>

            @endforeach

        </div>
    </div>

    {{-- ================= STATISTIK ================= --}}
    <div class="bg-white border border-gray-200">

        <div class="border-b px-5 py-3">
            <h3 class="text-xs font-semibold text-gray-600 uppercase">
                Statistik Sekolah
            </h3>
        </div>

        <div class="p-5 space-y-4">

            @foreach ([
                ['kelas' => 'Kelas X', 'persen' => 90],
                ['kelas' => 'Kelas XI', 'persen' => 85],
                ['kelas' => 'Kelas XII', 'persen' => 80],
            ] as $data)

                <div>
                    <div class="flex justify-between text-xs text-gray-600 mb-1">
                        <span>{{ $data['kelas'] }}</span>
                        <span>{{ $data['persen'] }}%</span>
                    </div>

                    <div class="w-full bg-gray-200 h-2 rounded overflow-hidden">
                        <div class="bg-gray-700 h-2"
                             style="width: {{ $data['persen'] }}%"></div>
                    </div>
                </div>

            @endforeach

            <div class="grid grid-cols-2 gap-3 mt-4">

                <div class="bg-gray-900 text-white p-3 text-center">
                    <p class="text-xs">Siswa</p>
                    <p class="text-lg font-semibold">1,024</p>
                </div>

                <div class="bg-gray-100 p-3 text-center">
                    <p class="text-xs text-gray-600">Guru</p>
                    <p class="text-lg font-semibold text-gray-800">86</p>
                </div>

            </div>

        </div>
    </div>

</div>