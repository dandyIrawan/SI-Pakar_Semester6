<?php  
//membuat koneksi ke database  
$host = 'localhost';  
  $user = 'root';        
  $password = '';        
  $database = 'sip';    
      
  $konek_db = mysqli_connect($host, $user, $password, $database);
  if (!$konek_db){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>