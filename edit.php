<?php 
 
include("config.php"); 
 
// kalau tidak ada nim di query string  
if (!isset($_GET['nim'])) {
 header('Location: edit.php'); 
} 
 
//ambil nim dari query string 
$nim = $_GET['nim']; 
 
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim"; 
$query = mysqli_query($koneksi, $sql); 
$siswa = mysqli_fetch_assoc($query); 
 
// jika data yang di-edit tidak ditemukan 
if( mysqli_num_rows($query) < 1 )
{     
die("data tidak ditemukan..."); } 
 
?> 
<!DOCTYPE html> 
<center>
<html> 
<head>     
	<title>Formulir Edit data mahasiswa</title> 
</head> 
 
<body>     

	<form action="proses_edit.php" method="POST" > 
   <fieldset>
   <legend align="center"><h2>Formulir Edit mahasiswa</h2></legend>  
  <input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>" "/>  
 
        <p
		<label for="nim">nim: </label>             
		<input type="text" name="nim" placeholder="nim" value="<?php 
		echo $siswa['nim'] ?>" />        
	
		</p>

		<p>             
		<label for="nama_lengkap">nama lengkap: </label>             
		<input type="text" name="nama_lengkap" placeholder="nama lengkap" value="<?php 
		echo $siswa['nama_lengkap'] ?>" />        
		</p>
		
		<p>             
		<label for="tempat_lahir">tempat lahir: </label>             
		<input type="text" name="tempat_lahir" placeholder="tempat lahir" value="<?php 
		echo $siswa['tempat_lahir'] ?>" />        
		</p>
		
		<p>             
		<label for="tanggal_lahir">tanggal lahir: </label>             
		<input type="date" name="tanggal_lahir" placeholder="tanggal lahir" value="<?php 
		echo $siswa['tanggal_lahir'] ?>" /> 		
		</p>
		
		<p>             
		<label for="alamat">alamat: </label>             
		<input type="text" name="alamat" placeholder="alamat" value="<?php 
		echo $siswa['alamat'] ?>" />  
		</p>

	   <p>             
		<label for="jurusan">jurusan: </label>             
		<input type="text" name="jurusan" placeholder="jurusan" value="<?php 
		echo $siswa['jurusan'] ?>" />        
		</p>	
		
		<p>             
		<label for="email">email: </label>             
		<input type="email" name="email" placeholder="email" value="<?php 
		echo $siswa['email'] ?>" />        
		</p>
		
		<p>             
		<label for="no_hp">no_hp: </label>             
		<input type="number" name="no_hp" placeholder="no hp" value="<?php 
		echo $siswa['no_hp'] ?>" />        
		</p>

	<p>             
	<input type="submit" value="Simpan" name="simpan" />        
	</p> 
		  </fieldset>
    </form> 
    </body> 
	</html>
</center>