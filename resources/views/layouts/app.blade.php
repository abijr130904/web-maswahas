<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Website Sekolah')
    </title>

    {{-- TAILWIND --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {

                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },

                    colors: {
                        primary: '#111827',
                    }

                }
            }
        }
    </script>

    {{-- ALPINE --}}
    <script defer
            src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js">
    </script>

    {{-- FONT --}}
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
          rel="stylesheet">

    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #111827;
        }

        /*
        |--------------------------------------------------------------------------
        | NAVBAR
        |--------------------------------------------------------------------------
        */

        #navbar {
            transition:
                transform 0.4s ease,
                background-color 0.3s ease,
                box-shadow 0.3s ease;
        }

        .navbar-scrolled {
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        }

        /*
        |--------------------------------------------------------------------------
        | NAV LINK
        |--------------------------------------------------------------------------
        */

        .nav-link {
            position: relative;
            padding-bottom: 6px;
            transition: color 0.3s ease;
        }

        .nav-link::after {

            content: "";

            position: absolute;

            left: 0;
            bottom: 0;

            width: 0%;
            height: 1.5px;

            background: #111827;

            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /*
        |--------------------------------------------------------------------------
        | HERO SLIDER
        |--------------------------------------------------------------------------
        */

        .slide {

            position: absolute;

            inset: 0;

            opacity: 0;

            background-size: cover;
            background-position: center;

            transform: scale(1.05);

            transition:
                opacity 1.2s ease,
                transform 7s ease;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        /*
        |--------------------------------------------------------------------------
        | DOT
        |--------------------------------------------------------------------------
        */

        .dot {

            width: 9px;
            height: 9px;

            background: rgba(255,255,255,0.5);

            cursor: pointer;

            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.3);
        }

        /*
        |--------------------------------------------------------------------------
        | CUSTOM CONTAINER
        |--------------------------------------------------------------------------
        */

        .container-custom {
            width: 100%;
            max-width: 1280px;
            margin-inline: auto;
            padding-inline: 1.5rem;
        }

    </style>

</head>

<body class="antialiased">

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- MAIN --}}
    <main class="overflow-hidden">

        @yield('content')

    </main>

    {{-- FOOTER --}}
    @include('components.footer')

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- FEATHER ICON --}}
    <script src="https://unpkg.com/feather-icons"></script>

    <script>

        document.addEventListener('DOMContentLoaded', () => {

            /*
            |--------------------------------------------------------------------------
            | AOS
            |--------------------------------------------------------------------------
            */

            AOS.init({

                duration: 900,
                once: true,
                offset: 80,
                easing: 'ease-out-cubic',

            });

            /*
            |--------------------------------------------------------------------------
            | FEATHER
            |--------------------------------------------------------------------------
            */

            feather.replace();

            /*
            |--------------------------------------------------------------------------
            | NAVBAR EFFECT
            |--------------------------------------------------------------------------
            */

            const navbar = document.getElementById('navbar');

            let lastScroll = 0;

            window.addEventListener('scroll', () => {

                const currentScroll = window.pageYOffset;

                /*
                |--------------------------------------------------------------------------
                | BACKGROUND
                |--------------------------------------------------------------------------
                */

                if (currentScroll > 30) {

                    navbar.classList.add('navbar-scrolled');

                } else {

                    navbar.classList.remove('navbar-scrolled');

                }

                /*
                |--------------------------------------------------------------------------
                | HIDE NAVBAR
                |--------------------------------------------------------------------------
                */

                if (currentScroll > lastScroll && currentScroll > 120) {

                    navbar.style.transform = 'translateY(-100%)';

                } else {

                    navbar.style.transform = 'translateY(0)';

                }

                lastScroll = currentScroll;

            });

            /*
            |--------------------------------------------------------------------------
            | MOBILE MENU
            |--------------------------------------------------------------------------
            */

            const menuBtn = document.getElementById('menu-btn');

            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {

                menuBtn.addEventListener('click', () => {

                    mobileMenu.classList.toggle('hidden');

                });

            }

        });

    </script>

</body>

</html>