<?php 
session_start();
if(isset($_SESSION[username])){
header("Location:admin.php");
} else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../psbs/css/login.css" type="text/css" />
<title>:: SMA DR Wahidin Mlati ::css/images/logoc.png</title>
</head>

<body>

<div id="login"><h1><img src="images/gambar.jpg" width="360" height="185" /></h1>

<form name="loginform" id="loginform" action="cek_login.php" method="post">
	<p>
		<label>Username:<br>
		<input type="text" name="username" id="username" class="input" value="" size="20" tabindex="1"></label>
	</p>
	<p>
		<label>Password:<br>
		<input type="password" name="password" id="password" class="input" value="" size="20" tabindex="2"></label>
	</p>
	<p class="submit">
		<input type="submit" name="login" class="button" value="Log In" tabindex="4">
	</p>
</form>

<p id="backtoweb"><a href="../index.php" ></a></p>
</div>
</body>
</html>
<?php } ?>