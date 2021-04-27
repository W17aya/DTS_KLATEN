<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi Perpustakaan</title>
  <link rel="stylesheet" type="text/css" href="asset/custom_css.css">
  <script type="text/javascript" src="asset/custom_js.js"></script>
</head>
<body class="background-body">
  <h1 class="text-white-login"><b>ADMIN PERPUSTAKAAN</b></h1>
  <div class="box-login">
    <form method="POST" action="" name="form_daftar" onsubmit="return cekform()">
      <center>
        <b class="text-white-login size-text-login">LOGIN</b>
      </center>
      <hr class="line-login">
      <label class="text-white-login">Usename</label>
      <input class="input-login" type="text" name="username" id="txtusername">
      <label class="text-white-login">Password</label>
      <input class="input-login" type="password" name="password" id="txtpassword">
      <button class="button-login" type="submit">Log In</button>
    </form>
  </div>
</body>
</html>