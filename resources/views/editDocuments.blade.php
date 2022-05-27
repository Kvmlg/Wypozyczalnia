@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('five', 'current')
@section('container')
<div id="right-side">
<div id="free-space">
    <div id="editor">
    <div class="form">
    @foreach ($doc as $docs)
        <form method="POST" action="{{ url('modeDoc/'.$docs->idDokumenty_pojazdu) }}" style="margin:0 auto 0;">
        {{ csrf_field() }}
        <div id="head"><h1>Edytujesz {{$docs->idDokumenty_pojazdu}}</h1></div>
        <input type="text" value="{{$docs->Rodzaj_ubezpieczenia}}" name="Rodzaj_ubezpieczenia"/>
        <input type="text" value="{{$docs->Waznosc_ubezpieczenia}}" name="Waznosc_ubezpieczenia"/>
        <input type="text" value="{{$docs->Koszt_ubezpieczenia}}" name="Koszt_ubezpieczenia"/>
        <br>
        <button type="submit" style="margin-left:0% !important; margin-top:20px;">Edytuj</button>
        </form>
    @endforeach
    </div>
</div>
</div>
@endsection