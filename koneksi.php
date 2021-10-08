<?php 
$koneksi = mysqli_connect(
	getenv("MYSQL_SERVICE_NAME"),
	getenv("DATABASE_USER"),
	getenv("DATABASE_PASSWORD"),
	getenv("MYSQL_DATABASE"));

// echo getenv("MYSQL_SERVICE_NAME");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
