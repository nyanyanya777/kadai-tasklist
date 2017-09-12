@extends('layouts.app')

@section('content')

  <h1>{{ $task->id }}の詳細ページ</h1>
  
  <p>{{ $task->content }}</p>
  
   {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $task->id]) !!}
  
@endsection