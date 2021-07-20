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
        <h2 class="text-center">BASIS PENGETAHUAN</h2>
        <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
				<label for="sel1">Jenis Penyakit</label>            
				<select class="form-control" name="penyakitt" onChange='this.form.submit();'>
				<option>Penyakit</option>
                <option>Mieloproliferatif</option>
  		</select>
              </form>
        <br><form id="form1" name="form1" method="post">
				<label for="sel1">Penyakit</label>            
				<select class="form-control" name="penyakit">
				<option>Penyakit</option>
               <?php 
 			        $tampil="select * from penyakit where jenispenyakit= \"".$_POST['penyakitt']."\"";
			        $query1= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query1)){  
					echo "<option value='".$hasil['namapenyakit']."'>".$hasil['idpenyakit']." ".$hasil['namapenyakit']."</option>";
			}
					?>
  		</select>
 
        <br><label for="sel2">Gejala</label><br>
<form id="form2" name="form2" method="post" action="diagnosa.php">
  
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
            <div class="panel-body">          
 			<?php 
            if(isset($_POST['penyakitt']))
                  if($_POST['penyakitt']!="jenispenyakit"){
 			$tampil="select * from gejala where daerah='Gejala' and jenispenyakit= \"".$_POST['penyakitt']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
        </div>
    </div>
   
    <br><button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
     <?php			
        if(isset($_POST['submit'])){
            $penyakit= $_POST['penyakit'];
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = count($gejala);
           for($x=0;$x<$jumlah_dipilih;$x++){
	                   $hasil= mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                        if($hasil){
                            echo '<script language="javascript">';
                            echo 'alert("Data Berhasil disimpan")';
                            echo '</script>';
                            }
                    }
        }
    
                ?>
        </form>
        <br>
        <br>
        </form>
    </div>
  </div>
</div>

</body>
</html>
