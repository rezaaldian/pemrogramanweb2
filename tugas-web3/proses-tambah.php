<?php
include "koneksi.php"; //panggil file koneksi.php yang telah dibuat
 //mengambil variabel yang dikirim oleh index.php
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $alamat=$_POST['alamat'];
 
 $query="insert into mahasiswa values('','$nama','$nim','$alamat')";
 $exe=mysql_query($query);
 
 echo "<h5>data berhasil diinput<h5>";
    echo"<a href='tambah.php'>Input Lagi</a></br>";
    echo"<a href='halamanawal.php'>Lihat Hasil Input</a>";
?>