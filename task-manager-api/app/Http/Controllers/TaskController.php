<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;

class TaskController extends Controller
{
    // Obtener todas las tareas
    public function index()
    {
        return response()->json(['data' => Task::all()]);
    }

    // Crear una nueva tarea
    public function store(Request $request)
    {
        $task = Task::create($request->only(['title', 'description']));
        return response()->json(['data' => $task], 201);
    }

    // Actualizar una tarea
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $data = $request->only(['title', 'description', 'is_completed']);
        // Si no viene is_completed, alternar su valor
        if (!isset($data['is_completed'])) {
            $data['is_completed'] = !$task->is_completed;
        }
        $task->update($data);
        return response()->json(['data' => $task]);
    }

    // Eliminar una tarea
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Tarea eliminada']);
    }
}
