<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>

        <link rel="stylesheet" href="{{ asset('css/shared.css') }}" />
    </head>
    <body>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Home    
                    </a>
                </li>

                <li>
                    <a href="{{ route('events') }}">
                        Events
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="{{ route('profile') }}">
                        Anders
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>

        @yield('content')

    </body>
</html>
