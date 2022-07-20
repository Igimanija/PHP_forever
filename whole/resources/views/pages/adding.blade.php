@extends('layouts.app')

@section('header')
    <div class="header">
    <h1>Add item to do list</h1>
    </div>
@endsection
@section('body')
<a href="../">
    <button>back</button>
</a>

<form method="get" style="zoom: 200%; padding: 20px;">
    <label for="title">Title:</label>
    <input type="text" name="title"><br>
    <label for="priority">Priority:</label>
    <input type="number" name="priority"><br>
    <label for="done">Done:</label>
    <input type="boolean" name="done"><br>
    <input type="submit" value="Submit">
</form> 
@php
if (!empty($_GET)) {
    $request = new Request([
        'title' => $_GET['title'],
        'priority' => $_GET['priority'],
        'done' => $_GET['done'],
    ]);
    App\Http\Controllers\TodoController:: store($request);
}
@endphp
@endsection