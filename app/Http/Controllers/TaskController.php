<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Task\DestroyTask;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Auth;
class TaskController extends Controller
{

    public function index()
    {
        // get all data from tasks table
        $data = Task::all();
        return response(['data' => $data]);
    }

    public function storeTask(Request $request)
    {
//        validate your request
        $validator = $request->validate([
            'label' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'due_date' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        try {
            if ($validator) {
                $task = new Task();
                $task->label = $request->label;
                $task->color = $request->color;
                $task->description = $request->description;
                $task->due_date = $request->due_date;
                $task->user_id = $request->user_id;
                $task->status = $request->status;
                $task->icon = json_encode($request->icon);
                $task->save();
                return response(['message' => 'Task added successfully']);
            } else {
                return response(['message' => 'Task not added!']);
            }
        }
        catch (Exception $e)
        {
            return response(['message' => 'Something went wrong!']);

        }
    }

    public function destroy($taskId)
    {
//        check user is logging in
        $user=Auth::user();
        if ($user) {
            $task = Task::whereId($taskId)->delete();
            return response(['message' => 'Task deleted Successfully!']);
        }
        else{
            return response(['message' => 'You are not authorize to delete this!']);
        }
    }
}
