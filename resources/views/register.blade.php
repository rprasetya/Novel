@extends('layout.base')
@section('content')

    <div class="formLoginCont">
        <div class="backToLoginBtn">
            <a href="/login">
                <img src="https://img.icons8.com/metro/52/back.png" alt="back"/>
            </a>
        </div>
        <form class="form">
            <div class="titleLogin">Welcome,<br><span>Provide your information below</span></div>
            <input class="input" name="fullName" placeholder="Full Name" type="text" required="">
            <input class="input" name="email" placeholder="E-mail" type="email" required="">
            <input class="input" name="username" placeholder="Username" type="text" required="">
            <input class="input" name="password" placeholder="Password" type="password" required="">
            <div class="btn-confirm">
                <button class="button-confirm">Sign Up</button>
            </div>
          </form>
    </div>

@endsection
