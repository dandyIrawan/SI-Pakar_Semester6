<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="welcome.php"><button type="button" class="btn btn-succes btn-block active">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-succes btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-succes btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-succes btn-block">ABOUT</button></a></p>
      <br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
      <p>  <a href="welcome.php"><button type="button" class="btn btn-primary btn-block">KEMBALI</button></p>
    </div>
    <div class="col-sm-8 text-left" > 
      <center><h2>SISTEM PAKAR DETEKSI DINI MYELOPROLIFERATIVE SYNDROME
</h2></center><br>
        <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <p align=justify>Penyakit mieloproliferatif (biasa dikenal neoplasma mieloproliferatif) merupakan sekelompok penyakit kanker darah langka dimana kelebihan sel darah merah, 
                    sel darah putih atau trombosit diproduksi di sumsung tulang. Myelo mengacu pada sumsung tulang, prolifetarif menggambarkan pertumbuhan sel darah yang cepat dan neoplasama 
                    menggambarkan pertumbuhan yang tidak normal. Ada beberapa jenis penyakit yakni penyakit polisitemia vera (PV), trombositemia esensial (TE), mielofibrosis idiopatik kronik 
                    dengan metaplasia mieloid / MMM, sindroma hipereosinofilik/ SHE. Sementara klasifikasi WHO menyatakan bahwa leukemia mielogenous kronik / LMK dan leukemia netrofilik kronik
                    juga termasuk dalam kriteria kelompok penyakit ini.</p> <p>Dari latar belakang tersebut maka diperlukan sebuah sitem identifikasi berdasarkan sel darah untuk membantu pihak	
                    medis	dalam	mendeteksi dini pada penyakit myeloproliferative syndrome.</p>
            </div>
        </div>
      
    </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-succes btn-block" method="post"> Login</button>
          </form>     
            
        </div>
      </div>
        
        
   
        
    </div>
  </div> 

<footer class="container-fluid text-center">
</br></br> <p>Teknik Informatika - Politeknik Negeri Jember</p></br>
  <p></p>
</footer>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
