<?php 
 
include("config.php"); 
 
// cek apakah tombol simpan sudah diklik atau blum? 
if(isset($_POST['simpan'])){ 
 
    // ambil data dari formulir     
	$nim 			= $_POST['nim'];    
	$nama_lengkap 	= $_POST['nama_lengkap']; 
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir']; 
	$alamat 		= $_POST['alamat'];
	$jurusan 		= $_POST['jurusan'];
	$email 			= $_POST['email']; 
 	$no_hp			= $_POST['no_hp'];
	    
	 
	
 
    // buat query update    
	$sql = "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',
	jurusan='$jurusan', email='$email', no_hp='$no_hp', alamat='$alamat' WHERE nim=$nim";    
	$query = mysqli_query($koneksi, $sql); 
 
    // apakah query update berhasil?     
	if( $query ) {         
	// kalau berhasil alihkan ke halaman index.php         
	header('Location: index.php');     
	} else {         
	// kalau gagal tampilkan pesan         
	die("Gagal menyimpan perubahan...");     } 
 
} else {    
 die("Akses dilarang..."); } 
 
?>