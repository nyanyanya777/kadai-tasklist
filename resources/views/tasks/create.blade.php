@extends('layouts.app')

@section('content')

  <h1>メッセージ投稿ページ</h1>
  
  {!! Form::model($task, ['route' => 'tasks.store']) !!}
  
    {!! Form::select('status', [
      'hurry' => 'hurry',
      'soso' => 'soso',
      'anytime' => 'anytime']
    ) !!}</br>
    {!! Form::label('content', 'やること') !!}
    {!! Form::text('content') !!}
     
  {!! Form::submit('投稿') !!}
     
  {!! Form::close() !!}



@endsection