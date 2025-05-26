<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Task Manager') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Header -->
    <header class="bg-white shadow">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">
                Task Manager
            </a>

            <!-- Navigation Links -->
            <ul class="flex space-x-4">
                @auth
                    <li><a href="{{ route('tasks.index') }}" class="text-gray-800 hover:text-gray-600">Tasks</a></li>
                    <li><a href="{{ route('projects.index') }}" class="text-gray-800 hover:text-gray-600">Projects</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-800 hover:text-gray-600">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>© {{ date('Y') }} Task Manager. All rights reserved.</p>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
