<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'nullable|integer|min:1|max:3',
            'done' => 'boolean'
        ]);
        $data['title'] = $request->title;
        $data['priority'] = $request->priority;
        $data['done'] = $request->done;

        $todo = Todo::create($data);

        return response()->json([
            'status' => true,
            'message' => 'todo successfully created',
            'data' => $todo,
        ], 210);
    }

    public function index(Request $request)
    {
        $todos = Todo::all();
        return response()->json([
            'status' => true,
            'message' => 'list of all things that should be done',
            'data' => $todos,
        ]);
    }

    public function show(Request $request, $id)
    {
        $todo = Todo::find($id);
        return response()->json([
            'status' => true,
            'message' => 'todo item: ' . $id,
            'data' => $todo,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'done' => 'required|boolean'
        ]);

        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'status' => false,
                'message' => 'todo item: ' . $id . ' does not exist',
                'data' => null
            ], 404);
        }
        $todo->update($data);

        return response()->json([
            'status' => true,
            'message' => 'todo item: ' . $id . ' updated successfully',
            'data' => $todo
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json([
                'status' => false,
                'message' => 'todo item: ' . $id . ' does not exist',
                'data' => null
            ], 404);
        }
        $todo->delete();

        return response()->json([
            'status' => true,
            'message' => 'todo item: ' . $id . ' is deleted',
            'data' => null
        ]);
    }
}
