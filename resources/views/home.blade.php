@extends('template')

@section('css')
    <link rel="stylesheet" href="{{ url('public/css/agenda.scss') }}">
@endsection

@section('javascripts')
    <script src="{{ url('public/js/main.js') }}"></script>
@endsection

@section('content')
    <div class="nomove">
        <section class="hero-wrap degree-right js-fullheight" id="new">
            <div class="fondo">
                <div class="slider-item js-fullheight">

                    <div class="row no-gutters slider-text js-fullheight align-items-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text aliniacion">
                                <h1 class="mb-4 edittext">Click para ver el evento</h1>
                                <!--<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
                                <p class="mb-0"><a href="{{ $configuration->video_url }}" class="playbutton img-video popup-vimeo d-flex align-items-center justify-content-center" data-autoplay="true" data-vbtype="video">
                                        <span class="fa fa-play" style="color: black;"></span>
                                    </a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <section class="ftco-section animated fadeInDown" id="new1">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">About us</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 w-100 services d-block text-left">
                        <div class="media-body py-md-3">
                            <h1 class="mb-2 nameuser">Usuario</h1>
                            <h2 class="mb-2 welcomeuser">Bienvenido al Kick Off 2021:</h2>
                        </div>
                    </div>
                </div>
                <!--
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
                                <div class="img w-100" style="background-image: url(<?= url('public/images/about.jpg') ?>);"></div>
                            </div>
                            <div class="col-md-6 ftco-animate">
                                <div class="text text-md-right">
                                    <h3>Welcome to AVO A Personal Porfolio Web Agency</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences
                                        fly into your mouth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="text">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and
                                supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <!--<p><a href="#" class="btn btn-primary">View all projects</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section" id="speakers">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Presentadores</h2>
                </div>
            </div>
            <div class="row  ftco-animate">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('public/images/presentadores/OPC1.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc1">Fernando Quesada Gómez</a></h3>
                            <p>Director General Adjunto de Banca de Empresas</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('public/images/presentadores/OPC2.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc2">Javier Rodríguez Ardila</a></h3>
                            <p>Director Ejecutivo Segmento Empresas y Estrategia BEI</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC3.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc3">Luis Alberto Castellanos</a></h3>
                            <p>Director Ejecutivo Regional Centro</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('public/images/presentadores/OPC4.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc4">Enrique Victorica</a></h3>
                            <p>Director Ejecutivo Regional Metro Norte</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('public/images/presentadores/OPC5.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc5">Ricardo Valle</a></h3>
                            <p>Director Ejecutivo Regional Metro Sur</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC6.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc6">Luis Mendiola</a></h3>
                            <p>Director Ejecutivo Regional Noreste</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('public/images/presentadores/OPC7.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc7">Alejandro Vázquez</a></h3>
                            <p>Director Ejecutivo Regional Noroeste</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('public/images/presentadores/OPC8.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc8">Humberto Pereira</a></h3>
                            <p>Director Ejecutivo Regional Norte</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC9.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc9">Alejandro Romano </a></h3>
                            <p>Director Ejecutivo Regional Occidente</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('public/images/presentadores/OPC10.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc10">Verónica Castellanos</a></h3>
                            <p>Director Ejecutivo Regional Sur</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('public/images/presentadores/OPC11.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc11">Jesús Valderrama</a></h3>
                            <p>Director Ejecutivo Regional Sureste</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC12.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc12">Antonio Basagoiti Pastor</a></h3>
                            <p>Director Ejecutivo de Grandes Empresas</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('public/images/presentadores/OPC13.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc13">Pilar Herrera Ludeña</a></h3>
                            <p>CEO de Negocio Instituciones y Sector Público</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('public/images/presentadores/OPC14.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc14">Martín Eduardo Villarreal</a></h3>
                            <p>Director Ejecutivo de Soluciones Financieras</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC15.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc15">Rodolfo Hernández Sada</a></h3>
                            <p>Director Ejecutivo de Negocio Internacional y Agronegocios</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC16.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc16">Marcos Abal</a></h3>
                            <p>Director Ejecutivo Banca Transaccional</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC17.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc17">Iván Riva Palacio</a></h3>
                            <p>Director Ejecutivo de Estrategia Comercial BEI</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('public/images/presentadores/OPC18.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc18">Michael Goeters</a></h3>
                            <p>Director Ejecutivo Santander Leasing</p>
                            <div class="social">
                                <a href=""><p>Santander México</p></a>
                            </div>
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
            <div class="timeline  ftco-animate">
                <ul>
                    <li>
                        <div class="content">
                            <h3>Bienvenida</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>10:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Plática con Directores Regionales</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>10:15</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación DGA: Resultados y Retos</h3>
                            <p>Fernando Quesada </p>
                        </div>
                        <div class="time">
                            <h4>10:25</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Entorno Económico</h3>
                            <p>Luis Flores</p>
                        </div>
                        <div class="time">
                            <h4>11:28</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Captación y Seguros Emp.</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>11:53</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje RRHH</h3>
                            <p>Juan Ignacio Echeverría </p>
                        </div>
                        <div class="time">
                            <h4>11:58</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación ROF y Nómina</h3>
                            <p>Iván Riva Palacio</p>
                        </div>
                        <div class="time">
                            <h4>12:03</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Sol Financieras</h3>
                            <p>Martin Villareal</p>
                        </div>
                        <div class="time">
                            <h4>12:08</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje PyP</h3>
                            <p>Pablo Elek </p>
                        </div>
                        <div class="time">
                            <h4>12:13</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Neg. Int y Agro</h3>
                            <p>Rodolfo Hernandez Sada </p>
                        </div>
                        <div class="time">
                            <h4>12:18</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Banca Transaccional</h3>
                            <p>Marcos Abal </p>
                        </div>
                        <div class="time">
                            <h4>12:23</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Plática entre DGA´s</h3>
                            <p>Fernando Quesada y Ricardo Alonso </p>
                        </div>
                        <div class="time">
                            <h4>12:28</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Arrendadora</h3>
                            <p>Michael Goeters </p>
                        </div>
                        <div class="time">
                            <h4>12:48</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Inst. y SP.</h3>
                            <p>Pilar Herrera </p>
                        </div>
                        <div class="time">
                            <h4>12:53</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CFO</h3>
                            <p>Didier Mena </p>
                        </div>
                        <div class="time">
                            <h4>12:58</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Large Corporate</h3>
                            <p>Arturo Basagoiti</p>
                        </div>
                        <div class="time">
                            <h4>13:03</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Segmento Empresas</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>13:08</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CIB</h3>
                            <p>Octavio Couttolenc</p>
                        </div>
                        <div class="time">
                            <h4>13:13</h4>
                        </div>
                    </li>


                    <li>
                        <div class="content">
                            <h3>Mensaje presidencia y DGA</h3>
                            <p>Héctor Grisi y Fernando Quesada </p>
                        </div>
                        <div class="time">
                            <h4>13:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Reconocimientos</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>14:10</h4>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Cierre</h3>
                            <p></p>
                        </div>
                        <div class="time">
                            <h4>14:50</h4>
                        </div>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </div>
        <div class="degree-left-footer"></div>
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
