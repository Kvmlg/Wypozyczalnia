@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('three', 'current')
@section('container')
<div id="right-side">
<div id="free-space"></div>
<form  method="POST" action="{{ url('addCar') }}">
{{ csrf_field() }}
<table style="width:100%; ">
  <tr>
    <th id="name">Email</th>
    <th id="name">Haslo</th>
    <th id="name">Imie</th>
    <th id="name">Numer Telefonu</th>
    <th id="name">Miasto</th>
    <th id="name">Ulica</th>
    <th id="name">Numer Mieszkania</th>
    <th id="name">Pesel</th>
    <th id="name">Ranga</th>
  </tr>
  @foreach ($user as $users)
  <tr>
    <td>{{$users->Email}}</td>
    <td>{{$users->password}}</td>
    <td>{{$users->Imie}}</td>
    <td>{{$users->NumerTelefonu}}</td>
    <td>{{$users->Miasto}}</td>
    <td>{{$users->Ulica}}</td>
    <td>{{$users->NumerMieszkania}}</td>
    <td>{{$users->Pesel}}</td>
    <td>{{$users->Ranga}}</td>
    <td><a href="{{ url('modeUser/'.$users->id) }}" class="btn btn-primary btn-sm" style="margin-bottom:2px;">Edytuj</a>
    <a href="{{ url('deleteUser/'.$users->id) }}" class="btn btn-primary btn-sm">Usuń</a>
    </td>
  </tr>
  @endforeach
</table>
<br>
</form>
</div>
@endsection