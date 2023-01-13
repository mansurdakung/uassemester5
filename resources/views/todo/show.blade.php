@extends('layout.app')
@section('content')

<h1>detail todo</h1>
	<p>judul : {{ $todo->judul }}</p>
	<a href="{{route('todo.index')}}" type="submit">kembali</a>
	@endsection