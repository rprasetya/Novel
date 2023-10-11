@extends('layout.base')
@section('content')
@if(session()->has('success'))
  <div class="successRegisterCont">
    <h1>{{ session('success') }}</h1>
  </div>
@endif
@if(session()->has('loginError'))
  <div class="successRegisterCont">
    <h1>{{ session('loginError') }}</h1>
  </div>
@endif

<div class="formLoginCont">
    <form class="form" action="/login" method="POST">
      @csrf
      <div class="titleLogin">Welcome,<br><span>Provide your information below</span></div>
      <input class="input" id="username" name="username" placeholder="Username" type="text" required="" autofocus >
      <input class="input" id="password" name="password" placeholder="Password" type="password" required="">
      <div class="register">
        <a href="/register">Register ?</a>
      </div>
      <div class="btn-confirm">
          <button class="button-confirm">Let`s go →</button>
      </div>
    </form>
</div>

@endsection
