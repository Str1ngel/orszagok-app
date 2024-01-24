<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Országok</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ourstyle.css') }}">
</head>

<body>
    <header class="d-flex align-items-center justify-content-center text-white fw-bolder">
        <h1>Világ országai</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontinens/5">Kontinensek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orszagok/5">Országok</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container fs-5">
        @yield('content')
    </main>
    <footer>
        <hr>
        <p class="text-center">Svecov Szergej - 14.SZ</p>
    </footer>
</body>

</html>
