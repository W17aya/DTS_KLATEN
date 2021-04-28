<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style_login.css">
    </head>
   
    <body>
		<div style="color:white; position: absolute;left: 510px;top: 120px; 
		font-size: 30px; background-color: black;">
			ADMIN PERPUSTAKAAN
		</div>
        <div class="container">
          <h1>Login</h1>
            <form method="post" action="cek_login.php" onsubmit="return cekform()">
                <label>Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" id="username"><br>
                <button type="submit"  name="submit">Log in</button>				
            </form>
        </div>     
    </body>
</html>

<script type="text/javascript">
    function cekform(){
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    if(username.value == ''){
        alert('username tidak boleh kosong');
        username.fokus();
        return false;
    } else if(password.value = ''){
        alert('olahraga belum dipilih');
        password.fokus();
        return false;
    } else {
        alert('terimakasih telah mengisi form');
        return true;
    }
}
</script>

