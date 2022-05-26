@extends('layouts.navigation')
@section('content')
@section('title', 'Rejstracja')
<link href="css/stylelogin.css" rel="stylesheet">
<div class="login-page" style="padding-top:7%;">
  <div class="form">
    <form method="POST" action="{{ url('register') }}" style="margin:0 auto 0;">
    {{ csrf_field() }}
      <input type="text" placeholder="Email" name="Email"/>
      <input type="password" placeholder="Haslo" name="password"/>
      <input type="text" placeholder="Imie" name="Imie"/>
      <input type="number" placeholder="Numer telefonu" name="NumerTelefonu"/>
      <input type="text" placeholder="Miasto" name="Miasto"/>
      <input type="text" placeholder="Ulica" name="Ulica"/>
      <input type="text" placeholder="Numer Mieszkania" name="NumerMieszkania"/>
      <input type="number" placeholder="Pesel" name="Pesel"/>
      <button>create</button>
      <p class="message">Zarejestrowny? <a href="{{ url('login') }}">Zaloguj się</a></p>
      @if($errors->any())
      {!! implode('', $errors->all('<div>:message</div>')) !!}
      @endif
    </form>
  </div>
</div>

<script type="text/javascript" src="{{ asset('js/login.js')}}"></script>