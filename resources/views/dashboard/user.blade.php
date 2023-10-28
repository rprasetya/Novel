@extends('layout.base')

@section('content')

<div class="dashboard">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" name="action" value="logout">Log Out</button>
    </form>
    <a href="/change-password">Change Password</a>
    <a class="deleteAccount">Delete Account</a>
    <form action="/delete-acc" class="confirmDeleteForm" method="POST">
        @csrf
        <div class="confirmDeleteModal">
            <h1>Delete Account Confirm ?</h1>
            <button type="submit">Delete Account</button>
            <a class="cancelDelete">Cancel</a>
        </div>
    </form>
    
</div>

@endsection