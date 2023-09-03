<?php 

include 'koneksi.php';

$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));
$lima = $_POST['lima'];
$sepuluh = $_POST['sepuluh'];
$limabelas = $_POST['limabelas'];
$tigapuluh = $_POST['tigapuluh'];
$empatlima = $_POST['empatlima'];
$enampuluh = $_POST['enampuluh'];
$seratusduapuluh = $_POST['seratusduapuluh'];
$tigajam = $_POST['tigajam'];
$enamjam = $_POST['enamjam'];
$duabelasjam = $_POST['duabelasjam'];

mysqli_query($koneksi, "UPDATE hujan SET lima='$lima', sepuluh='$sepuluh', limabelas='$limabelas' , tigapuluh='$tigapuluh', empatlima='$empatlima', enampuluh='$enampuluh', seratusduapuluh='$seratusduapuluh' , tigajam='$tigajam', enamjam='$enamjam' , duabelasjam='$duabelasjam' WHERE tanggal='$tanggal'");

header("location:index.php?pesan=update");
?>