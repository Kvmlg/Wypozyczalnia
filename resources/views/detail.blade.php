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
    <a class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" href="{{ url('login') }}">
    <!--/ <span class="fa fa-search" aria-hidden="true"></span>/-->
    <img src="{{ asset('images/icons8-user-24.png') }}" height="15px" width="15px" >
        </a>
</div>
</nav>
<!--/ Nav End /-->
<div class="container">
<div class="row" style="height:900px; margin-top:35px; ">
@foreach ($car as $cars)
    <br>
    <div class="left" style="margin-top:30px; left:15px; height:700px; width:400px; background-color:#2eca6a; border-radius:20px; padding-top:25px; float:left;">
    
        <img src="../{{$cars->Photo}}" style=" max-width:90%; max-height:70%; object-fit: cover; border-radius: 20px;  display: block; margin-left: auto; margin-right: auto";>
            <div class="reserved">
            @if( $all )
                <br><a class="resName">Zarezerwowane dni:</a>

                <a class="resName" style="color:red !important"><br>
                @foreach ($all as $alll)
                {{$alll}}
                @endforeach
                </a>
            @endif
            </div>
            <form method="POST" action="{{ url('reservation') }}" style="margin:0 auto 0;">
                {{ csrf_field() }}
                <div class="reserved" style="margin-top:2rem;">
                    <a class="resName" >Dzień rezerwacji:</a><br>
                    <input type="date" class="data"><br><br>
                    <a class="resName">Dzień zwrotu:</a><br>
                    <input type="date" class="data"><br><br>
                    <button type="submit" id="but">Rezerwuj</button>
                </div>
            </form>
    </div>
    <div class="right" style="height:1000px; width:700px; border-radius:20px; padding-top:25px; float:left; margin-left:35px; margin-top:20px;">
        <h1><div class="cartitle">{{$cars->Marka}} {{$cars->Model}}</div></h1>
        <div class="infos" style="height:300px; width:700px; float:left; justify-content: center; ">
            <div  style="height:100px; width:150px; float:left; margin: 5% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px; font-decoration:">Moc</p>
                <p>{{$cars->Moc}} KM</p>
            </div>
            <div style="height:100px; width:150px; float:left; margin: 5% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px;">0-100</p>
                <p>{{$cars->Czas}} s</p>                
            </div>
            <div style="height:100px; width:150px; float:left; margin: 5% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px;">Skrzynia</p>
                <p>{{$cars->Skrzynia}}</p>
            </div>
            <div style="height:100px; width:150px; float:left; margin: 2% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px;">Napęd</p>
                <p>{{$cars->Naped}}</p>    
            </div>
            <div style="height:100px; width:150px; float:left; margin: 2% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px;">Silnik</p>
                <p>{{$cars->Pojemnosc_silnika}} cm<sup>3</sup></p>
            </div>
            <div style="height:100px; width:150px; float:left; margin: 2% 0% 0% 9%">
                <p style="color:#2eca6a; font-size:26px;">Rejestracja</p>
                <p>{{$cars->Numer_rejestracyjny}}</p>
            </div>
        </div> 
        <div class="description" style="height:200px; width:700px; float:left; justify-content: center; ">
        <hr>
        <h2><div style="margin-left:30px;">Opis</div></h2>
        </div>
    </div>
    
@endforeach
</div>
</div>
<!--/ footer Star /-->
<footer>
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