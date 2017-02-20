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

  <?php include "atas3.php";?>

		<!--- box border -->
		<div id="lb">
		<div id="rb">
		<div id="bb"><div id="blc"><div id="brc">
		<div id="tb"><div id="tlc"><div id="trc">
		<!--  -->
				
		<div id="content" style="margin-left:-20px;">
		  <table width="748" border="0" align="center">
            <tr>
              <td><table width="748" border="2" align="center"  cellpadding="0" cellspacing="0" bordercolor="#0000000">
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                  <td bgcolor="#CCCCCC"><div align="center">User Name</div></td>
                  <td width="152" bgcolor="#CCCCCC"><div align="center">Password</div></td>
                  <td width="115" bgcolor="#CCCCCC"><div align="center">Level</div></td>
                  <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
                </tr>
                <?php
		  $batas = 50;
          if (empty($halaman))
          {
          	$posisi = 0;
          	$halaman = 1;
          }
          else
          {
          	$posisi = ($halaman - 1)* $batas;
          }
		  
$sql = "select * from tbl_user ";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no=1; 
while($data=mysql_fetch_array($qry))
{
     $user_name=$data['user_name'];
     $pass=$data['pass'];
   	$level=$data['level'];
   	$no++; 
?>
                <tr>
                  <td width="43" bgcolor="#FFFFFF"><div align="center">
                      <?php $i++; echo $i?>
                  </div></td>
                  <td width="176" bgcolor="#FFFFFF"><?php echo $user_name;?></td>
                  <td bgcolor="#FFFFFF"><?php echo $pass;?></td>
                  <td bgcolor="#FFFFFF"><?php echo $level;?>
                      <div align="center"></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div align="center"><a href="edituser.php?user_name=<?php echo $user_name;?>">Edit</a></div></td>
                  <td width="100" bgcolor="#FFFFFF"><div align="center"><a href="deleteuser.php?user_name=<?php echo $user_name;?>" onclick="return confirm('Apakah Anda benar-benar akan menghapus user ini?')">hapus</a></div></td>
                </tr>
                <?php }; ?>
              </table></td>
            </tr>
          </table>
		  <div style="margin-top:20px">
            <div align="center"><a href="formuser.php">Tambah User</a>
            </div>
		  </div>
    	</div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			
</div>
</body>
</html>