
@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('one', 'none')
@section('two', 'current')
@section('three', 'none')
@section('four', 'none')
@section('container')
<div id="right-side">
<div id="free-space">
    <div id="editor">
    <div class="form">
    @foreach ($car as $cars)
        <form method="POST" action="{{ url('modeCar/'.$cars->idSamochod) }}" style="margin:0 auto 0;">
        {{ csrf_field() }}
        <div id="head"><h1>Edytujesz {{$cars->Marka}} {{$cars->Model}}</h1></div>
        <input type="text" value="{{$cars->Marka}}" name="Marka"/>
        <input type="text" value="{{$cars->Model}}" name="Model"/>
        <input type="text" value="{{$cars->Moc}}" name="Moc"/>
        <input type="text" value="{{$cars->Rok_Produkcji}}" name="Rok_Produkcji"/>
        <input type="text" value="{{$cars->Pojemnosc_silnika}}" name="Pojemnosc_silnika"/>
        <input type="text" value="{{$cars->Numer_rejestracyjny}}" name="Numer_rejestracyjny"/>
        <input type="text" value="{{$cars->Photo}}" name="Photo"/>
        <input type="text" value="{{$cars->Cena}}" name="Cena"/>
        <input type="text" value="{{$cars->Czas}}" name="Czas"/>
        <input type="text" value="{{$cars->Skrzynia}}" name="Skrzynia"/>
        <input type="text" value="{{$cars->Naped}}" name="Naped"/>
        <input type="text" value="{{$cars->Dokumenty_pojazdu_idDokumenty_pojazdu}}" name="Dokumenty_pojazdu_idDokumenty_pojazdu"/>
        <br>
        <button type="submit" style="margin-left:0% !important; margin-top:20px;">Edytuj</button>
        </form>
    @endforeach
    </div>
</div>
</div>
@endsection