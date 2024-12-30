@extends('layouts.app')

@section('title', "List of Tasks")
{{-- <h1>
    List of Tasks
</h1> --}}

@section('content')
<div>
    {{-- @if(count($tasks))
    <div>There are tasks</div>
    <br>
    @foreach($tasks as $task)
    <div>{{$task->title}}</div>
    @endforeach
    <br>
    @else
    @endif --}}
    {{-- @forelse ($tasks as $task)
    <div>{{$task->title}}</div>
    @empty
    <div>There are No Tasks</div>
    @endforelse --}}

    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['id'=> $task->id])}}">{{$task->title}}</a>
    </div>
    @empty
    <div>There are No Tasks</div>
    @endforelse

</div>
@endsection