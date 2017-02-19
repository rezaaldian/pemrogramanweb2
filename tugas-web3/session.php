<?php
include('koneksi.php');
session_start();
$user_check = $_SESSION['username'];
$mysql_query = "select * from user where username = '$user_check' ";
$row = mysql_fetch_array(mysql_query($mysql_query));
$session_name = $row['nama'];
if(!isset($_SESSION['username'])){
header("location:index.php");
}
?>