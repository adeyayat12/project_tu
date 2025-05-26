@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Task</h1>

    @if(count($tasks) > 0)
        <table class="min-w-full bg-white shadow rounded">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $task['id'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $task['title'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $task['description'] }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('task.edit', $task['id']) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                        <form action="{{ route('task.destroy', $task['id']) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus task ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada task.</p>
    @endif
@endsection
