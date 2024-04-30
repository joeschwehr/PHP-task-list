@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    @forelse ($tasks as $task)
        <div class='mb-1'>
            <a href="{{ route('tasks.show', $task->id) }}"
            @class('bg-gray-100 p-1 cursor-pointer hover:bg-gray-200 transition-all', ['line-through' => $task->completed]) >{{ $task->title }}</a> 
        </div>
    @empty
        <p>No tasks found</p>
    @endforelse

    <nav class="flex items-center justify-between invisible absolute">
        <div class="flex justify-between flex-1 sm:hidden">
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md ">
                « Previous
            </span>
            <a href="http://127.0.0.1:8000/tasks?page=2" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 ">
                Next »
            </a>
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5 ">
                    Showing
                    <span class="font-medium">1</span>
                    to
                    <span class="font-medium">10</span>
                        of
                    <span class="font-medium">25</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    
                    <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                        <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5  aria-hidden="true">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            </svg>
                        </span>
                    </span>
                        
                    <span aria-current="page">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                    </span>
                    <a href="http://127.0.0.1:8000/tasks?page=2" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2">
                        2
                    </a>
                    <a href="http://127.0.0.1:8000/tasks?page=3" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 3">
                        3
                    </a>
                                                                                                        
                    <a href="http://127.0.0.1:8000/tasks?page=2" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 " aria-label="Next &amp;raquo;">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </nav>

    <nav class='mb-8 mt-12'>
        <a href="{{ route('tasks.create') }}" class='btn'>Add task</a>
    </nav>

    @if ($tasks->count())
        <nav class='mt-4'>
            {{ $tasks->links() }}
        </nav>
    @endif


    @endsection


