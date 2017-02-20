<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>

<?php include "up1.php";?>
	  <div style="margin-top:20px">
	    <div align="center">
	      <p><a href="formpendidikan.php"></a> </p>
	      <table width="408" border="0"  cellpadding="0" cellspacing="0">
	        <tr>
	          <td border="0"><div align="right"><a href="formpendidikan.php">Tambah pendidikan </a></div></td>
            </tr>
	        <?php
$sql = "select * from tbl_pendidikan order by kd_pendidikan";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_pendidikan =$data['kd_pendidikan'];
$nama_pendidikan=$data['pendidikan'];

		
?>
	        <?php $no++; } ?>
          </table>
	      <table width="408" border="1"  cellpadding="0" cellspacing="0" bordercolor="#666666">
	        <tr>
	          <td bgcolor="#CCCCCC"><div align="center">No</div></td>
	          <td bgcolor="#CCCCCC"><div align="center">Id pendidikan </div></td>
	          <td bgcolor="#CCCCCC"><div align="center"> pendidikan </div></td>
	          <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
            </tr>
	        <?php
$sql = "select * from tbl_pendidikan order by kd_pendidikan";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no = 1;
while($data=mysql_fetch_array($qry))
{
$id_pendidikan =$data['kd_pendidikan'];
$nama_pendidikan=$data['pendidikan'];

		
?>
	        <tr>
	          <td><div align="center"> <?php echo $no;?></div></td>
	          <td><div align="center"><?php echo $id_pendidikan;?> </div></td>
	          <td><div align="center"><?php echo $nama_pendidikan;?></div></td>
	          <td><div align="center"><a href="editpendidikan.php?id_pendidikan=<?php echo $id_pendidikan;?>">Edit</a></div></td>
	          <td><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus pendidikan ini?')" href="deletependidikan.php?id_pendidikan=<?php echo $id_pendidikan;?>">Hapus</a></div></td>
            </tr>
	        <?php $no++; } ?>
          </table>
	      <p>&nbsp;</p>
	    </div>
</div>
    	</div>
		
		
			<?php include "down1.php"; ?>
</div>
</body>
</html>