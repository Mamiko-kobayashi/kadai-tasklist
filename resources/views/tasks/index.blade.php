@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if(count($tasks) > 0)
    
        @foreach($tasks as $task)
            <li>{!! link_to_route('tasks.show',$task->id,['id'=>$task->id]) !!}:{{ $task -> content }}>{{ $task -> status }}</li>
        @endforeach
        
    @endif
    
    {!! link_to_route('tasks.create','新規タスクの作成') !!}


@endsection