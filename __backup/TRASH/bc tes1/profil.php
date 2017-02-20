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
		<!--- box border -->
		<div id="lb">
		<div id="rb">
		<div id="bb"><div id="blc"><div id="brc">
		<div id="tb"><div id="tlc"><div id="trc">
		<!--  -->
        
 		<div id="content">
		<p h2 align="left"><strong><span class="">Selamat Datang di Sistem Informasi Data Siswa</span></strong>        
		<p h2 align="left">
        
		  <table width="767" border="0">
            <tr>
              <td><div align="center" class="style20">
                <div align="left">Nama Sekolah : SMA Taman Madya Jetis<br />
                  Alamat  : Jl. Paknuningratan, Jetis, Yogyakarta<br />
                  Telepon : 081904203204<br />
                  E-mail : smatamanmadya@ymail.com<br />
                  Status sekolah : Swasta <br />
                  Nama Yayasan : Taman Siswa<br />
                  Status Akreditasi : B </div>
                </div></td>
            </tr>
          </table>
		
		</span></strong>
 		</div>

    </div>

        <br>
        <br>
        <br>
        
        
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
		<!-- <?php include "../css/footer.php"; ?> -->
	</div>
</body>
</html>