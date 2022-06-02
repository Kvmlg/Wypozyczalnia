<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="{{asset('images/ikona.png')}}" rel="icon">

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
  <link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">


</head>

<body>


  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation" href="login.blade.php">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ url('index')}}">Car<span class="color-b">Rent</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('index') }}">Start</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('index#onas') }}">O nas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('index#nowesam') }}">Samochody</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('index#kontakt') }}">Kontakt</a>
        </li>
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
  <!--/ Nav End /-->
  <div id="left-menu">
    <div id="column">
        <div id="free-space"></div>
        <div id="category" class="@yield('one')"><a href="{{ url('admin')}}">Dodaj samochód</a></div>
        <div id="category" class="@yield('two')"><a href="{{ url('edit')}}">Edycja samochód</a></div>
        <div id="category" class="@yield('three')"><a href="{{ url('editUser')}}">Edycja użytkownika</a></div>
        <div id="category" class="@yield('four')"><a href="{{ url('addDoc')}}">Dodaj dokumenty</a></div>
        <div id="category" class="@yield('five')"><a href="{{ url('editDoc')}}">Edycja dokumentow</a></div>
        <div id="category" class="@yield('six')"><a href="{{ url('editRent')}}">Zarządzaj wynajami</a></div>
    </div>
</div>

@yield('container')


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>