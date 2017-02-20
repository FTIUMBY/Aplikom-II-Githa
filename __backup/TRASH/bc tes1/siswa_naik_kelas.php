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
				
		<div id="content" style="margin-left:-20px;">
		  <table width="785" border="0">
        
		</table>
		  <table width="802" border="0">
			<tr>
			<td width="796">  <table width="808" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
               		  
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">NIS</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Nama</div></td>
						<td bgcolor="#CCCCCC"><div align="center">Tahun Ajar</div></td>
						<td bgcolor="#CCCCCC"><div align="center">Kelas</div></td>
                     </tr>
                      <?php
					  $no_induk=$_GET['no_induk'];
					  
											  
						$sql = "select * from tbl_kenaikan_kelas where no_induk='$no_induk'";
						$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
												
						$no = 1;
						while($data=mysql_fetch_array($qry))
						{
						$id_naik_kelas=$data['kd_kenaikan'];
						$NIS =$data['no_induk'];
						$id_tahun_ajar = $data['kd_tahun_ajar'];
						$id_kelas = $data['kd_kelas'];
						
					  ?>
					  <?php 
					  $kls_s=mysql_query("select * from `tbl_kelas` where `kd_kelas`='$id_kelas'");
					$hkls_s=mysql_fetch_array($kls_s);
					$kelas=$hkls_s['kelas'];
					
					$nama_s=mysql_query("select * from `tbl_siswa` where `no_induk`='$NIS'");
					$hnama_s=mysql_fetch_array($nama_s);
					$nama=$hnama_s['nama'];
					
					$ta_s=mysql_query("select * from `tbl_tahun_ajar` where `kd_tahun_ajar`='$id_tahun_ajar'");
					$hta_s=mysql_fetch_array($ta_s);
					$tahun_ajar=$hta_s['tahun_ajar'];
					
					?>
                      <tr>
                        <td width="41"><div align="left"> <?php echo $no;?> </div></td>
                        <td width="189"><div align="center"><?php echo $NIS;?></div></td>
                        <td width="422"><div align="center"><?php echo $nama;?></div></td>
                        <td width="989"><div align="center"><?php echo $tahun_ajar;?></div></td>
                        <td width="620"><div align="justify"><?php echo $kelas;?></div></td>
                      </tr>
                      <?php $no++; } ?>
                                              </table></td>
            </tr>
          </table>
    	  <div style="margin-top:20px">
  <div align="center"><a href="carisiswa1.php">Tambah Kenaikan</a>  </div>
</div>
    	</div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			<?php include "../css/footer.php"; ?>
</div>
</body>
</html>