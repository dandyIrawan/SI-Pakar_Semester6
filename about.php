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
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="welcome.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-succes btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-succes btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-succes btn-block active">PETUNJUK</button></a></p>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN ADMIN</button></p>
      <p><a href="register.php"><button type="button" class="btn btn-succes btn-block">REGISTRASI</button></a></p>
      <p><a href="logout2.php"><button type="button" class="btn btn-succes btn-block">LOGOUT</button></a></p>
    
      
    </div>
    <div class="col-sm-8 text-left">
      <div class="panel panel-success">
      <div class="panel-heading"><center>Petunjuk</center></div>
      <div class="panel-body"><p align=justify>Mendiagnosis penyakit mieloproliferatif tergolong lumayan sulit. 
      Proses diagnosis diawali dengan memeriksa 
      gejala yang muncul dan kondisi kesehatan pasien secara menyeluruh. 
      Setelah selesai, pemeriksaan akan dilanjutkan dengan melakukan tes penunjang. <br><br>
      Tes penunjang yang digunakan dalam proses diagnosis beragam, disesuaikan dengan hasil 
      pemeriksaan dari dokter. Beberapa tes yang bisa digunakan untuk mendiagnosis penyakit mieloproliferatif adalah:<br>
        1. Tes darah. Dalam tes ini, dokter akan mengambil darah pasien untuk dijadikan sampel dan diperiksa lebih lanjut di laboratorium.<br>
        2. Aspirasi sumsum tulang. Pemeriksaan aspirasi sumsum tulang dilakukan dengan mengambil sampel dari sumsum tulang pasien, lalu mengujinya di laboratorium.<br>
        3. Analisis gen. Tes ini menggunakan sampel darah atau sumsum tulang untuk mendeteksi ada atau tidaknya perubahan pada kromosom.<br><br>
        Sebagai pelengkap kita membangun sebuah sistem pakar sesuai dengan gejala yang terjadi pada pasien. Sebagai petugas pilih salah satu gejala yang paling sesuai / Yang paling mendekati untuk membantu
        mendiagnosis penyakit mieloproliferatif.</p>
          </div>
          </div>
    
  <div class="panel panel-success">
      <div class="panel-heading"><center>Hak Akses Petugas</center></div>
      <div class="panel-body"><p align=justify>
      1. Melihat informasi penyakit<br>
      2. Login aplikasi<br>
      3. Diagnosa penyakit<br>
      4. Melihat daftar penyakit dan gejala<br>
      5. Registrasi petugas</p>
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
