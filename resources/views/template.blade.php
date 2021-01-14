<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kick Off 2021</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('public/css/animate.css') }}">
    <link rel="shortcut icon" href="{{ url('public/images/Santander.svg') }}" title="Favicon"/>
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/style.v1.css') }}">
    @yield('css')
    <script src="https://kit.fontawesome.com/f8cbe70404.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light animate__animated animate__fadeInDown {{ !request()->is('/') ? 'scrolled awake' : '' }}" id="ftco-navbar">
    <div class="container">
        <!--Logo that is shown on the banner-->
        <img src="<?= url('public/images/Santanderrojo.svg') ?>" class="banner-logo" alt="Landing Page">
        <!--End of Banner Logo-->
        <!--<a class="navbar-brand" href="index.html">a<span>v</span>o</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            <!--<span class="oi oi-menu"></span> Menu-->
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ request()->is('/') ? '#new' : route('homepage') }}" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="#new1" class="nav-link">Bienvenida</a></li>
                <li class="nav-item"><a href="#speakers" class="nav-link">Presentadores</a></li>
                <li class="nav-item"><a href="#new3" class="nav-link">Agenda</a></li>
                @if (auth()->user()->acl_level === 100)
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-user">
                            <a class="dropdown-item" href="{{ route('chat') }}">Chat</a>
                            <a class="dropdown-item" href="{{ route('configuration') }}">Configuración</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Salir</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="ftco-footer ftco-section">
    <div class="container">
        <!--<div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Santander</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Community</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Team</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Santander 2021
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ url('public/js/jquery.min.js') }}"></script>
<script src="{{ url('public/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ url('public/js/popper.min.js') }}"></script>
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('public/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('public/js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('public/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ url('public/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ url('public/js/google-map.js') }}"></script>
@yield('javascripts')
</body>
</html>
