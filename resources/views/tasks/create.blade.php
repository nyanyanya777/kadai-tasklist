@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

  <h1>メッセージ投稿ページ</h1>
  
  {!! Form::model($task, ['route' => 'tasks.store']) !!}
  
    {!! Form::label('status', 'ステータス') !!}
    {!! Form::select('status', [
      '' => '選択してください',
      'hurry' => 'hurry', 
      'soso' => 'soso',
      'anytime' => 'anytime'],
      null,
      ["select class" => "form-control"]
    ) !!}</br>
    {!! Form::label('content', 'やること') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}</br>
    
  {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
     
  {!! Form::close() !!}
  
    </div>
  </div>
</div>


@endsection