<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Wypożyczalnia</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicons -->
<link href="{{ asset('images/ikona.png')}}" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="position: relative;">
<div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation" href="login.blade.php">
    <span></span>
    <span></span>
    <span></span>
    </button>
    <a class="navbar-brand text-brand" href="{{ url('index') }}">Car<span class="color-b">Rent</span></a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
    data-target="#navbarTogglerDemo01" aria-expanded="false">
    <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('index') }}">Start</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('index#onas') }}">O nas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="{{ url('index#nowesam') }}">Samochody</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('index#kontakt') }}">Kontakt</a>
        </li>
    </ul>
    </div>
    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
    data-target="#navbarTogglerDemo01" aria-expanded="false" >
    <!--/ <span class="fa fa-search" aria-hidden="true"></span>/-->
    <img src="{{ asset('images/icons8-user-24.png') }}" height="15px" width="15px" >

    </button>
</div>
</nav>
<!--/ Nav End /-->


<div class="container">
<div class="row">
    <br>
    {{$car}}
</div>
</div>


<!--/ footer Star /-->

<footer style="  position: fixed; bottom: 0; width: 100%;">
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <nav class="nav-footer">
        <ul class="list-inline">
            <li class="list-inline-item">
            <a href="#">Dashboard</a>
            </li>
            <li class="list-inline-item">
            <a href="#">About</a>
            </li>
            <li class="list-inline-item">
            <a href="#">Property</a>
            </li>
            <li class="list-inline-item">
            <a href="#">Blog</a>
            </li>
            <li class="list-inline-item">
            <a href="#">Contact</a>
            </li>
        </ul>
        </nav>
        <div class="socials-a">
        <ul class="list-inline">
            <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
            </a>
            </li>
        </ul>
        </div>
        <div class="copyright-footer">
        <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">EstateAgency</span> All Rights Reserved.
        </p>
        </div>
        <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
    </div>
</div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('lib/popper/popper.min.js')}}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>