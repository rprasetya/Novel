@extends('layout.base')
@section('content')

@if(session()->has('error'))
    <div class="successRegisterCont" style="justify-content: center; padding-top:10vh;">
        <h1>{{ session('error') }}</h1>
    </div>
@endif
<div class="changePasswordCont">
    <div class="formLoginCont">
        <form class="form" action="/change-password" method="post">
            @csrf
            <div class="titleLogin">Change Password<br></div>
            <input class="input" type="password" name="currentPassword" id="currentPassword" placeholder="Current Password" minlength="8" autofocus>
            <input class="input" type="password" name="newPassword" id="newPassword" placeholder="New Password" minlength="8">
            <div class="btn-confirm">
                <button type="submit" class="button-confirm">Change Password</button>
            </div>
        </form>
    </div>
</div>




@endsection