@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">Welcome to Task Manager Application Where you can Create Task, Edit Task, View Task and Remove Task with using Controller and Model</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

@stop