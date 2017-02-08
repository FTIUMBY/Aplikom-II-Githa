<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>

<?php include "up1.php";?>
    
		
		 
              <table width="808" border="0"  cellpadding="0" cellspacing="0" align="center">
                <tr>
                  <td ><div align="right"><a href="formsekolah_asal.php">Tambah Data Asal Sekolah </a></div></td>
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
                <?php $no++; } ?>
              </table>
              <table width="808" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
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
                        <td width="122"><div align="center"><?php echo $nama_sekolah;?></div></td>
                        <td width="122"><div align="center"><?php echo $alamat_sekolah;?></div></td>
                        <td width="26"><div align="center"><a href="editasal_sekolah.php?id_sekolah=<?php echo $kd_sekolah;?>">Edit</a></div></td>
                        <td width="26"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus Data Sekolah ini?')" href="deleteasal_sekolah.php?id_sekolah=<?php echo $kd_sekolah;?>">Hapus</a></div></td>
                      </tr>
                      <?php $no++; } ?>
      </table></td>
            </tr>
          </table>
    	  <div style="margin-top:20px">
  <div align="center"></div>
</div>
    
    <?php include "down1.php"; ?>
