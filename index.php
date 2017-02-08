
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/login.css" type="text/css" />
<title>SMA DR. WAHIDIN MLATI 	</title>

</head>



<body>

<div id="login">
<p>
  <label><center><bold>
    <p>SISTEM INFORMASI BUKU INDUK KARYAWAN <br />
      SMA DR. WAHIDIN MLATI</p>
    <p><br>
    </p>
    </bold></center>
  </label>  
<form name="loginform" id="loginform" action="include/cek_login.php?op=in" method="post"><p><label>Username:<br>
	  <input type="text" name="user_name" id="user_name" class="input" value="" size="20" tabindex="1"></label>
	</p>
	<p>
		<label>Password:<br>
		<input type="password" name="pass" id="pass" class="input" value="" size="20" tabindex="2"></label>
	</p>
	<p class="submit">
		<input type="submit" name="login" class="button" value="Log In" tabindex="4">
	</p>
   <tr>
        <td colspan="3" align="center">
        <?php
		if(empty($_GET['err']))
			{echo " ";}
		if(isset($_GET['err']))
		{
			if($_GET['err']==1)
				echo '<div class="error">Username dan Password Harus Di Isi</div>';
			if($_GET['err']==2)
				echo '<div class="error">Username atau Password salah</div>';
		}
		?>
        </td>
</form>
</div>
</body>
</html>
