<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alemad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}"">
        
              
        <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">


          <!-- js scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('toastr/toastr.min.js') }}"></script>
        <!--<script src="{{ asset('js/app.js') }}"></script>-->
        <script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>

        <!-- Styles -->
        <style>
           /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
*/
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <header class="main-header">
        <div class="logodiv">
        <a href="{{ url('/dashboard')}}" class="logo">
        <span class="logo-lg"><img src="{{ asset('images/logo.png') }}" height="50px" width="200px" alt="AL EMAD"></span>
        </a>
        </div>
         @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <!-- <a href="{{ url('/register') }}">Register</a> -->
                    @endif
                </div>
            @endif
      </header>
        <div class="container">
            <!-- <div class="row welcome"></div> -->
            @include('layouts.sitepage')
        </div>
    </body>
</html>
<style type="text/css">
  .welcome{
     background-image: url("public/images/alemad.jpg");
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-right: 0px;
  margin-left: 0px;
    height: 450px;
    width: 1240px;
  }
  .thumbnail {
    border: 10px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
.listing{
    display: inline-block;
}

</style>
