<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpassword = "";
$dbname= "jadi";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "";
?>