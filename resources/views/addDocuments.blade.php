@extends('layouts.admin')
<link href="css/panelAdmin.css" rel="stylesheet">
@section('four', 'current')
@section('title', 'Admin Panel')
@section('container')
<div id="right-side">
<div id="free-space"></div>
<form  method="POST" action="{{ url('addDoc') }}">
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
  </tr>
  @endforeach
  <tr id="last">
    <td id="add" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><a style="width: 100%; margin: 0 0 0px;padding: 5px;">ID dodawane automatycznie</a></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Rodzaj_ubezpieczenia"/></td>
    <td id="add"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Waznosc_ubezpieczenia"/></td>
    <td id="add" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><input style="width: 100%; margin: 0 0 0px;padding: 5px;" type="text" name="Koszt_ubezpieczenia"/></td>
  </tr>
</table>
<br>
<button type="add">Dodaj</button>
</form>
</div>
@endsection