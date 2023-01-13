@extends('layout.app')
@section('content')
@include('layout/pesan')
<h1>tambah todo</h1>
	<form action="{{route('todo.store') }}" method="post">
		@csrf
		judul : <input type="text" name="judul">
		@error('judul')
		<strong>{{$message}}</strong>
		@enderror
		<button type="submit">save</button>
	</form>
	<a href="{{route('todo.index')}}" type="submit">kembali</a>
	@endsection