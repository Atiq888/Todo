@extends('layout.app')

@section('content')
<a href="/" class="btn btn-primary">Go Back</a>
	<h1>Edit Todo</h1>
	{!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'POST']) !!}
    	{{ Form::bsText('text',$todo->tetx) }}
    	{{ Form::bsTextArea('body',$todo->body) }}
    	{{ Form::bsText('due',$todo->due) }}
    	{{ Form::hidden('_method','PUT') }}
    	{{ Form::bsSubmit('Submit',['class'=>'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection