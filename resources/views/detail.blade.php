<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Wypożyczalnia</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
function reser(value) {
    console.log(value);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '{{URL::current();}}',
        type: 'post',
        data: { value: value },
        dataType: 'json',
        success: function (response) {
            console.log('Zarezerwowane dni:', response);
            displayReservedDays(response);
        },
        error: function (error) {
            console.error('AJAX request failed:', error);
        }
    });
}

function displayReservedDays(days) {
    var reservedDaysElement = document.getElementById('days2');

    if (reservedDaysElement) {
        reservedDaysElement.innerHTML = ''; // Wyczyszczenie istniejącej zawartości

        if (days.length > 0) {
            var resNameElement = document.createElement('a');
            resNameElement.className = 'resName2';
            resNameElement.style.color = 'red';
            resNameElement.innerHTML = '<br>';

            days.forEach(function (day) {
                resNameElement.innerHTML += day + ' ';
            });

            reservedDaysElement.appendChild(resNameElement);
        }
    }
}
</script>
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
        <a class="nav-link active" href="{{ url('view') }}">Samochody</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('index#kontakt') }}">Kontakt</a>
        </li>
        @if(Auth::check() && Auth::user()->Ranga == "User")
        <li class="nav-item">
            <a class="nav-link @yield('aktyw')" href="{{ url('myRent') }}">Twoje wynajmy</a>
        </li>
        @endif
    </ul>
    </div>
    @if( auth()->check() )
        <a>Witaj <a style="Color:#2eca6a">&nbsp{{ auth()->user()->Imie }}</a>!&nbsp&nbsp</a>
        @if(Auth::check() && Auth::user()->Ranga == "Admin")
        <a href="{{ url('admin') }}"><img src="{{ asset('images/icon-admin.png')}}" height="25px" width="25px" ></a>
        @endif
      <a class="nav-link" href="{{ url('logout') }}" style="margin-left:30px;">   Wyloguj</a> 
      @else
      <a class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" href="{{ url('login') }}">
        <!--/ <span class="fa fa-search" aria-hidden="true"></span>/-->
        <img src="{{ asset('images/icons8-user-24.png')}}" height="15px" width="15px" >
      </a>
      @endif
</div>
</nav>
@if($errors->any())
<div class="error" style="position: relative; background-color:red; height:2rem; text-align:center; color:white; margin-top:3px;">
        {!! implode('', $errors->all(':message')) !!}
</div>
@endif
@if(\Session::has('success'))
<div class="error" style="position: relative; background-color:green; height:2rem; text-align:center; color:white; margin-top:3px;">
{!! \Session::get('success') !!}
</div>
@endif
<!--/ Nav End /-->
<div class="container">
<div class="row" style="height:900px; margin-top:35px; ">
@foreach ($car as $cars)
    <br>
    <div class="left" style="margin-top:30px; left:15px; height:800px; width:400px; background-color:#2eca6a; border-radius:20px; padding-top:25px; float:left;">
    
        <img src="../{{$cars->Photo}}" style=" max-width:90%; max-height:70%; object-fit: cover; border-radius: 20px;  display: block; margin-left: auto; margin-right: auto";>
            <div class="java" id="java" style="text-align:center">
            <br><a class="resName">Sprawdź dostępność:</a>
            <select name="mounth" id="mounth" onchange="reser(this.value)">
                <option value="null">---</option>
                <option value="01">Styczeń</option>
                <option value="02">Luty</option>
                <option value="03">Marzec</option>
                <option value="04">Kwiecień</option>
                <option value="05">Maj</option>
                <option value="06">Czerwiec</option>
                <option value="07">Lipiec</option>
                <option value="08">Sierpień</option>
                <option value="09">Wrzesień</option>
                <option value="10">Październik</option>
                <option value="11">Listopad</option>
                <option value="12">Grudzień</option>
            </select>
            </div>
            <div class="reserved" id="days">
            @if( $all )
                <div style="width:250px;">
                <a class="resName">Zarezerwowane dni:</a>

                <a class="resName2" id="days2" style=" color:red !important ">
                </a>
</div>
            @endif
            </div>
            <form method="POST" action="reservation/{{$cars->idSamochod}}" style="margin:0 auto 0;">
                {{ csrf_field() }}
                <div class="reserved" style="margin-top:2rem;">
                    <a class="resName" >Dzień rezerwacji:</a><br>
                    <input type="date" min="<?php echo date("Y-m-d"); ?>" class="data" name="Data_wypozyczenia"><br><br>
                    <a class="resName">Dzień zwrotu:</a><br>
                    <input type="date" min="<?php echo date("Y-m-d"); ?>" class="data" name="Data_zwrotu"><br><br>
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