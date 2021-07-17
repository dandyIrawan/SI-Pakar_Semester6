<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>login</title>
       
        <link href="css/login.css" rel="stylesheet" />
        <style>
            body{
            background:#000010; 
            }
            </style>
    </head>
    
    <body>
    </br></br></br>
            <div class="login-card" >
            <h1>Silahkan Registrasi</h1><br>
        <form role="form" method="post" action="cekregister.php">
            <input type="text" class="form-control" name="nama" id="password"  placeholder="Nama Lengkap">
            <input type="text" class="form-control" name="email" id="password"  placeholder="Email">
            <input type="text" class="form-control" name="username" id="password"  placeholder="Username">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <input type="submit" name="submit" class="login login-submit" value="Daftar">
        </form>
            
        <div class="login-help">
            <a href="welcome.php">Kembali</a>
        </div>
        </div>
       
    </body>
   
    </html>