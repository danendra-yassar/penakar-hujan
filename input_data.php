<?
include 'koneksi1.php';

$tanggal = $_POST['tanggal'];

$lima_mnt = $_POST['lima_mnt'];
$sepuluh_mnt = $_POST['sepuluh_mnt'];
$limabelas_mnt = $_POST['limabelas_mnt'];
$tigapuluh_mnt = $_POST['tigapuluh_mnt'];
$empatlima_mnt = $_POST['empatlima_mnt'];
$enampuluh_mnt = $_POST['enampuluh_mnt'];
$srtsduaplh_mnt = $_POST['srtsduaplh_mnt'];
$tiga_jm = $_POST['tiga_jm'];
$enam_jm = $_POST['enam_jm'];
$duabelas_jm = $_POST['duabelas_jm'];

$tujuh_delapan = $_POST['tujuh_delapan'];
$delapan_sembilan = $_POST['delapan_sembilan'];
$sembilan_sepuluh = $_POST['sembilan_sepuluh'];
$sepuluh_sebelas = $_POST['sepuluh_sebelas'];
$sebelas_duabelas = $_POST['enam_jm'];
$duabelas_tigabelas = $_POST['enam_jm'];
$tigabelas_empatbelas = $_POST['enam_jm'];
$empatbelas_limabelas = $_POST['enam_jm'];
$limabelas_enambelas = $_POST['enam_jm'];
$enambelas_tujubelas = $_POST['enam_jm'];
$tujubelas_lapanbelas = $_POST['enam_jm'];
$lapanbelas_sembilanbelas = $_POST['enam_jm'];
$sembilanbelas_duapuluh = $_POST['sembilan_sepuluh'];
$duapuluh_duasatu = $_POST['enam_jm'];
$duasatu_duadua = $_POST['sembilan_sepuluh'];
$duadua_duatiga = $_POST['enam_jm'];
$duatiga_duaempat = $_POST['enam_jm'];
$duaempat_satu = $_POST['enam_jm'];
$satu_dua = $_POST['enam_jm'];
$dua_tiga = $_POST['enam_jm'];
$tiga_empat = $_POST['enam_jm'];
$empat_lima = $_POST['enam_jm'];
$lima_enam = $_POST['enam_jm'];
$enam_tuju = $_POST['enam_jm'];
 
mysql_query("INSERT INTO data_hujan VALUES('$tanggal','$lima_mnt','$sepuluh_mnt','$limabelas_mnt','$empatlima_mnt','$enampuluh_mnt'
,'$srtsduaplh_mnt','$tiga_jm','$enam_jm','$duabelas_jm','$tujuh_delapan','$delapan_sembilan','$sembilan_sepuluh','$sepuluh_sebelas'
,'$sebelas_duabelas','$duabelas_tigabelas','$tigabelas_empatbelas','$empatbelas_limabelas','$limabelas_enambelas','$enambelas_tujubelas'
,'$tujubelas_lapanbelas','$lapanbelas_sembilanbelas','$sembilanbelas_duapuluh','$duapuluh_duasatu','$duasatu_duadua','$duadua_duatiga'
,'$duatiga_duaempat','$duaempat_satu','$satu_dua','$dua_tiga','$tiga_empat','$empat_lima','$lima_enam','$enam_tuju')");
 
header("location:index.php?pesan=input");
?>