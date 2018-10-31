@extends('layout.app')

@section('content')
	<a href="/">Go Back</a>
	
	<h3>{{$todo->tetx}}</h3>
	<div class="label label-danger">{{$todo->due}}</div>
	<hr>
	<p>{{$todo->body}}</p>
	<br><br>
	<a href="/todo/{{$todo->id}}/edit" class="btn btn-default">edit</a>

@endsection