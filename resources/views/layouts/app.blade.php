<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Interactive E-learning Africa Ltd. is an e-learning solution provider that designs, develops and delivers technology based Interactive learning solutions. Providing learning technologies, including custom e-learning, multi-device learning, mobile learning platforms and consulting for Interactive e-learning curriculum design.">
  <meta name="keywords" content="ELearning, Interactive, Animation, Web design, Development">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/IEA-logo small.png') }}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendors/flat-icon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>{{ config('app.name', 'Interactive E-learning Africa') }}</title>
</head>
<body>
  @include('inc.navbar')
  <div>
    @include('inc.messages')
    @yield('content')
    @include('inc.footer')
  </div>
    <script src="{{asset('css/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('css/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('css/vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144776515-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-144776515-1');
  </script>

<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
