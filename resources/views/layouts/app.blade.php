<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">


            <li>
                <a href="/" class="p-3">Home</a>
            </li>

            <li>
                <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a  class="p-3" href="{{route('posts')}}">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="#" class="p-3 b">{{auth()->user()->name}}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type='submit' class="p-3">Log out</button>

                    </form>

                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                <li>
                    <a class="p-3" href="{{ route('login') }}">Log in</a>
                </li>
            @endguest
        </ul>





    </nav>
    @yield('content')

</body>

</html>
