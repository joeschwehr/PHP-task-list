@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <nav class='mb-4 mt-8'>
        <a href="{{ route('tasks.index') }}" class='btn'>👈 Go Back</a>
    </nav>

    <p class='mt-8'>{{ $task->description }}</p>
<!-- 
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif -->

    <p class="mb-2 text-slate-500 text-xs">Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}</p>

    <div class="flex gap-2">
        <p class='mb-8'>
        @if($task->completed)
            <span class='bg-green-100 text-green-800 rounded-full px-2 py-1 text-xs font-medium'>Completed</span>
        @else
            <span class='bg-red-100 text-red-800 rounded-full px-2 py-1 text-xs font-medium'>Not completed</span>
        @endif
    </div>
    
    <div class="flex gap-2">
        <a href="{{ route('tasks.edit', $task->id) }}" class='btn'>Edit</a>
        <!-- toggle complete form -->
        <form action="{{ route('tasks.toggle-complete', $task) }}" method="POST">
            @method('PUT')
            @csrf
            <button type="submit" class='btn'>
                {{ $task->completed ? 'Mark as not completed' : 'Mark as completed' }}
            </button>
        </form>
        <!-- delete form -->
        <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class='btn'>Delete</button>
        </form>
    </div>
@endsection





