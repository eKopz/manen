<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>@yield('title')</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{url('assets2/rs-plugin/css/settings.css')}}" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="{{url('assets2/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{url('assets2/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets2/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{url('assets2/css/main.css')}}" rel="stylesheet">
<link href="{{url('assets2/css/style.css')}}" rel="stylesheet">
<link href="{{url('assets2/css/responsive.css')}}" rel="stylesheet">
<link href="{{url('assets2/font/flaticon.css')}}" rel="stylesheet">

<!-- JavaScripts -->
<script src="{{url('assets2/js/modernizr.js')}}"></script>

<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap">

  <!-- header -->
  <header class="sticky">
    @include('ecommerce.layout.header')
  </header>

  <!-- Content -->
  <div id="content">
      @yield('content')
  </div>

  <!-- FOOTER -->
  <footer>
    @include('ecommerce.layout.footer')
  </footer>
</div>
<script src="{{url('assets2/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{url('assets2/js/popper.min.js')}}"></script>
<script src="{{url('assets2/js/bootstrap.min.js')}}" ></script>
<script src="{{url('assets2/js/own-menu.js')}}"></script>
<script src="{{url('assets2/js/jquery.lighter.js')}}"></script>
<script src="{{url('assets2/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets2/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets2/js/main.js')}}"></script>

</body>
</html>
