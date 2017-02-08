<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>

  <?php include "up1.php";?>

    
		
		 <table width="408" border="0"  cellpadding="0" cellspacing="0" align="center">
		   <tr>
		     <td height="35" align="right"><a href="formpeker.php">Tambah Pekerjaan </a> </td>
	       </tr>
		   <?php
$sql = "select * from tbl_pekerjaan order by kd_pekerjaan";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_pekerjaan =$data['kd_pekerjaan'];
$nama_pekerjaan=$data['pekerjaan'];

		
?>
		   <?php $no++; } ?>
      </table>
		 <table width="408" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                        <td bgcolor="#CCCCCC"><div align="center">Id Pekerjaan </div></td>
                        <td bgcolor="#CCCCCC"><div align="center"> Pekerjaan </div></td>
                        <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
           </tr>
                      <?php
$sql = "select * from tbl_pekerjaan order by kd_pekerjaan";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_pekerjaan =$data['kd_pekerjaan'];
$nama_pekerjaan=$data['pekerjaan'];

		
?>
                      <tr>
                        <td width="41"><div align="center"> <?php echo $no;?> </div></td>
                        <td width="89"><div align="center"><?php echo $id_pekerjaan;?>
                        </div></td>
                        <td width="122"><div align="center"><?php echo $nama_pekerjaan;?></div></td>
                        <td width="61"><div align="center"><a href="editpeker.php?id_pekerjaan=<?php echo $id_pekerjaan;?>">Edit</a></div></td>
                        <td width="61"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus Pekerjaan ini?')" href="deletepeker.php?id_pekerjaan=<?php echo $id_pekerjaan;?>">Hapus</a></div></td>
                      </tr>
                      <?php $no++; } ?>
      </table></td>
            </tr>
          </table>
    	  <div style="margin-top:20px">
  <div align="center"></div>
</div>
    	<?php include "down1.php"; ?>
