@extends('layout.base')
@section('content')

    <div class="formLoginCont">
        <div class="backToLoginBtn">
            <a href="/login">
                <img src="https://img.icons8.com/metro/52/back.png" alt="back"/>
            </a>
        </div>
        <form class="form" action="/register" method="POST">
            @csrf
            <div class="titleLogin">Welcome,<br><span>Provide your information below</span></div>
            <input class="input" id="fullName" name="fullName" placeholder="@error('fullName') {{ $message }} @else Full Name @enderror" type="text" required="" value="{{ old("fullName") }}">
            <input class="input" id="email" name="email" placeholder="@error('email') {{ $message }} @else E-mail @enderror" type="email" required="" value="{{ old("email") }}">
            <input class="input" id="username" name="username" placeholder="@error('username') {{ $message }} @else Username @enderror" type="text" required="" value="{{ old("username") }}">
            <input class="input" id="password" name="password" placeholder="@error('password') {{ $message }} @else Password @enderror" type="password" required="" minlength="8" value="{{ old("password") }}">
            <div class="btn-confirm">
                <button class="button-confirm">Sign Up</button>
            </div>
          </form>
    </div>

@endsection
