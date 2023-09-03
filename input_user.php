<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$password = $_POST['password'];
 
mysql_query("INSERT INTO user VALUES('','$nip','$nama','$jabatan','$email','$password')");
 
header("location:index.php?page=data");
?>