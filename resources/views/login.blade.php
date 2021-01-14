<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kick Off 2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('public/images/Santander.svg') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/main.v1.css') }}">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="post" action="{{ route('_login') }}" class="login100-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <span class="login100-form-title p-b-90">
                    <i class=""> <img src="{{ url('public/images/santander_empresas.svg') }}" alt=""></i>
                </span>

                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                    <input class="input100" type="text" name="email" value="">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Ingresar una contraseña">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" value="">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="text-uppercase text-center" style="font-size: 0.8rem;">
                    Toda la información transmitida en este evento es estrictamente confidencial.
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            <span class="bob">Login</span>
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-30">
                    <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                        ¿Necesitas ayuda?
                    </a><br>
                    <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                        Envía un WhatsApp al +55 62 32 92 09
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ url('public/vendor/jquery/jquery-3.2.1.min.js')  }}"></script>
<script src="{{ url('public/vendor/animsition/js/animsition.min.js')  }}"></script>
<script src="{{ url('public/vendor/bootstrap/js/popper.js')  }}"></script>
<script src="{{ url('public/vendor/bootstrap/js/bootstrap.min.js')  }}"></script>
<script src="{{ url('public/vendor/select2/select2.min.js')  }}"></script>
<script src="{{ url('public/vendor/daterangepicker/moment.min.js')  }}"></script>
<script src="{{ url('public/vendor/daterangepicker/daterangepicker.js')  }}"></script>
<script src="{{ url('public/vendor/countdowntime/countdowntime.js')  }}"></script>
<script src="{{ url('public/js/main-login.js')  }}"></script>
</body>
</html>
