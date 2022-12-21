<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Media Exhibition Organization</title>

    <link href="{{ URL::asset('static/plugin/font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/plugin/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/plugin/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/plugin/magnific/magnific-popup.css') }}" rel="stylesheet">
    @yield('stylesheet')
    <link href="{{ URL::asset('static/css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/css/color/default.css') }}" rel="stylesheet" id="color_theme">
</head>

<body data-spy="scroll" data-target="#navbarRyan" data-offset="98">
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <header>
        <nav class="navbar header-nav fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">TMEO <span class="theme-bg"></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRyan"
                    aria-controls="navbarRyan" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarRyan">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#aboutus">About Us</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
                        <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <span>TMEO <span></span></span>
            </div>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-codepen"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
            </ul>
            <p class="copyright">© 2018 Ryan. All Rights Reserved</p>
        </div>
    </footer>



    <script src="{{ URL::asset('static/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <script src="{{ URL::asset('static/plugin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/particles/particles.min.js') }}"></script>
    <script src="{{ URL::asset('static/plugin/particles/particles-app.js') }}"></script>

    @yield('scripts')

    <script src="{{ URL::asset('static/js/custom.js') }}"></script>

</body>



</html>
