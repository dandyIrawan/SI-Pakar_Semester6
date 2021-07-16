<?php

include "koneksi.php";


	//Pertama ambil data kiriman dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$username= $_POST['username'];
$password=$_POST['password'];

//Query input menginput data kedalam tabel anggota
$query="insert into user (nama,email,username,password) values
('$nama','$email','$username','$password')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($konek_db,$query);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data berhasil di Tambah'); window.location=('welcome.php');</script>";
}
else {
echo "<script>alert('Data gagal di Tambah'); window.location=('registrasi.php');</script>";
exit;
}  
?>