@extends('layout.base')
@section('content')

<div class="changePasswordCont">
    @if(session()->has('error'))
        <div class="successRegisterCont" style="justify-content: center; padding-top:10vh;">
            <h1>{{ session('error') }}</h1>
        </div>
    @endif
    <form action="/change-password" method="post">
        @csrf
        <input type="password" name="currentPassword" id="currentPassword" placeholder="Current Password" minlength="8" autofocus>
        <input type="password" name="newPassword" id="newPassword" placeholder="New Password" minlength="8">
        <button type="submit">Confirm</button>
    </form>
</div>




@endsection