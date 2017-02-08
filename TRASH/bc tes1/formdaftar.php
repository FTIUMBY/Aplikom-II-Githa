<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body {
	background-image: url(002.jpg);
}
</style>
<?php


			include "atas3.php";
			
 ?>      
sdad
<div id="content">
  <td><div align="center"><table width="794" border="0" align="center">
  <tr>
  <td>  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="simpandaftar.php" enctype="multipart/form-data" >
      <table width="789" border="0">
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><div align="center" class="style3"><strong>Pengisian Data Siswa Baru </strong></div></td>
          <td width="158">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4"><?php
		if(isset($_GET['kosong']))
		{
			if($_GET['kosong']==1)
				echo "<font color='#FF0000'>Data Pada Bagian Siswa belum lengkap. Silahkan dilengkapi.
			</font>";

		}
		?></td>
        </tr>
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4" bgcolor="#CCCCCC"><strong>A.IDENTITAS SISWA </strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="145">NIS</td>
          <td width="10"><div align="center"><strong>:</strong></div></td>
          <td width="377"><input name="NIS" type="text" id="NIS" size="15" class="required" /></td>
          <td><input name="gambar" type="file" id="fieldField" value="Cari Foto" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Siswa</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="nama_lengkap" type="text" id="nama" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>

</body>
</html>