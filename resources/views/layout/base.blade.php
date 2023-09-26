<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel Bookshelf</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>    
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/bookshelf">Bookshelf</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<title>
    
</title>
</body>
</html>