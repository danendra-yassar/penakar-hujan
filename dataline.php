<?php
$con=mysqli_connect("localhost","root","","penakar_hujan");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

// Data for Sugar
$query = mysqli_query($con,"SELECT lima_mnt FROM data_hujan");
$rows = array();
$rows['name'] = 'lima_mnt';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['lima_mnt'];
}

// Data for Rice
$query = mysqli_query($con,"SELECT sepuluh_mnt FROM data_hujan");
$rows1 = array();
$rows1['name'] = 'sepuluh_mnt';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['sepuluh_mnt'];
}

// Data for Wheat Flour
$query = mysqli_query($con,"SELECT lima_belas FROM data_hujan");
$rows2 = array();
$rows2['name'] = 'lima_belas';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['lima_belas'];
}

$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 