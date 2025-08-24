<!doctype html>
<html lang="en" class=" layout-navbar-fixed layout-wide " dir="ltr" data-skin="default" data-bs-theme="light"
    data-assets-path="../../assets/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Giulia & Esdras</title>

    <meta name="description" content="Casamento Giulia & Esdras" />
    <!-- Canonical SEO -->
    <meta property="og:title" content="Casamento Giulia & Esdras 💕" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Participe deste momento especial com Giulia & Esdras. Veja informações sobre a cerimônia, recepção e lista de presentes." />
    <meta property="og:site_name" content="Casamento Giulia & Esdras" />

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('assets/js/front-config.js') }}"></script>

    @stack('styles')

    <style>
        @font-face {
            font-family: 'CalRoman';
            src: url('{{ asset('assets/vendor/fonts/CalRoman.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        /* * {
            font-family: 'CalRoman', sans-serif !important;
        } */

        /* Layout fixes para navbar fixa e sticky footer */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            padding-top: 80px;
        }

        /* Para páginas internas (não homepage) */
        .page-content {
            min-height: calc(100vh - 160px);
            /* 100vh menos navbar e footer */
        }

        .homepage main {
            padding-top: 0 !important;
        }

        .homepage .layout-navbar {
            position: absolute !important;
            background: transparent !important;
            z-index: 1001;
        }

        .homepage #landingHero {
            position: relative;
            z-index: 1;
        }

        /* Contador styles */
        .contador {
            display: flex;
            gap: 15px;
            font-size: 2rem;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #f9d6d5;
            padding: 20px 25px;
            border-radius: 15px;
            min-width: 100px;
            text-align: center;
            perspective: 800px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .number {
            display: block;
            transition: transform 0.5s ease;
            font-weight: bold;
        }

        .flip {
            transform: rotateX(180deg);
        }

        .label {
            font-size: 0.8rem;
            margin-top: 5px;
            display: block;
            color: #333;
        }

        #contagem,
        #bem-vindos,
        #paragrafo,
        #nossa-historia {
            font-family: 'CalRoman', sans-serif !important;
        }

        #paragrafo {
            text-justify: auto;
        }

        #comments {
            scroll-margin-top: 80px;
        }

        /* Navbar fixed positioning */
        .layout-navbar-fixed .layout-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: white;
            /* Adiciona fundo branco para páginas internas */
        }

        /* Homepage navbar transparente */
        .homepage .layout-navbar {
            background: transparent !important;
            position: absolute !important;
        }
    </style>
</head>

<body class="@if (Request::is('/')) homepage @endif">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>

    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

    <!-- Navbar: Start -->
    @livewire('navbar')
    <!-- Navbar: End -->

    <main>
        <div class="@if (!Request::is('/')) page-content @endif">
            @yield('content')
        </div>
    </main>

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
        <div class="footer-bottom py-3 py-md-5">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-bottom-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <span class="footer-bottom-text"> Made by <a href="https://www.linkedin.com/in/arthurfmacedo/"
                            target="_blank" class="fw-medium text-white">Arthur</a></span>
                </div>
                <div>
                    <a href="https://github.com/arthurvinice" class="me-1 text-white" target="_blank">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.7184 2.19556C6.12757 2.19556 2.40674 5.91639 2.40674 10.5072C2.40674 14.1789 4.78757 17.2947 8.0909 18.3947C8.50674 18.4697 8.65674 18.2139 8.65674 17.9939C8.65674 17.7964 8.65007 17.2731 8.64757 16.5806C6.33507 17.0822 5.84674 15.4656 5.84674 15.4656C5.47007 14.5056 4.92424 14.2497 4.92424 14.2497C4.17007 13.7339 4.98174 13.7456 4.98174 13.7456C5.81674 13.8039 6.25424 14.6022 6.25424 14.6022C6.9959 15.8722 8.2009 15.5056 8.67257 15.2931C8.7484 14.7556 8.96507 14.3889 9.20174 14.1814C7.35674 13.9722 5.41674 13.2589 5.41674 10.0731C5.41674 9.16722 5.74091 8.42389 6.27007 7.84389C6.1859 7.63306 5.89841 6.78722 6.35257 5.64389C6.35257 5.64389 7.05007 5.41972 8.63757 6.49472C9.31557 6.31028 10.0149 6.21614 10.7176 6.21472C11.4202 6.21586 12.1196 6.31001 12.7976 6.49472C14.3859 5.41889 15.0826 5.64389 15.0826 5.64389C15.5367 6.78722 15.2517 7.63306 15.1651 7.84389C15.6984 8.42389 16.0184 9.16639 16.0184 10.0731C16.0184 13.2672 14.0767 13.9689 12.2251 14.1747C12.5209 14.4314 12.7876 14.9381 12.7876 15.7131C12.7876 16.8247 12.7776 17.7214 12.7776 17.9939C12.7776 18.2164 12.9259 18.4747 13.3501 18.3931C16.6517 17.2914 19.0301 14.1781 19.0301 10.5072C19.0301 5.91639 15.3092 2.19556 10.7184 2.19556Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>

    <script>
        function atualizarContador() {
            const dataAlvo = new Date("2026-09-12T00:00:00");
            const agora = new Date();
            let diff = dataAlvo - agora;
            if (diff <= 0) diff = 0;

            let segundos = Math.floor(diff / 1000) % 60;
            let minutos = Math.floor(diff / (1000 * 60)) % 60;
            let horas = Math.floor(diff / (1000 * 60 * 60)) % 24;
            let dias = Math.floor(diff / (1000 * 60 * 60 * 24));

            const unidades = {
                dias,
                horas,
                minutos,
                segundos
            };

            for (const [id, valor] of Object.entries(unidades)) {
                const box = document.getElementById(id);
                if (box) {
                    const numberEl = box.querySelector('.number');
                    if (numberEl && numberEl.textContent != valor.toString().padStart(2, '0')) {
                        numberEl.classList.add('flip');
                        setTimeout(() => {
                            numberEl.textContent = valor.toString().padStart(2, '0');
                            numberEl.classList.remove('flip');
                        }, 250);
                    }
                }
            }
        }

        setInterval(atualizarContador, 1000);
        atualizarContador();
    </script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/front-main.js') }}"></script>
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: false
        });
    </script>
    @stack('scripts')
</body>

</html>
