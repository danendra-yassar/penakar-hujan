<?php 

include 'koneksi.php';

$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));
$tujuh = $_POST['tujuh'];
$delapan = $_POST['delapan'];
$sembilan = $_POST['sembilan'];
$sepuluh = $_POST['sepuluh'];
$sebelas = $_POST['sebelas'];
$duabelas = $_POST['duabelas'];
$tigabelas = $_POST['tigabelas'];
$empatbelas = $_POST['empatbelas'];
$limabelas = $_POST['limabelas'];
$enambelas = $_POST['enambelas'];
$tujuhbelas = $_POST['tujuhbelas'];
$delapanbelas = $_POST['delapanbelas'];
$sembilanbelas = $_POST['sembilanbelas'];
$duapuluh = $_POST['duapuluh'];
$duasatu = $_POST['duasatu'];
$duadua = $_POST['duadua'];
$duatiga = $_POST['duatiga'];
$duaempat = $_POST['duaempat'];
$satu = $_POST['satu'];
$dua = $_POST['dua'];
$tiga = $_POST['tiga'];
$empat = $_POST['empat'];
$lima = $_POST['lima'];
$enam = $_POST['enam'];

mysqli_query($koneksi,"UPDATE hujanperjam SET tujuh='$tujuh', delapan='$delapan', sembilan='$sembilan' , sepuluh='$sepuluh', sebelas='$sebelas', duabelas='$duabelas', tigabelas='$tigabelas' , 
empatbelas='$empatbelas', limabelas='$limabelas' , enambelas='$enambelas' , tujuhbelas='$tujuhbelas', delapanbelas='$delapanbelas', sembilanbelas='$sembilanbelas' , duapuluh='$duapuluh', duasatu='$duasatu', duadua='$duadua',
duatiga='$duatiga' , duaempat='$duaempat', satu='$satu' , dua='$dua' , tiga='$tiga' , empat='$empat', lima='$lima' , enam='$enam' WHERE tanggal='$tanggal'" );

header("location:index.php?pesan=update");
?>