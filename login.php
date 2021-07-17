<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>login</title>
       
        <link href="css/login.css" rel="stylesheet" />
        <style>
            body{
            background:	#000010; 
            }
            </style>
    </head>
    
    <body>
    </br></br></br></br></br></br>
            <div class="login-card" >
            <h1>Silahkan Login</h1><br>
        <form role="form" method="post" action="ceklogin2.php">
            <input type="text" class="form-control" name="username" id="password"  placeholder="Username">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <input type="submit" name="login" class="login login-submit" value="Login">
        </form>
            
        <div class="login-help">
            <a href="index.php">Kembali</a>
        </div>
        </div>
       
    </body>
   
    </html>