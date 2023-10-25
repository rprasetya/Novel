@extends('layout.base')

@section('content')

<div class="dashboard">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" name="action" value="logout">Log Out</button>
    </form>
    <a href="/change-password">Change Password</a>
    <form action="/delete-acc" method="POST">
        @csrf
        <button type="submit">Delete Account</button>
    </form>
    
</div>

@endsection