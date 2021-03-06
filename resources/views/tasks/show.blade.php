@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    
    <p>タイトル: {{ $task->title }}</p>
    <p>タスク: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit','このタスクを編集',['id' => $task->id])!!}
    
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection