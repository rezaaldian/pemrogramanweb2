@extends('layout.temp')
@section('content')
	<table border="1" width="75%" align="center">
		<tr>
			<th><a href="{{ route('home.create') }}"><button type="submit">+ Tambah</button></a></th>
		</tr>
		<tr bgcolor="green">
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		@foreach($mahasiswas as $mahasiswa)
		<tr>
			<td>{{$mahasiswa->id}}</td>
			<td>{{$mahasiswa->nama}}</td>
			<td>{{$mahasiswa->nim}}</td>
			<td>{{$mahasiswa->alamat}}</td>
			<td>
			<form method="POST" action="{{ route('home.destroy', $mahasiswa->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('home.edit', $mahasiswa->id) }}">Edit</a> | 
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" />
	            </form>
			</td>	
		</tr>
	@endforeach
	
	</table>	
@stop