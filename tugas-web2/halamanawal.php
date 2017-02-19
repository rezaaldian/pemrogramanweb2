<?php
include_once 'koneksi.php';
	if (isset($_GET['delete_id'])) {
		$sql_query = "DELETE FROM mahasiswa WHERE no=".$_GET['delete_id'];
		mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
	}
?>
<!DOCTYPE HTML>
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
<script>
	function edit_id(id) {
		if (confirm('sure to edit?')) {
			window.location.href = 'edit.php?edit_id='+id;
	}
	}
	function delete_id(id) {
		if (confirm('sure to delete?')) {
			window.location.href = 'halamanawal.php?delete_id='+id;
		}
	}
	</script>
	
</HEAD>
<body>
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
				<th><a href="tambah.php"><button type="submit">+ TAMBAH</button></a></th>
			</tr>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
				<td>Aksi</td>
			</tr>
			<?php
			$sql_query = "SELECT * FROM mahasiswa";
			$result_set = mysql_query($sql_query);
			
			if (mysql_num_rows($result_set) > 0) {
				while ($row = mysql_fetch_row($result_set)) {
					?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><a href="javascript:edit_id('<?php echo $row[0]; ?>')
				">EDIT</a></td>
				<td><a href="javascript:delete_id('<?php echo $row[0]; ?>')
				">DELETE</a></td>
				</tr>
				<?php
				}
			}
			else {
				?>
				<tr>
					<td colspan="6"> Data tidak ditemukan.</td>
					</tr>
					<?php
			}
			?>
				
				
		</table>
	</article>
	<footer>Reza Aldian H - 14.111.155</footer>
</div>
</body>
</html>