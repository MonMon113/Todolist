<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Task;

class TasksController extends Controller {
    public function index() {
        $tasks = DB::select('SELECT name, id '
        . 'FROM tasks '
        . 'WHERE user_id = ? '
        . 'ORDER BY created_at ASC ', [Auth::id()]);
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function getTask(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
        ]);
        if($validator->fails()){
            return redirect('/task')
                ->withInput()
                ->withErrors($validator);
        }
    
        $task = new Task;
        $task->name = $request->name;
        $task->user_id = Auth::id();
        $task->save();
        return redirect('/task');
    }

    public function deleteTask($id) {
        Task::findOrFail($id)->delete();
    
        return redirect('/task');
    }
}