@extends('layouts.admin')
<link href="css/panelAdmin.css" rel="stylesheet">
@section('one', 'current')
@section('two', 'none')
@section('three', 'none')
@section('four', 'none')
@section('title', 'Admin Panel')
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
  </tr>
  @endforeach
  <tr id="last">
    <td id="add" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Marka"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Model"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Moc"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Rok_Produkcji"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Pojemnosc_silnika"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Numer_rejestracyjny"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Photo"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Cena"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Czas"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Skrzynia"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Naped"/></td>
    <td id="add" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Dokumenty_pojazdu_idDokumenty_pojazdu"/></td>
  </tr>
</table>
<br>
<button type="add">Dodaj</button>
</form>
</div>
@endsection