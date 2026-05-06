<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Sekolah')</title>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

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
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* smooth navbar hide */
        #navbar {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="pt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* =====================
               AOS INIT (lebih smooth)
            ====================== */
            AOS.init({
                duration: 800,
                once: true,
                offset: 120,
                easing: 'ease-in-out'
            });

            /* =====================
               FEATHER ICON
            ====================== */
            feather.replace();

            /* =====================
               NAVBAR SCROLL EFFECT
            ====================== */
            const navbar = document.getElementById('navbar');
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            let lastScrollTop = 0;

            window.addEventListener('scroll', function () {
                let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                // shadow effect
                if (currentScroll > 50) {
                    navbar.classList.add('shadow-md');
                } else {
                    navbar.classList.remove('shadow-md');
                }

                // hide/show navbar
                if (currentScroll > lastScrollTop && currentScroll > 120) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }

                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
            });

            /* =====================
               MOBILE MENU (smooth)
            ====================== */
            if (menuBtn) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }

        });
    </script>

</body>

</html>