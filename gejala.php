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
      <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
      <p><a href="penyakit.php"><button type="button" class="btn btn-succes btn-block">PENYAKIT</button></a></p>
      <p><a href="gejala.php"><button type="button" class="btn btn-succes btn-block active">GEJALA</button></a></p>
      <p><a href="basispengetahuan.php"><button type="button" class="btn btn-succes btn-block">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
      </div>
    <div class="col-sm-8 text-left"> 
          <h2 class="text-center">DAFTAR GEJALA</h2>
      <form id="form1" name="form1" method="post" action="gejala.php">
				<label for="sel1">Jenis Penyakit</label>            
				<select class="form-control" name="penyakitt" onChange='this.form.submit();'>
				<option>Penyakit</option>
                <option>Mieloproliferatif</option>
  		</select>
  </form>
<br>
<a href="ainputgejala.php"><button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
    	<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Gejala</th>
							              <th>Gejala</th>
                            <th>Daerah</th>
                            <th>Jenis Penyakit</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                     <?php
if(isset($_POST['penyakitt']))
if($_POST['penyakitt']!="jenispenyakit"){	
$queri="Select * From gejala where jenispenyakit = \"".$_POST['penyakitt']."\"";
$hasil=mysqli_query ($konek_db,$queri);   
$id = 0;
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td>
					<td>".$data[0]."</td>  
        			<td>".$data[1]."</td>  
        			<td>".$data[2]."</td>
                    <td>".$data[3]."</td>
                    <td><a href=\"aeditgejala.php?id=".$data[0]."\"><i class='glyphicon glyphicon-pencil'></i></a>"." || <a href=\"adeletegejala.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a>"."</td>
        		</tr>   
        	";      
			}
}
 ?>  
</table><br><br><br><br><br>
            </div>
    </div>
  </div>
</div>
    
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>
    
<footer class="container-fluid text-center">
  <p>Teknik Informatika - Politeknik Negeri Jember</p>
</footer>

</body>
</html>
