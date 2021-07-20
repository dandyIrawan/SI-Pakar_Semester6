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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<br>
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

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="welcome.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-succes btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-succes btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-succes btn-block">ABOUT</button></a></p>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN ADMIN</button></p>
      <p><a href="register.php"><button type="button" class="btn btn-succes btn-block">REGISTRASI</button></a></p>
      <p><a href="logout2.php"><button type="button" class="btn btn-succes btn-block">LOGOUT</button></a></p>
    
    </div>
    <div class="col-sm-8 text-left"> 
      <h2 class="text-center">DETAIL DIAGNOSA</h2>
      <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='".$data['idpenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">NAMA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='".$data['namapenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">JENIS :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenispenyakit' readonly value='".$data['jenispenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">GEJALA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='".$_GET['id']."' and p.namapenyakit=b.namapenyakit";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenispenyakit' readonly value='".$data['gejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">KETERANGAN :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='8' class='form-control' id='penanganan'  readonly>".$data['keterangan']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
         
    </div>
  </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center> <h4><span class="glyphicon glyphicon-lock"></span> Login Admin</h4></center>
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
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"> Login</button>
          </form>     
            
        </div>
      </div>
        
        
   
        
    </div>
  </div> 

<footer class="container-fluid text-center">

  <p></p>
</footer>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<nav class="navbar navbar-inverse"></br><center><p class="text-muted">Teknik Informatika - Politeknik Negeri Jember</p></center></br>
</body>
</html>
