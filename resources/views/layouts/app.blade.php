<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Task Manager') }}</title>

    <!-- Styles (gunakan Tailwind CSS atau Bootstrap sesuai kebutuhan) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between">
        <a href="{{ route('task.index') }}" class="font-bold text-xl">Task Manager</a>
        <div>
            <a href="{{ route('task.index') }}" class="mr-4 hover:underline">Tasks</a>
            <a href="{{ route('task.create') }}" class="hover:underline">Create Task</a>
        </div>
    </div>
</nav>

<main class="container mx-auto mt-6">
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>
</body>
</html>
