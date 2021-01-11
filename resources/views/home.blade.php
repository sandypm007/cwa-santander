@extends('template')

@section('javascripts')
    <script src="{{ url('public/js/main.js') }}"></script>
@endsection

@section('content')
    <div class="nomove">
        <section class="hero-wrap degree-right js-fullheight" id="new" style="height: 949px;">
            <div class="fondo">
                <div class="slider-item js-fullheight" style="height: 949px;">

                    <div class="row no-gutters slider-text js-fullheight align-items-center" style="height: 949px;">
                        <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                            <div class="text aliniacion">
                                <h1 class="mb-4 edittext">Click para ver el evento</h1>
                                <!--<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
                                <p class="mb-0"><a href="{{ $configuration->video_url }}" class="playbutton img-video popup-vimeo d-flex align-items-center justify-content-center">
                                        <span class="fa fa-play" style="color: black;" aria-hidden="true"></span>
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
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="text">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <!--<p><a href="#" class="btn btn-primary">View all projects</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                        <div class="user-img" style="background-image: url(<?= url('public/images/person_1.jpg') ?>)"></div>
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
                                        <div class="user-img" style="background-image: url(<?= url('public/images/person_2.jpg') ?>)"></div>
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
                                        <div class="user-img" style="background-image: url(<?= url('public/images/person_3.jpg') ?>)"></div>
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
                                        <div class="user-img" style="background-image: url(<?= url('public/images/person_1.jpg') ?>)"></div>
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
                                        <div class="user-img" style="background-image: url(<?= url('public/images/person_2.jpg') ?>)"></div>
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

            <!--<div class="row mt-5">
                <div class="col-md-12">
                    <div class="intro p-md-4 py-md-5 p-2 rounded img" style="background-image: url(images/bg_1.jpg);">
                        <div class="col-md-6 ftco-animate">
                            <span>Get Started</span>
                            <h2>Fill in the brief and get the project estimate</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Get started</a></p>
                        </div>
                    </div>
                </div>
            </div>-->
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
                            <p>Fernando Quesada  </p>
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
                            <p>Juan Ignacio Echeverría  </p>
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
                            <p>Pablo Elek  </p>
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
                            <p>Marcos Abal  </p>
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
