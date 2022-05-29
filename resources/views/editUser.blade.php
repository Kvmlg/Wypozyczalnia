@extends('layouts.admin')
<link href="{{ asset('css/panelAdmin.css')}}" rel="stylesheet">
@section('title', 'Admin Panel')
@section('three', 'current')
@section('container')
<div id="right-side">
<div id="free-space">
    <div id="editor">
    <div class="form">
    @foreach ($user as $users)
        <form method="POST" action="{{ url('modeUser/'.$users->id) }}" style="margin:0 auto 0;">
        {{ csrf_field() }}
        <div id="head"><h1>Edytujesz {{$users->Imie}}</h1></div>
        <input type="text" value="{{$users->Email}}" name="Email"/>
        <input type="text" value="{{$users->password}}" name="password"/>
        <input type="text" value="{{$users->Imie}}" name="Imie"/>
        <input type="text" value="{{$users->NumerTelefonu}}" name="NumerTelefonu"/>
        <input type="text" value="{{$users->Miasto}}" name="Miasto"/>
        <input type="text" value="{{$users->Ulica}}" name="Ulica"/>
        <input type="text" value="{{$users->NumerMieszkania}}" name="NumerMieszkania"/>
        <input type="text" value="{{$users->Pesel}}" name="Pesel"/>
        <select name="Ranga">
            <option value="User">User</option>
            <option value="Admin">Admin</option>
        </select>
        <br>
        <button type="submit" style="margin-left:0% !important; margin-top:20px;">Edytuj</button>
        </form>
    @endforeach
    </div>
</div>
</div>
@endsection