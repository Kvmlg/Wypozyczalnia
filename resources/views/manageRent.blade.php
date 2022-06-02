@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('six', 'current')
@section('container')
<div id="right-side">
<div id="free-space"></div>
<form  method="POST" action="{{ url('addCar') }}">
{{ csrf_field() }}
<table style="width:100%; ">
  <tr>
    <th id="name">Id Najmu</th>
    <th id="name">Data wypo</th>
    <th id="name">Data zwrotu</th>
    <th id="name">Marka</th>
    <th id="name">Model</th>
    <th id="name">Imie wypo</th>
    <th id="name">Miasto</th>
    <th id="name">Numer telefonu</th>
    <th id="name">Email</th>
    <th id="name">Stan</th>
  </tr>
  @foreach ($show as $shows)
  <tr>
    <td>{{$shows->idSzczegoly_najmu}}</td>
    <td>{{$shows->Data_wypozyczenia}}</td>
    <td>{{$shows->Data_zwrotu}}</td>
    <td>{{$shows->Marka}}</td>
    <td>{{$shows->Model}}</td>
    <td>{{$shows->Imie}}</td>
    <td>{{$shows->Miasto}}</td>
    <td>{{$shows->NumerTelefonu}}</td>
    <td>{{$shows->Email}}</td>
    <td>{{$shows->Stan}}</td>
    <td><a href="{{ url('modeRent/'.$shows->idSzczegoly_najmu) }}" class="btn btn-primary btn-sm" style="margin-bottom:2px;">Edytuj</a>
    <a href="{{ url('deleteRent/'.$shows->idSzczegoly_najmu) }}" class="btn btn-primary btn-sm">Usuń</a>
    </td>
  </tr>
  @endforeach
</table>
<br>
<div class="menu" style="position: relative;">
      <!--/ Agents End /-->
      {{ $show->links() }}
</div></br>
</form>
</div>
@endsection