@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    
    <!-- Button to create a new task -->
    @if(auth()->user()->name === 'admin')
        <div class="mb-3">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
        </div>
    @endif

    <!-- Task Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>User_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->user_id }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">View</a>
                        @if(auth()->user()->name === 'admin')
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No tasks found. <a href="{{ route('tasks.create') }}">Create a new task</a></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
