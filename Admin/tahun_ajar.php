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
<?php include "up1.php";?>
    
	
		  		 <table width="408" border="0"  cellpadding="0" cellspacing="0" align="center">
		  		   <tr>
		  		     <td height="35" align="right"><a href="formtahun_ajar.php">Tambah Tahun Ajar </a></td>
	  		       </tr>
		  		   <?php
$sql = "select * from tbl_tahun_ajar order by kd_tahun_ajar";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_tahun_ajar =$data['kd_tahun_ajar'];
$tahun_ajar=$data['tahun_ajar'];

		
?>
		  		   <?php $no++; } ?>
      </table>
		  		 <table width="408" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Id Tahun Ajar </div></td>
                        <td bgcolor="#CCCCCC"><div align="center"> Tahun Mengajar </div></td>
                        <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
                   </tr>
                      <?php
$sql = "select * from tbl_tahun_ajar order by kd_tahun_ajar";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_tahun_ajar =$data['kd_tahun_ajar'];
$tahun_ajar=$data['tahun_ajar'];

		
?>
                      <tr>
                        <td width="41"><div align="center"> <?php echo $no;?> </div></td>
                        <td width="89"><div align="center"><?php echo $id_tahun_ajar;?>
                        </div></td>
                        <td width="122"><div align="center"><?php echo $tahun_ajar;?></div></td>
                        <td width="61"><div align="center"><a href="edittahun_ajar.php?id_tahun_ajar=<?php echo $id_tahun_ajar;?>">Edit</a></div></td>
                        <td width="61"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus Tahun Ajar ini?')" href="deletetahun_ajar.php?id_tahun_ajar=<?php echo $id_tahun_ajar;?>">Hapus</a></div></td>
                      </tr>
                      <?php $no++; } ?>
      </table></td>
            </tr>
          </table>
    	  <div style="margin-top:20px">
  <div align="center"></div> </div>

    	
			<?php include "down1.php"; ?>
