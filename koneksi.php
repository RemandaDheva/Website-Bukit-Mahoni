<?php
#koneksi ke database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "uas_web";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

#pengecekan
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

?>