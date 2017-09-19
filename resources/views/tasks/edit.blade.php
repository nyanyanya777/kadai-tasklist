@extends('layouts.app')

@section('content')

  <h1>id = {{$task->id}}の編集ページ</h1>
  
  {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
  
     {!! Form::select('status', [
      'hurry' => 'hurry',
      'soso' => 'soso',
      'anytime' => 'anytime']
     ) !!}
     {!! Form::label('content', 'やること') !!}
     {!! Form::text('content') !!}
     
     {!! Form::submit('投稿') !!}
     
  {!! Form::close() !!}



@endsection