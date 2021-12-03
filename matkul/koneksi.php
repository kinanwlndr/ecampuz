<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kuliah";

$db = mysqli_connect("localhost","root","","kuliah");
// Check connection
if ( !$db ){
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>