<nav id="navbar" class="fixed w-full top-0 left-0 z-50 transition-all duration-300 bg-teal-700">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        {{-- LOGO --}}
        <img src="{{ asset('images/logo-konten-maswahas.png') }}" alt="Logo" class="h-10 w-auto object-contain">

        {{-- MENU DESKTOP --}}
        <ul class="hidden md:flex space-x-8 text-white font-medium">
            <li><a href="/" class="nav-link">Home</a></li>
            <li class="relative" x-data="{ open: false }">

                {{-- TRIGGER --}}
                <button @click="open = !open" class="nav-link flex items-center gap-1">
                    Profil
                    <span class="text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''">▼</span>
                </button>

                {{-- DROPDOWN --}}
                <div x-show="open" @click.outside="open = false" x-transition
                    class="absolute left-0 top-full mt-3 w-52 bg-white text-gray-700 shadow-lg border border-gray-100">

                    <a href="/profil/sejarah" class="block px-4 py-2 hover:bg-gray-100" @click="open=false">Sejarah</a>
                    <a href="/profil/visi-misi" class="block px-4 py-2 hover:bg-gray-100" @click="open=false">Visi &
                        Misi</a>
                    <a href="/profil/guru" class="block px-4 py-2 hover:bg-gray-100" @click="open=false">Guru &
                        Staff</a>
                    <a href="/profil/prestasi" class="block px-4 py-2 hover:bg-gray-100"
                        @click="open=false">Prestasi</a>
                    <a href="/profil/fasilitas" class="block px-4 py-2 hover:bg-gray-100"
                        @click="open=false">Fasilitas</a>
                    <a href="/profil/akreditasi" class="block px-4 py-2 hover:bg-gray-100"
                        @click="open=false">Akreditasi</a>

                </div>

            </li>
            <li><a href="/program" class="nav-link">Program</a></li>
            <li><a href="/kontak" class="nav-link">Kontak</a></li>
        </ul>

        {{-- HAMBURGER --}}
        <button id="menu-btn" class="md:hidden text-white text-2xl focus:outline-none">
            ☰
        </button>

    </div>

    {{-- MOBILE MENU --}}
    <div id="mobile-menu" class="hidden md:hidden bg-teal-700 text-white px-6 pb-4 shadow-inner">
        <ul class="space-y-4 pt-4">
            <li><a href="/" class="block hover:text-teal-200 transition">Home</a></li>
            <li><a href="/profil" class="block hover:text-teal-200 transition">Profil</a></li>
            <li><a href="/program" class="block hover:text-teal-200 transition">Program</a></li>
            <li><a href="/kontak" class="block hover:text-teal-200 transition">Kontak</a></li>
        </ul>
    </div>
</nav>

{{-- STYLE TAMBAHAN --}}
<style>
    .nav-link {
        position: relative;
        padding-bottom: 5px;
        transition: 0.3s;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        width: 0%;
        height: 2px;
        left: 0;
        bottom: 0;
        background-color: #2dd4bf;
        /* Teal light accent */
        transition: 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }
</style>

{{-- SCRIPT --}}
<script>
    const navbar = document.getElementById('navbar');
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    let lastScrollTop = 0;

    // SCROLL EFFECT
    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // 1. Efek Shadow saat scroll ke bawah sedikit
        if (currentScroll > 50) {
            navbar.classList.add('shadow-lg');
        } else {
            navbar.classList.remove('shadow-lg');
        }

        // 2. Efek Hide & Show Navbar (Scroll Up / Scroll Down)
        if (currentScroll > lastScrollTop && currentScroll > 100) {
            // Scroll ke bawah - sembunyikan navbar (naik ke atas layar)
            navbar.style.transform = 'translateY(-100%)';
        } else {
            // Scroll ke atas - tampilkan navbar (posisi normal)
            navbar.style.transform = 'translateY(0)';
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Mencegah nilai negatif
    });

    // TOGGLE MOBILE MENU
    menuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
</script>
