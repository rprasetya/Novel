<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velshelf Apps</title>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>    
    <nav>
        <ul>
            <li><a class="text-dark" href="/">Home</a></li>
            <li><a class="text-dark" href="/bookshelf">Bookshelf</a></li>
            <li><a class="text-dark" href="/contact">Contact</a></li>
            @guest
            <li><a class="text-dark" href="/login">Sign In</a></li>   
            @endguest
        </ul>
    </nav>
</header>
<main>
    @auth
    <div class="profileLoginCont">
        <a href="/dashboard">
            <div class="logoProfile">
                <img src="https://img.icons8.com/ios/100/gender-neutral-user--v1.png" alt="gender-neutral-user--v1"/>
            </div>
            <div class="profileLogin">
                <span>{{ auth()->user()->fullName }}</span>
                <small>{{ auth()->user()->username }}</small>
                <span>{{ auth()->user()->email }}</span>
            </div>
        </a>
    </div>                
    @endauth
    @yield('content')
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>