<?php 
$koneksi = mysqli_connect("db-kirom","user","pass","opdb");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
