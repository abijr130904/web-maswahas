<nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-teal-700/95 backdrop-blur-md">

    <div class="container mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            {{-- LOGO --}}
            <a href="/"
               class="flex items-center gap-3 hover:opacity-90 transition duration-300">

                <img src="{{ asset('images/logo-konten-maswahas.png') }}"
                     alt="Logo"
                     class="h-11 w-auto object-contain">

            </a>

            {{-- MENU DESKTOP --}}
            <ul class="hidden md:flex items-center gap-8 text-white font-medium">

                {{-- HOME --}}
                <li class="flex items-center h-20">

                    <a href="/"
                       class="nav-link {{ request()->is('/') ? 'active-nav' : '' }}">

                        Home

                    </a>

                </li>

                {{-- DROPDOWN PROFIL --}}
                <li class="relative flex items-center h-20"
                    x-data="{ open: false }">

                    {{-- BUTTON --}}
                    <button type="button"
                            @click="open = !open"
                            @click.outside="open = false"
                            class="nav-link flex items-center gap-2 h-10">

                        <span>Profil</span>

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 transition duration-300"
                             :class="open ? 'rotate-180 text-emerald-300' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>

                        </svg>

                    </button>

                    {{-- DROPDOWN --}}
                    <div x-show="open"
                         x-cloak
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-3 scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                         class="absolute top-full left-0 mt-2 w-64 rounded-2xl overflow-hidden border border-white/10 bg-white/95 backdrop-blur-xl text-gray-700">

                        <div class="p-3">

                            <a href="/profil/sejarah"
                               class="dropdown-item">
                                Sejarah
                            </a>

                            <a href="/profil/visi-misi"
                               class="dropdown-item">
                                Visi & Misi
                            </a>

                            <a href="/profil/guru"
                               class="dropdown-item">
                                Guru & Staff
                            </a>

                            <a href="/profil/prestasi"
                               class="dropdown-item">
                                Prestasi
                            </a>

                            <a href="/profil/fasilitas"
                               class="dropdown-item">
                                Fasilitas
                            </a>

                            <a href="/profil/akreditasi"
                               class="dropdown-item">
                                Akreditasi
                            </a>

                            <a href="/mitra"
                               class="dropdown-item">
                                Mitra Sekolah
                            </a>

                        </div>

                    </div>

                </li>

                {{-- PROGRAM --}}
                <li class="flex items-center h-20">

                    <a href="/program"
                       class="nav-link {{ request()->is('program') ? 'active-nav' : '' }}">

                        Program

                    </a>

                </li>

                {{-- MITRA --}}
                <li class="flex items-center h-20">

                    <a href="/mitra"
                       class="nav-link {{ request()->is('mitra') ? 'active-nav' : '' }}">

                        Mitra

                    </a>

                </li>

                {{-- KONTAK --}}
                <li class="flex items-center h-20">

                    <a href="/kontak"
                       class="nav-link {{ request()->is('kontak') ? 'active-nav' : '' }}">

                        Kontak

                    </a>

                </li>

            </ul>

            {{-- MOBILE BUTTON --}}
            <button id="menu-btn"
                    class="md:hidden text-white">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-8 h-8"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

    </div>

    {{-- MOBILE MENU --}}
    <div id="mobile-menu"
         class="hidden md:hidden bg-teal-700 border-t border-white/10 overflow-hidden">

        <div class="px-6 py-5 space-y-4 text-white">

            <a href="/" class="mobile-link">
                Home
            </a>

            <a href="/profil/sejarah" class="mobile-link">
                Sejarah
            </a>

            <a href="/profil/visi-misi" class="mobile-link">
                Visi & Misi
            </a>

            <a href="/profil/guru" class="mobile-link">
                Guru & Staff
            </a>

            <a href="/profil/prestasi" class="mobile-link">
                Prestasi
            </a>

            <a href="/profil/fasilitas" class="mobile-link">
                Fasilitas
            </a>

            <a href="/profil/akreditasi" class="mobile-link">
                Akreditasi
            </a>

            <a href="/mitra" class="mobile-link">
                Mitra
            </a>

            <a href="/program" class="mobile-link">
                Program
            </a>

            <a href="/kontak" class="mobile-link">
                Kontak
            </a>

        </div>

    </div>

</nav>

{{-- PAGE TRANSITION --}}
<div id="page-transition"
     class="fixed inset-0 bg-white z-[9999] pointer-events-none opacity-0 transition-opacity duration-500">
</div>

{{-- STYLE --}}
<style>

    [x-cloak]{
        display:none !important;
    }

    html{
        scroll-behavior:smooth;
    }

    body{
        animation:fadePage .5s ease;
    }

    @keyframes fadePage{

        from{
            opacity:0;
            transform:translateY(8px);
        }

        to{
            opacity:1;
            transform:translateY(0);
        }

    }

    .nav-link{

        position:relative;
        display:flex;
        align-items:center;
        height:40px;
        transition:.3s;
        color:white;

    }

    .nav-link:hover{
        color:#a7f3d0;
    }

    .nav-link::after{

        content:'';
        position:absolute;
        left:0;
        bottom:0;
        width:0%;
        height:2px;
        border-radius:999px;
        background:#34d399;
        transition:.35s;

    }

    .nav-link:hover::after,
    .active-nav::after{

        width:100%;

    }

    .active-nav{
        color:#a7f3d0;
    }

    .dropdown-item{

        display:block;
        padding:12px 16px;
        border-radius:14px;
        transition:.25s;
        font-size:15px;

    }

    .dropdown-item:hover{

        background:#ecfdf5;
        color:#10b981;
        transform:translateX(5px);

    }

    .mobile-link{

        display:block;
        transition:.3s;

    }

    .mobile-link:hover{

        color:#a7f3d0;
        transform:translateX(5px);

    }

</style>

{{-- SCRIPT --}}
<script>

    const navbar = document.getElementById('navbar');
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const transitionLayer = document.getElementById('page-transition');

    let lastScrollTop = 0;

    // NAVBAR SCROLL
    window.addEventListener('scroll', () => {

        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > 50) {

            navbar.classList.add('shadow-xl');

        } else {

            navbar.classList.remove('shadow-xl');

        }

        if (currentScroll > lastScrollTop && currentScroll > 100) {

            navbar.style.transform = 'translateY(-100%)';

        } else {

            navbar.style.transform = 'translateY(0)';

        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;

    });

    // MOBILE MENU
    menuBtn.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

    });

    // PAGE TRANSITION
    document.querySelectorAll('a[href]').forEach(link => {

        const href = link.getAttribute('href');

        if (
            href.startsWith('#') ||
            href.startsWith('javascript:') ||
            link.hasAttribute('target')
        ) return;

        link.addEventListener('click', function(e){

            e.preventDefault();

            transitionLayer.classList.remove('opacity-0');
            transitionLayer.classList.add('opacity-100');

            setTimeout(() => {

                window.location.href = href;

            }, 500);

        });

    });

    // REMOVE TRANSITION AFTER LOAD
    window.addEventListener('pageshow', () => {

        transitionLayer.classList.remove('opacity-100');
        transitionLayer.classList.add('opacity-0');

    });

</script>