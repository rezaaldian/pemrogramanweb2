@extends('layout.temp')
@section('content')
		{!! Form::model($mahasiswas, ['route'=>['home.update', $mahasiswas->id], 'method'=> 'PATCH'])  !!}
		<table border="1" width="40%" align="center">
			<tr>
				<th align ="center" colspan="4">edit data</th>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Nama</strong></td>
				<td>{!! Form::text('nama', null) !!}</td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>NIM</strong></td>
				<td>{!! Form::text('nim', null) !!}</td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Alamat</strong></td>
				<td>{!! Form::text('alamat', null) !!}</td>
			</tr>
			<tr>
				<td colspan="2" align="right">{!! Form::submit('Ubah') !!}</td>
			</tr>
		</table>
{!! Form::close() !!}
@stop