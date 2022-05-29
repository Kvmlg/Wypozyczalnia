@extends('layouts.navigation')
@section('title', 'Samochody')
@section('container')

      <!--/ Cars Star /-->
      <section class="section-property section-t8" id="sam">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between" style="padding-top:20px">
            <div class="title-box">
              <h2 class="title-a">Nasza kolekcja</h2>
            </div>
          </div>
        </div>
      </div>
      
      <div class="title-wrap d-flex justify-content-between">
      <div class="row">
      @foreach ($show as $showw) 
        <div class="col-md-4" style="padding-bottom: 30px"> 
        <div class="card-box-d">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{$showw->Photo}}" alt="" class="img-a img-fluid" style="height: 400px; object-fit: cover">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a>{{$showw->Marka}}
                      <br /> {{$showw->Model}}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a active"><a href="detail/{{$showw->idSamochod}}" style="color: white">Wypożycz | {{$showw->Cena}} za dzień</a></span>
                  </div>
                  <a href="detail/{{$showw->idSamochod}}" class="link-a">Zobacz szczegóły
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Pojemność</h4>
                      <span>{{$showw->Pojemnosc_silnika}}
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Rok produkcji</h4>
                      <span>{{$showw->Rok_Produkcji}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  <div class="menu" style="position: relative;">
      <!--/ Agents End /-->
      {{ $show->links() }}
</div></br>
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

@endsection