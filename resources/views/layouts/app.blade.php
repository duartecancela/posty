<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}"
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li class="flex items-center">
                    <a href="" class="p-3">Home</a>
                </li>
                <li class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li class="flex items-center">
                    <a href="" class="p-3">Posts</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @auth
                    <li class="flex items-center">
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="flex items-center">
                        <form action="{{ route('logout') }}" method="post" class="inline p-3">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="flex items-center">
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li class="flex items-center">
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
