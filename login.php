<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style_login.css">
    </head>
   
    <body>
		<div style="color:#544008;  font-family:Rockwell;
		font-size: 75px; background-color: #8c7a48;">
			<p align="center">ADMIN PERPUSTAKAAN</p>
		</div>
        <div class="container">
          <h1>Login</h1>
            <form method="post" action="cek_login.php">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <button type="submit"  name="submit">Log in</button>				
            </form>
        </div>     
    </body>
</html>

