@extends('layout.temp')
@section('content')

	<table>
		<tr>
			<td><label>Username :</label></td>
			<td><input id="name" name="username" placeholder="username" type="text"></td>
		</tr>
		<tr>
			<td><label>Password :</label></td>
			<td><input id="password" name="password" placeholder="**********" type="password"></td>
		</tr>
		<tr colspan="2">
			<td><a href="{{URL::to('/halamanawal')}}"><input type="button" type="submit" value="LOGIN"></input></a></td>
		</tr>
	</table>
</form>
@stop