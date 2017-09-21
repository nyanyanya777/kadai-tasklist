@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
      
{{!! link_to_route('tasks.create', "登録する")  !!}}

  @if (count($tasks) > 0)
    <ul>
      @foreach($tasks as $task)
        <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content  }} {{ $task->status }}</li>
      @endforeach
    </ul>
  @endif
  
    </div>
  </div>
</div>

@endsection