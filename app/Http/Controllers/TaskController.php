<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Simulasi data task sederhana (tanpa database)
    private $tasks = [
        ['id' => 1, 'title' => 'Belajar Laravel', 'description' => 'Pelajari dasar Laravel'],
        ['id' => 2, 'title' => 'Buat aplikasi task manager', 'description' => 'Implementasi CRUD'],
    ];

    public function index()
    {
        $tasks = $this->tasks;
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Simulasi penyimpanan data (sebenarnya harus ke database)
        // Redirect ke halaman task index dengan pesan sukses
        return redirect()->route('task.index')->with('success', 'Task berhasil dibuat!');
    }

    public function edit($id)
    {
        $task = collect($this->tasks)->firstWhere('id', $id);
        if (!$task) {
            abort(404);
        }
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        // Validasi sederhana
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Simulasi update data
        return redirect()->route('task.index')->with('success', 'Task berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Simulasi hapus data
        return redirect()->route('task.index')->with('success', 'Task berhasil dihapus!');
    }
}
