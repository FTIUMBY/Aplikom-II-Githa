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
    	<form id="form1" name="form" method="post" action="carisiswa2.php">
         <td colspan="2" width="127">Cari Histori Siswa Dengan Nomor Induk</td>
          <td ><div align="center"><strong>:</strong></div></td>
          <td width="452">
		  <label><input name="no_induk" type="text" id="no_induk" size="30" required="" />
          </label> <input type="submit" name="Submit" value="Cari" /></td>
		  </form>
		</table>
		  <table width="802" border="0">
			
			<tr>
			<td width="796">  <table width="808" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
               		  
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">NIS</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Nama</div></td>
						<td bgcolor="#CCCCCC"><div align="center">Alamat</div></td>
						<td bgcolor="#CCCCCC"><div align="center">Tahun Ajar</div></td>
						<td bgcolor="#CCCCCC"><div align="center">Kelas</div></td>
                        <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
                      </tr>
                      <?php
						$sql = "select * from tbl_siswa, tbl_kelas, tbl_tahun_ajar,tbl_kenaikan_kelas where tbl_siswa.no_induk=tbl_kenaikan_kelas.no_induk and tbl_kelas.kd_kelas=tbl_kenaikan_kelas.kd_kelas and tbl_tahun_ajar.kd_tahun_ajar=tbl_kenaikan_kelas.kd_tahun_ajar order by kelas";
						$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
						$no = 1;
						while($data=mysql_fetch_array($qry))
						{
						$id_naik_kelas=$data['kd_kenaikan'];
						$NIS =$data['no_induk'];
						$nama=$data['nama'];
						$tahun_ajar = $data['tahun_ajar'];
						$kelas = $data['kelas'];
						$alamat_s= $data['alamat_s'];
						
					  ?>
                      <tr>
                        <td width="41"><div align="left"> <?php echo $no;?> </div></td>
                        <td width="89"><div align="center"><?php echo $NIS;?></div></td>
                        <td width="422"><div align="justify"><?php echo $nama;?></div></td>
                        <td width="620"><div align="justify"><?php echo $alamat_s;?></div></td>
						<td width="189"><div align="center"><?php echo $tahun_ajar;?></div></td>
                        <td width="320"><div align="justify"><?php echo $kelas;?></div></td>
                        <td width="161"><div align="center"><a href="editkenaikan_kelas.php?id_naik_kelas=<?php echo $id_naik_kelas;?>">Edit</a></div></td>
                        <td width="161"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus Kenaikan Kelas ini?')" href="deletenaik_kelas.php?id_naik_kelas=<?php echo $id_naik_kelas;?>">Hapus</a></div></td>
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