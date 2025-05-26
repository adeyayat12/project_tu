<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Mengembalikan view index.blade.php di folder task
        return view('task.index');
    }

    public function create()
    {
        // Mengembalikan view create.blade.php di folder task
        return view('task.create');
    }

    public function store(Request $request)
    {
        // Logika menyimpan task baru
    }

    public function edit($id)
    {
        // Mengembalikan view edit.blade.php di folder task
        return view('task.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Logika update task
    }
}
