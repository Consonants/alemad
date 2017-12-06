<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alemad') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}"">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">
 
   
        
        <!-- js scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('toastr/toastr.min.js') }}"></script>
        <!--<script src="{{ asset('js/app.js') }}"></script>-->
        <script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
