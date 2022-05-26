@extends('layouts.navigation')
@section('content')
@section('title', 'Logowanie')
<link href="css/stylelogin.css" rel="stylesheet">
<div class="login-page" style="padding-top:15%;">
  <div class="form">
    <form class="login-form" method="POST" action="login">
    {{ csrf_field() }}
      <input type="text" placeholder="Email" name="Email"/>
      <input type="password" placeholder="Haslo" name="password"/>
      <button type="submit">login</button>
      <p class="message">Nie masz konta? <a href="{{ url('register') }}">Utwórz</a></p>
      @if ($errors->has('message'))
        {{ $errors->first('message') }}
      @endif
    </form>
  </div>
</div>

<script type="text/javascript" src="{{ asset('js/login.js')}}"></script>