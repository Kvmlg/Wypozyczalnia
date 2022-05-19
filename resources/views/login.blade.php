<link href="css/stylelogin.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="images/ikona.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
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
            <a class="nav-link" href="{{ url('index#nowesam') }}">Samochody</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('index#kontakt') }}">Kontakt</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" >
       <!--/ <span class="fa fa-search" aria-hidden="true"></span>/-->
       <img src="images/icons8-user-24.png" height="15px" width="15px" >

      </button>
    </div>
  </nav>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="/login">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>