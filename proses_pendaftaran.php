<?php 
include("config.php"); 
// cek apakah tombol daftar sudah diklik atau blum? 
if(isset($_POST['daftar'])){ 
 
    // ambil data dari formulir     
	$nim 			= $_POST['nim'];    
	$nama_lengkap 	= $_POST['nama_lengkap']; 
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir']; 
	$alamat 		= $_POST['alamat'];
	$jurusan 		= $_POST['jurusan'];
	$email 			= $_POST['email']; 
 	$no_hp	        = $_POST['no_hp']; 
 
    // buat query     
	$sql = "INSERT INTO mahasiswa (nim, nama_lengkap, tempat_lahir, tanggal_lahir, alamat, jurusan, email, no_hp ) 
			VALUE ('$nim', '$nama_lengkap','$tempat_lahir','$tanggal_lahir', '$alamat','$jurusan','$email','$no_hp' )";     
	$query = mysqli_query($koneksi, $sql); 
 
    // apakah query simpan berhasil?      
	if( $query ) {         
	
// kalau berhasil alihkan ke halaman index.php dengan status=sukses         
header('Location: index.php?status=sukses');     

} else {        
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal        
 header('Location: index.php?status=gagal');
}
 } else {     
	die("Akses dilarang..."); 	
}

?> 