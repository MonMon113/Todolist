<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::select('SELECT name, id '
        . 'FROM tasks '
        . 'WHERE user_id = ? '
        . 'ORDER BY created_at ASC ', [Auth::id()]);
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
}
