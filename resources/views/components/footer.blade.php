<footer class="bg-gray-900 text-gray-300 mt-16 border-t border-gray-800">

    <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

        {{-- KOLOM 1: LOGO + DESKRIPSI --}}
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            
            <img src="{{ asset('images/logo-maswahas.png') }}" alt="Logo MA Wahid Hasyim" class="w-20 h-20 object-contain mb-4">

            <p class="text-sm leading-relaxed max-w-sm">
                MA WAHID HASYIM BALUNG berkomitmen menciptakan generasi unggul, berkarakter,
                dan siap menghadapi tantangan global.
            </p>

            <p class="text-sm text-teal-400 mt-4 italic font-medium">
                "Maju Bersama, Hebat Semua."
            </p>

        </div>

        {{-- KOLOM 2: TENTANG + SOSIAL --}}
        <div class="text-center md:text-left">
            <h2 class="text-white font-semibold text-lg mb-4">Tentang Kami</h2>

            <ul class="space-y-2 text-sm mb-6">
                <li><a href="/profil" class="hover:text-teal-400 transition-colors duration-200">Profil Sekolah</a></li>
                <li><a href="/visi-misi" class="hover:text-teal-400 transition-colors duration-200">Visi & Misi</a></li>
                <li><a href="/guru" class="hover:text-teal-400 transition-colors duration-200">Guru & Staff</a></li>
                <li><a href="/galeri" class="hover:text-teal-400 transition-colors duration-200">Galeri</a></li>
                <li><a href="/kontak" class="hover:text-teal-400 transition-colors duration-200">Kontak</a></li>
            </ul>

            <h3 class="text-white font-semibold text-sm mb-3">Ikuti Kami</h3>
            <div class="flex justify-center md:justify-start gap-3">
                <a href="#" class="bg-gray-800 hover:bg-teal-600 text-white w-9 h-9 flex items-center justify-center rounded-md transition duration-200" title="Facebook">
                    📘
                </a>
                <a href="#" class="bg-gray-800 hover:bg-teal-600 text-white w-9 h-9 flex items-center justify-center rounded-md transition duration-200" title="Instagram">
                    📷
                </a>
                <a href="#" class="bg-gray-800 hover:bg-teal-600 text-white w-9 h-9 flex items-center justify-center rounded-md transition duration-200" title="YouTube">
                    ▶️
                </a>
                <a href="#" class="bg-gray-800 hover:bg-teal-600 text-white w-9 h-9 flex items-center justify-center rounded-md transition duration-200" title="Website">
                    🌐
                </a>
            </div>
        </div>

        {{-- KOLOM 3: ALAMAT + MAP --}}
        <div class="text-center md:text-left">
            <h2 class="text-white font-semibold text-lg mb-4">Alamat</h2>

            <p class="text-sm mb-4 leading-relaxed">
                Jl. PB. Sudirman No. 126 <br>
                Kec. Balung, Kab. Jember <br>
                Jawa Timur, 68161
            </p>

            <div class="w-full h-48 md:h-56 rounded-lg overflow-hidden border border-gray-700 shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.749079555123!2d113.59368387499708!3d-8.293405791771199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd696a4a6b1ffff%3A0x6b4f71a0673998f9!2sSMA%20Negeri%201%20Balung!5e0!3m2!1sen!2sid!4v1714525000000"
                    width="100%" height="100%" style="border:0;" loading="lazy">
                </iframe>
            </div>
        </div>

    </div>

    {{-- BOTTOM --}}
    <div class="border-t border-gray-800 text-center text-xs md:text-sm py-5 bg-gray-950 text-gray-500">
        &copy; {{ date('Y') }} MA WAHID HASYIM BALUNG. All rights reserved.
    </div>

</footer>