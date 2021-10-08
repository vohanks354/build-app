<?php 
$koneksi = mysqli_connect("DATABASE_SERVICE_NAME","opuser","oppass","opdb");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
