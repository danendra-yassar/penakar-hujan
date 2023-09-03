<?php
    // filename: koneksi.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "hujan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Create connection CURD
    $koneksi = mysqli_connect("localhost","root","","hujan");

    // Check connection
    if($conn == false) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>