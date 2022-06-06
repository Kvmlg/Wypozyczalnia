@extends('layouts.navigation')
@section('title', 'Wynajmy')
@section('aktyw', 'active')
@section('container')

<link href="{{ asset('css/table.css')}}" rel="stylesheet">
<style>
    footer {
    position: fixed !important;
    bottom: 0px !important;
    left: 0px !important;
    right: 0px !important;
    margin-bottom: 0px !important;
}
    </style>
      <!--/ Cars Star /-->
      <section class="section-property section-t8" id="sam">
    <div class="container" style="heigth:900px !imoprtant;">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between" style="margin-top:300px !impotant">
            <div class="title-box">
            </div>
          </div>
        </div>
      </div>
      
      <div class="title-wrap d-flex justify-content-between">
      </div>
      <div class="row">
          
      <h5><br>Twoje rezerwacje<br><br><br></h5>
    </div>
    <table style="width:100%; ">
  <tr>
    <th id="name">Id rezerwacji</th>
    <th id="name">Marka</th>
    <th id="name">Model</th>
    <th id="name">Data wypozyczenia</th>
    <th id="name">Data zwrotu</th>
    <th id="name">Cena za wynajem</th>
    <th id="name">Stan rezerwacji</th>
  </tr>
  <div style="display:none;"> {{$i=-1}}</div>
  @foreach ($show as $shows)
  <div style="display:none;"> {{$i++}}</div>
  <tr>
    <td>{{$shows->idSzczegoly_najmu}}</td>
    <td>{{$shows->Marka}}</td>
    <td>{{$shows->Model}}</td>
    <td>{{$shows->Data_wypozyczenia}}</td>
    <td>{{$shows->Data_zwrotu}}</td>
    <td>
    {{($days[$i]+1) * $shows->Cena}}
    </td>

    @switch ( $shows->Stan )
        @case ("Nowy")
            <td style='color:blue;'> {{$shows->Stan}} </td>
        @break
        @case ("Zatwierdzony")
            <td style='color:green;'>{{$shows->Stan}}</td>
        @break
        @case ("Zrealizowany")
            <td style='color:gray;'>{{$shows->Stan}}</td>
        @break
    @endswitch
  </tr>
  @endforeach
</table>
  </section>
  <div class="menu" style="position: relative;">
      <!--/ Agents End /-->
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