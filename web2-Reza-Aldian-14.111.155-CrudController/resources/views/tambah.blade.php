<html>
<HEAD>
	<title>KULIAH WEB</title>
<style>
div.container{
	width: 100%;
	border: 2px solid gray;
}
header, footer{
	padding: 1em;
	background-color: green;
	clear: left;
	text-align: center; 
}
nav{
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1em;
}
nav ul{
	list-style-type: none;
	padding: 0;
}
nav ul a{
	text-decoration: none;
}
article{
	margin-left: 170px;
	border-left: 1px solid gray;
	padding: 1em;
	overflow: hidden;
}
</style>
</HEAD>

<body>
<form name="input" method="POST" action="proses-tambah.php">
<form action="proses-tambah.php" method="post">
<div class="container">
	<header>
		<h1>CRUD Operation</h1>
	</header>
	<nav>
		<ul>
			<li><b>MENU</b></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
	</nav>
	<article>

		<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="80"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="80"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="80"></input></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" value="simpan">tambah</button></td>
			
			</tr>
		</table>
	</article>
	<footer>Reza Aldian H - 14.111.155</footer>
</div>
</form>
</body>
</html>