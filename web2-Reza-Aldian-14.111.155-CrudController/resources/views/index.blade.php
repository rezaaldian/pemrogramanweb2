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
<form method="post">
<table width="60%" align="center">
<tr>
<th align ="center" colspan="2">LOGIN<a href="daftar.php">-daftar</a></th>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" size="80"></td>
</tr>
<tr>
	<td>Password</td>
<td><input type="password" name="password" size="80"></td>
</tr>	
<tr>
<td colspan="2" align="right"><input type="submit" value="login" name="login"> <input type="submit" value="batal" name="batal"></td>
</tr></table>
</form>  
	</article>
	<footer>Reza Aldian H - 14.111.155</footer>
</div>
</body>
</html>