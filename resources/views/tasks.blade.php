<?php
?>
@extends('layouts.app')

@section('content')
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li class="table-text">
                    <div class="nametask">{{ $task->taskname }}</div>
                    <form action="{{ url('task/'.$task->id) }}" method="POST" class="deltask">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="but">Delete Task</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

<div class="panel-body">
    <form action="{{url('task')}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
        <div class="form-group">
            <h2>My To Do List</h2>
                <input placeholder = "Doing..." type="text" name="name" class="form-control" id="task-name">
                <button type="submit" class="btn btn-default">
                    Add Task
                </button>
        </div>
    </form>
</div>