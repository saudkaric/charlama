<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        @yield('css')
    </head>
    <body>

    <nav>
        <div>
            <a href="#"> Charlama </a>

            <div>
                <ul class="navbar-nav ms-auto">
                    <li> <a  href="#">Home</a> </li>
                    <li> <a href="#">About</a> </li>
                    <li> <a href="#">Contact</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

        
    @yield('js')
</body>
</html>