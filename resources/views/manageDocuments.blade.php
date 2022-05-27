@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('five', 'current')
@section('container')
<div id="right-side">
<div id="free-space"></div>
<form  method="POST" action="{{ url('addCar') }}">
{{ csrf_field() }}
<table style="width:100%; ">
  <tr>
  <th id="name">ID</th>
    <th id="name">Rodzaj ubezpieczenia</th>
    <th id="name">Waznosc ubezpieczenia</th>
    <th id="name">Koszt ubezpieczenia</th>
  </tr>
  @foreach ($doc as $docs)
  <tr>
    <td>{{$docs->idDokumenty_pojazdu}}</td>
    <td>{{$docs->Rodzaj_ubezpieczenia}}</td>
    <td>{{$docs->Waznosc_ubezpieczenia}}</td>
    <td>{{$docs->Koszt_ubezpieczenia}}</td>
    <td><a href="{{ url('modeDoc/'.$docs->idDokumenty_pojazdu) }}" class="btn btn-primary btn-sm" style="margin-bottom:2px;">Edytuj</a>
    <a href="{{ url('deleteDoc/'.$docs->idDokumenty_pojazdu) }}" class="btn btn-primary btn-sm">Usuń</a>
    </td>
  </tr>
  @endforeach
</table>
<br>
</form>
</div>
@endsection