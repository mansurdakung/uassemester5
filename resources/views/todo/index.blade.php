y@extends('layout.app')
@section('content')
<h1>data todo</h1>
@include('layout/pesan')
	<table border="1">
		<thead>
			<tr>
				<th>no</th>
				<th>judul</th>
				<th><a href="{{route('todo.create') }}">tambah data</a></th>
			</tr>

		</thead>

	<tbody>
	@php $no = 1; @endphp
	@foreach ($todo as $data)
			<tr>
				<td>{{$no++}}</td>
				<td><a href="{{route('todo.show', $data->id) }}">{{ $data->judul }}</a></td>

				<td>
					<form action="{{route('todo.destroy', $data->id) }}" method="post">
						@csrf
						@method('delete')
						<a href="{{route('todo.edit', $data->id) }}">edit</a>
						<button type="submit" onclick="return confirm('apakah anda yakin')">delete</button>
					</form>
				</td>
			</tr>
			@endforeach
</tbody>
</table>
@endsection