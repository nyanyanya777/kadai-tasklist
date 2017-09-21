@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

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

    </div>
  </div>
</div>


@endsection