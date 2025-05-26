<?php

public function index()
{
$tasks = Task::all();
return view('tasks.index', compact('tasks'));
}
