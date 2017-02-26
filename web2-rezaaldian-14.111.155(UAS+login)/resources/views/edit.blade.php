@extends('layout.temp')
@section('content')
		<table border="1" width="60%" align="center">
			<tr>
				<th><align ="center" colspan="2">Ubah data</th>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Nama</strong></td>
			  <td><Input style="text" name="nama" size="80" value="" /></td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>NIM</strong></td>
			  <td><input type=" text" name="nim" size="80" value=""></td>
			</tr>
			<tr>
				<td bgcolor="green"><strong>Alamat</strong></td>
			  <td><input type=" text" name="alamat" size="80"value=""></td>
			</tr>
				<td colspan="2" align="right"><input type="submit" name="btn-edit" value="Simpan" /> <input type="submit" value="Batal" name="btn-batal" /></td>
			</tr>
		</table>
	</form>
@stop