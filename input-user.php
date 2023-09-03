<?php 

include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$password = $_POST['password'];
 
$prosescek= mysqli_query($conn, "SELECT * FROM user WHERE nip='$_POST[nip]'");     
    if (mysqli_num_rows($prosescek) > 0) {
        echo '<script language="javascript">
              alert ("NIP telah terdaftar di dalam database");
              window.location="index.php?page=form-input-user";
              </script>';
        exit();
    }
    
    else{
        mysqli_query($conn, "INSERT INTO user VALUES('','$nip','$nama','$jabatan','$email','$password')");
		header("location:index.php?page=data-user");
    }
?>