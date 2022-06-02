@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('six', 'current')
@section('container')
<div id="right-side">
<div id="free-space">
    <div id="editor">
    <div class="form">
    @foreach ($rent as $rents)
        <form method="POST" action="{{ url('modeRent/'.$rents->idSzczegoly_najmu) }}" style="margin:0 auto 0;">
        {{ csrf_field() }}
        <div id="head"><h1>Edytujesz rezerwacje {{$rents->idSzczegoly_najmu}}</h1></div>
        <input type="text" value="{{$rents->Data_wypozyczenia}}" name="Data_wypozyczenia"/>
        <input type="text" value="{{$rents->Data_zwrotu}}" name="Data_zwrotu"/>
        <input type="text" value="{{$rents->Samochod_idSamochod}}" name="Samochod_idSamochod"/>
        <input type="text" value="{{$rents->Users_idUsers}}" name="Users_idUsers"/>
        <select name="Stan">
            <option value="Nowy">Nowy</option>
            <option value="Zatwierdzony">Zatwierdzony</option>
            <option value="Zrealizowany">Zrealizowany</option>
        </select>
        <br>
        <button type="submit" style="margin-left:0% !important; margin-top:20px;">Edytuj</button>
        </form>
    @endforeach
    </div>
</div>
</div>
@endsection