@extends('layout.app')
@section('content')
@include('layout/pesan')
<h1>edit todo</h1>
	<form action="{{route('todo.update') }}" method="post">
		@csrf
		@method('put')
		judul : <input type="text" name="judul" value="{{$todo->judul}}">
		@error('judul')
		<strong>{{$message}}</strong>
		@enderror
		<button type="submit">update</button>
	</form>
	<a href="{{route('todo.index')}}" type="submit">kembali</a>
	@endsection