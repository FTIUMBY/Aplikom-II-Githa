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
  <td  rowspan="3"bgcolor="#EEEEEE"><div align="center" class="notd"><strong>JUMLAH PEKERJAAN YANG DIMILIKI WALI SISWA </strong></div></td>
  </tr>
  
  	</tr>
  <tr>
    <td>
      <table width="785" border="0">
        <tr>
		<br />

		<table width="408" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Pekerjaan</div></td>
                        <td bgcolor="#CCCCCC"><div align="center"> Jumlah</div></td>
                      </tr>
					  <?php
			$pkr=mysql_query("SELECT * from tbl_pekerjaan order by pekerjaan ",$koneksi);
			$no = 1;
			while($data=mysql_fetch_array($pkr))
				{
				$id_pkr=$data['kd_pekerjaan'];
				$pekerjaan=$data['pekerjaan'];
		 
		 ?>
		 <?php
		  $p=mysql_query("SELECT no_induk from tbl_wali where kd_pekerjaan='$id_pkr' ",$koneksi);
			$jum_p=mysql_num_rows($p);
		 ?>
                      <tr>
                        <td width="41"><div align="justify"> <?php echo $no;?> </div></td>
                        <td width="189"><div align="justify"><?php echo $pekerjaan;?>
                        </div></td>
                        <td width="62"><div align="center"><?php echo $jum_p;?></div></td>
                      </tr>
                      <?php $no++; } ?>
                                              </table>
			
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