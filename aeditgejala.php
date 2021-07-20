<?php
include "session.php";
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
  
   
  
    <div class="col-sm-2 sidenav">
      <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
      <p><a href="penyakit.php"><button type="button" class="btn btn-succes btn-block">PENYAKIT</button></a></p>
      <p><a href="gejala.php"><button type="button" class="btn btn-succes btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-succes btn-block">BASIS PENGETAHUAN</button></a></p>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      <br> </div>
    <div class="col-sm-8 text-left"> 
      <h2 class="text-center">EDIT GEJALA</h2>
    <form method="post">
      <div class="form-group">
      			<label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                        echo "<input type='text' name='idgejala' class='form-control' id='idgejala'  disabled value='".$data['idgejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group">
      			<label class="control-label col-sm-2">GEJALA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='gejala' name='gejala' value='".$data['gejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>
          <div class="form-group">
      			<label class="control-label col-sm-2">JENIS :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='daerah' name='daerah' value='".$data['daerah']."'><br>";
                    }
                ?>
     		 </div>
        </div>
            <div class="form-group">
      			<label class="control-label col-sm-2">JENIS PENYAKIT :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenispenyakit' name='jenispenyakit' value='".$data['jenispenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
         <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $gejala       = $_POST['gejala'];
                      $daerah       = $_POST['daerah'];
                      $jenispenyakit = $_POST['jenispenyakit'];
                      $query="update gejala SET gejala='".$_POST['gejala']."', daerah='".$_POST['daerah']."', jenispenyakit='".$_POST['jenispenyakit']."' WHERE idgejala='$id'";
                      mysqli_query($konek_db, $query);
                      header('location:gejala.php');
                    }
                ?>
        </form>
    </div>
  </div>
</div>

</body>
</html>
