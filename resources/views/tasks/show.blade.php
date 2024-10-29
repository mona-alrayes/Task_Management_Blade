@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>

    <div class="card">
        <div class="card-header">{{ $task->title }}</div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $task->description }}</p>
            <p><strong>Due Date:</strong> {{ $task->due_date }}</p>
            <p><strong>Status:</strong> {{ $task->status }}</p>
        </div>
    </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to Tasks</a>
</div>
@endsection
