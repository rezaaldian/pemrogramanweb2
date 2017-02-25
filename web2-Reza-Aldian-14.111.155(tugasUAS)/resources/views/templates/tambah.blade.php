@extends('layout.temp')
@section('content')
		{!! Form::open(['route'=>'home.store'])  !!}
		<table border="1" width="30%" align="center">
			<tr>
				<th align ="center" colspan="2">Tambah data</th>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Nama</strong></td>
				<td>{!! Form::text('nama', null, ['placeholder' => 'Masukkan Nama']) !!}</td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>NIM</strong></td>
				<td>{!! Form::text('nim', null, ['placeholder' => 'Masukkan Nim']) !!}</td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Alamat</strong></td>
				<td>{!! Form::text('alamat', null, ['placeholder' => 'Masukkan alamat']) !!}</td>
			</tr>
			<tr>
				<td colspan="2" align="center">{!! Form::submit('Simpan') !!}</td>
			</tr>
		</table>
	
{!! Form::close() !!}
@stop