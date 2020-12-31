@extends('template')

@section('javascripts')
    <script src="{{ url('public/js/main.js') }}"></script>
@endsection

@section('content')
    <div class="nomove">
        <section class="hero-wrap degree-right js-fullheight" id="new">
            <div class="home-slider js-fullheight owl-carousel">
            <!-- <div class="slider-item js-fullheight" style="background-image:url('{{ url('public/images/bg_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="absolute">
                                <h4 class="number" data-number="400">0</h4>
                                <p>Más de 100,000 cuentahabientes</p>
                            </div>
                            <div class="text">
                                <h1 class="mb-4">conecta2 &amp; Kick-Off BEI 2021</h1>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Start Project</a></p>
                            </div>
                        </div>
                        <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
            </div>-->

                <div class="slider-item js-fullheight" style="background-image:url('{{ url('public/images/bg_2.jpg') }}');">
                    <!--<div class="overlay"></div>-->
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center">
                            <div class="col-md-12 ftco-animate">
                                <!--<div class="absolute">
                                    <h4 class="number" data-number="21">0</h4>
                                    <p>Years of Experienced</p>
                                </div>-->
                                <div class="text">
                                    <h1 class="mb-4">Click para comenzar</h1>
                                    <!--<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
                                    <p class="mb-0"><a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                                            <span class="fa fa-play"></span>
                                        </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <section class="ftco-section" id="new1">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">About us</h2>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-vector"></span></div>
                        <div class="media-body py-md-4">
                            <h3>UI/UX Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-web-programming"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Web Development</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-layer"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Product Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-coding"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Mobile Apps</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-zoom"></span></div>
                        <div class="media-body py-md-4">
                            <h3>SEO</h3>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row wrap-about my-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last ftco-animate d-flex">
                            <div class="img w-100" style="background-image: url('{{ url('public/images/about.jpg') }}');"></div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="text text-md-right">
                                <h3>Welcome to AVO A Personal Porfolio Web Agency</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into
                                    your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="text">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and
                            supplies
                            it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <!--<p><a href="#" class="btn btn-primary">View all projects</a></p>-->
                    </div>
                </div>
            </div>
            <!--<div class="row mt-5">
                <div class="col-md-4">
                    <div class="services-2 d-flex ftco-animate">
                        <span>01</span>
                        <div class="text">
                            <h3>Search Engine Optimization</h3>
                            <p>Far far away, behind the word mountains</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-2 d-flex ftco-animate">
                        <span>02</span>
                        <div class="text">
                            <h3>Search Engine Optimization</h3>
                            <p>Far far away, behind the word mountains</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-2 d-flex ftco-animate">
                        <span>03</span>
                        <div class="text">
                            <h3>Search Engine Optimization</h3>
                            <p>Far far away, behind the word mountains</p>
                        </div>
                    </div>
                </div>
            </div>-->


        </div>
    </section>
    <!--
        <section class="ftco-section ftco-portfolio bg-light">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">Our Works</h2>
                </div>
            </div>

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 portfolio-wrap mt-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 img" style="background-image: url(images/work-1.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc">
                                            <div class="top">
                                                <span class="subheading">Web Design</span>
                                                <h2 class="mb-2"><a href="work.html">Cassette tape</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="icon d-flex align-items-center mb-4">
                                                    <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                                    <div class="position pl-3">
                                                        <h4 class="mb-0">Jamie Jonson</h4>
                                                        <span>avo.com</span>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 order-md-last img" style="background-image: url(images/work-2.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pr-md-5 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc text-md-right">
                                            <div class="top">
                                                <span class="subheading">Application</span>
                                                <h2 class="mb-2"><a href="work.html">Miniwall Clock</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="d-flex w-100">
                                                    <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                        <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                        <div class="position pl-3 text-left">
                                                            <h4 class="mb-0">Jamie Jonson</h4>
                                                            <span>avo.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 img" style="background-image: url(images/work-3.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc">
                                            <div class="top">
                                                <span class="subheading">UI/UX Design</span>
                                                <h2 class="mb-2"><a href="work.html">Avo Portfolio Agency</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="icon d-flex align-items-center mb-4">
                                                    <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                                                    <div class="position pl-3">
                                                        <h4 class="mb-0">Jamie Jonson</h4>
                                                        <span>avo.com</span>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 order-md-last img" style="background-image: url(images/work-4.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pr-md-5 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc text-md-right">
                                            <div class="top">
                                                <span class="subheading">Web Development</span>
                                                <h2 class="mb-2"><a href="work.html">Hand Writing</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="d-flex w-100">
                                                    <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                        <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                        <div class="position pl-3 text-left">
                                                            <h4 class="mb-0">Jamie Jonson</h4>
                                                            <span>avo.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 img" style="background-image: url(images/work-5.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc">
                                            <div class="top">
                                                <span class="subheading">Illustration</span>
                                                <h2 class="mb-2"><a href="work.html">Keyboard</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="icon d-flex align-items-center mb-4">
                                                    <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                    <div class="position pl-3">
                                                        <h4 class="mb-0">Jamie Jonson</h4>
                                                        <span>avo.com</span>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 order-md-last img" style="background-image: url(images/work-6.jpg);">

                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pr-md-5 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc text-md-right">
                                            <div class="top">
                                                <span class="subheading">Web Development</span>
                                                <h2 class="mb-2"><a href="work.html">Spiral</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="d-flex w-100">
                                                    <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                        <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                        <div class="position pl-3 text-left">
                                                            <h4 class="mb-0">Jamie Jonson</h4>
                                                            <span>avo.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="degree-left"></div>
        </section>
    -->
    <section class="ftco-section testimony-section" id="new2">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Speakers</h2>
                </div>
            </div>
            <div class="row ftco-animate mb-4">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ url('public/images/person_1.jpg') }}')"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ url('public/images/person_2.jpg') }}')"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ url('public/images/person_3.jpg') }}')"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ url('public/images/person_1.jpg') }}')"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{ url('public/images/person_2.jpg') }}')"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="intro p-md-4 py-md-5 p-2 rounded img" style="background-image: url('{{ url('public/images/bg_1.jpg') }}');">
                        <div class="col-md-6 ftco-animate">
                            <span>Get Started</span>
                            <h2>Fill in the brief and get the project estimate</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Get started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="new3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Kick Off BEI 2021</h2>
                </div>
            </div>
        <!--<div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ url('public/images/image_1.jpg') }}');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ url('public/images/image_2.jpg') }}');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ url('public/images/image_3.jpg') }}');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ url('public/images/image_4.jpg') }}');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
            </div>
        </div>-->
        </div>
        <div class="degree-left-footer"></div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="new4">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Contacto</h2>
                </div>
            </div>
        </div>
    </section>

    @if (auth()->user()->acl_level < 100)
        <div class="btn-opc">
            <img class="img-opc" src="{{ url('public/images/icons/conversacion.svg') }}" alt="">
        </div>
        <div class="btn-opc2 d-none">
            <img class="img-opc" src="{{ url('public/images/icons/respuesta.svg') }}" alt="">
        </div>
    @endif

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    @if (auth()->user()->acl_level < 100)
        <div class="chat-popup" id="chat-popup" data-sync="{{ route('read_messages') }}" data-sender="{{ auth()->user()->id }}" data-from="0" data-to="{{ date('U') }}">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="chat-container"></div>
            <div class="mt-1 chat-control">
                <form action="{{ route('send_message') }}" class="form-container">
                    <input placeholder="Ingrese su mensaje.." name="message" required></textarea>
                    <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="response-popup" id="response-popup">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="/receiver_sync.php" class="form-container">
                <div class="response-container">
                    <h4>Respuestas</h4>
                    <div class="response-row">
                        <div>1:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>2:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>3:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn" data-mark="1">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>4:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>5:</div>
                        <div>
                            <button type="button" data-mark="1" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                </div>
                <div class="mt-1 chat-control">
                    <button type="submit" class="btn w-100">Enviar</button>
                </div>
            </form>

            <div class="alert alert-success" style="display: none;">
                <strong>Gracias por comunicarse!</strong> Hemos registrado su pregunta.
            </div>
        </div>
    @endif
@endsection
