<?php 
$koneksi = mysqli_connect(
	getenv("MYSQL_SERVICE_NAME"),
	getenv("MYSQL_USER"),
	getenv("MYSQL_PASSWORD"),
	getenv("MYSQL_DATABASE"));

// echo getenv("MYSQL_SERVICE_NAME");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
