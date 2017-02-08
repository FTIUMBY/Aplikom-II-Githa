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
		  <table width="802" border="0">
            <tr>
              <td width="996">                <table width="808" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Kode Sekolah</div></td>
                        <td bgcolor="#CCCCCC"><div align="center"> Nama Sekolah</div></td>
						<td bgcolor="#CCCCCC"><div align="center"> Alamat</div></td>
						<td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
                      </tr>
                      <?php
$sql = "select * from tbl_asal_sekolah order by kd_sekolah";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$kd_sekolah =$data['kd_sekolah'];
$nama_sekolah=$data['nama_sekolah'];
$alamat_sekolah = $data['alamat'];

?>
                      <tr>
                        <td width="11"><div align="center"> <?php echo $no;?> </div></td>
                        <td width="29"><div align="center"><?php echo $kd_sekolah;?></div></td>
                        <td width="122"><div align="justify"><?php echo $nama_sekolah;?></div></td>
                        <td width="122"><div align="justify"><?php echo $alamat_sekolah;?></div></td>
                        <td width="26"><div align="center"><a href="editasal_sekolah.php?id_sekolah=<?php echo $kd_sekolah;?>">Edit</a></div></td>
                        <td width="26"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus Data Sekolah ini?')" href="deleteasal_sekolah.php?id_sekolah=<?php echo $kd_sekolah;?>">Hapus</a></div></td>
                      </tr>
                      <?php $no++; } ?>
                                              </table></td>
            </tr>
          </table>
    	  <div style="margin-top:20px">
  <div align="center"><a href="formsekolah_asal.php">Tambah Data Asal Sekolah </a>  </div>
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