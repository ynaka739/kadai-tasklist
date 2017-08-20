@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    <h1>タスクの新規作成</h1>
     {!! link_to_route('tasks.create', '新規作成ページへのリンク', ['id' => $task->id]) !!}

@endsection