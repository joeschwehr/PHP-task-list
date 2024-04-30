@extends('layouts.app')

@section('title', isset($task) ? 'Edit task' : 'Add task')

@section('styles')
    <style>
        .error {
            color: red;
            font-size: .7rem;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="post">
        @csrf
        @if (isset($task))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title')}}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{$task->description ?? old('description')}}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="long_description">Long description</label>
            <textarea name="long_description" id="long_description" rows='10'>{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="btn">{{isset($task) ? "Edit" :"Add"}} Task</button>
            <a href="{{ url()->previous() }}" class="btn">Cancel</a>
        </div>
    </form>
@endsection