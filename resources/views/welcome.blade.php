<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Responsive Portfolio Website</title>
        <!-- Fonts -->
       <link rel="stylesheet" href="assets('template/assets/fonts/unicons/css/line.css')">


        <link rel="stylesheet" href="../../template/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../../template/assets/css/styles.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])


        @endif
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#home" class="nav_logo">
                    John Doe
                </a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav-item">
                            <a href="#home" class="nav_link active_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav_link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav_link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav_link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav_link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav_link">Contact Me</a>
                        </li>
                    </ul>

                    <div class="nav_close" id="nav-close">
                        <i class="uil uil-times nav_close" id="nav-close"></i>
                    </div>
                </div>

                <div class="nav_btns">
                   
                    <i class="uil uil-moon change_theme" id="theme-button"></i>

                    <div class="nav_toogle" id="nav-toggle">
                        <i class="uil uil-bars"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
       

        <!--==================== FOOTER ====================-->
        <footer class="footer">
          <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">John Doe</h1>
                    <span class="footer_subtitle">FullStack Web developer</span>
                    <p class="footer_subtitle">
                        High level experience in web design,
                        front-end and backend development,
                        producing quality work
                    </p>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Cantact Me</a>
                    </li>
                </ul>
                <div class="footer_socails">
                    <a href="https://www.facebook.com" target="_blank" class="footer_social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com" class="footer_social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; Share Tutorials. All right reserved</p>
          </div>
        </footer>

        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
          <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="../../template/assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="../../template/assets/js/main.js"></script>
    </body>
</html>
