<?php
//koneksi ke database 
$koneksi = mysqli_connect("localhost","root","","db_mahasiswa");

if(mysqli_connect_errno()){
	echo "gagal melakukan koneksi ke mysql:". mysqli_connect_error();
	}
	?>