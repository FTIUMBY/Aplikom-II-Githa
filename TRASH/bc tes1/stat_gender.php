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

<?php include "atas.php";?>
		<!--- box border -->
		<div id="lb">
		<div id="rb">
		<div id="bb"><div id="blc"><div id="brc">
		<div id="tb"><div id="tlc"><div id="trc">
		<!--  -->
				
		<div id="content">
  <td bgcolor="#EEEEEE"><div align="center" class="notd"><strong>JUMLAH SISWA LAKI-LAKI DAN PEREMPUAN </strong></div></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>
      <table width="785" border="0">
        <tr><?php
			$l=mysql_query("SELECT no_induk from tbl_siswa where gender='L' ",$koneksi);
			$jum_l=mysql_num_rows($l);
		 	
			$p=mysql_query("SELECT no_induk from tbl_siswa where gender='P' ",$koneksi);
			$jum_p=mysql_num_rows($p);
		 ?>
		 		
		<table width="408" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Jenis Kelamin</div></td>
                        <td bgcolor="#CCCCCC"><div align="center"> Jumlah</div></td>
                      </tr>  
		             <tr>
                        <td width="41"><div align="justify"> <?php echo 1; ?> </div></td>
                        <td width="189"><div align="justify"><?php print Pria;?></div></td>
                        <td width="62"><div align="center"><?php echo $jum_l;?></div></td>
                      </tr>
                     <tr>
                        <td width="41"><div align="justify"> <?php echo 2; ?> </div></td>
                        <td width="189"><div align="justify"><?php echo Perempuan;?>
                        </div></td>
                        <td width="62"><div align="center"><?php echo $jum_p;?></div></td>
                      </tr>
                     
					              </table>

		
		</tr>
				</table>
   </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			<?php include "../css/footer.php"; ?>
</div>
</body>
</html>