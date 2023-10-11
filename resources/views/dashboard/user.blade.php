@extends('layout.base')

@section('content')

<div class="dashboard">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</div>

@endsection