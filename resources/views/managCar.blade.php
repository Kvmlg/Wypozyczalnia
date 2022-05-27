@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('one', 'none')
@section('two', 'current')
@section('three', 'none')
@section('four', 'none')
@section('container')
<div id="right-side">
<div id="free-space"></div>
<form  method="POST" action="{{ url('addCar') }}">
{{ csrf_field() }}
<table style="width:100%; ">
  <tr>
    <th id="name">Marka</th>
    <th id="name">Model</th>
    <th id="name">Moc</th>
    <th id="name">Rok Produkcji</th>
    <th id="name">Pojemnosc silnika</th>
    <th id="name">Numer Rejestracyjny</th>
    <th id="name">Zdjęcie</th>
    <th id="name">Cena</th>
    <th id="name">Czas</th>
    <th id="name">Skrzynia</th>
    <th id="name">Naped</th>
    <th id="name">Id dokumenty</th>
  </tr>
  @foreach ($car as $cars)
  <tr>
    <td>{{$cars->Marka}}</td>
    <td>{{$cars->Model}}</td>
    <td>{{$cars->Moc}}</td>
    <td>{{$cars->Rok_Produkcji}}</td>
    <td>{{$cars->Pojemnosc_silnika}}</td>
    <td>{{$cars->Numer_rejestracyjny}}</td>
    <td>{{$cars->Photo}}</td>
    <td>{{$cars->Cena}}</td>
    <td>{{$cars->Czas}}</td>
    <td>{{$cars->Skrzynia}}</td>
    <td>{{$cars->Naped}}</td>
    <td>{{$cars->Dokumenty_pojazdu_idDokumenty_pojazdu}}</td>
    <td><a href="{{ url('modeCar/'.$cars->idSamochod) }}" class="btn btn-primary btn-sm" style="margin-bottom:2px;">Edytuj</a>
    <a href="{{ url('deleteCar/'.$cars->idSamochod) }}" class="btn btn-primary btn-sm">Usuń</a>
    </td>
  </tr>
  @endforeach
</table>
<br>
</form>
</div>
@endsection