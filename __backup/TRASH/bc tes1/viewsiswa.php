<?php 
error_reporting (E_ALL^(E_NOTICE | E_WARNING));
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

    	<td colspan="2" bgcolor="#EEEEEE"><div align="center"></div></td>
  </tr>
  
  <tr>
  <td width="265"><div align="right"></div></td>
    <td width="169" bgcolor="#FFFFFF">
      <label>
   <!--   <div align="right"><a href="formdaftar.php">Tambah Siswa</a><span class="style1"></a></div> -->
      </label></td>
    </tr>
	<tr>
    <td bgcolor="#FFFFFF">
      <label></label></td>
    <td colspan="2">&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="2">
	
      <table width="721" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
        <tr>
          <td bgcolor="#CCCCCC"><div align="center">No</div></td>
          <td bgcolor="#CCCCCC"><div align="center">NIS </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Nama Siswa </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Alamat </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Gender</div></td>
          <td bgcolor="#CCCCCC"><div align="center">kelas</div></td>
          <td colspan="4" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
          </tr>
		<?php
  			$sql = "SELECT * from tbl_siswa, tbl_wali, tbl_kelas where tbl_siswa.kd_kelas=tbl_kelas.kd_kelas and tbl_siswa.no_induk=tbl_wali.no_induk ";

  //$sql="select * from tb_siswa order by NIS ASC";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  $no=1;
  while($data=mysql_fetch_array($qry))
  {
  

$NIS = $data['no_induk'];
$nama_lengkap = $data['nama'];
$nama_kelas = $data['kelas'];
$alamat=$data['alamat_s'];
$gender=$data['gender'];


		?>
        <tr>
          <td width="28"> <div align="center"> <?php $i++;echo $i;?></div></td>
          <td width="98"><div align="center"><?php echo $NIS; ?></div></td>
          <td width="111"><div align="justify"><?php echo $nama_lengkap;?></div><div align="justify"></div></td>
          <td width="187"><div align="justify"><?php echo $alamat;?></div><div align="justify"></div></td>
          <td width="45"><div align="justify"><?php echo $gender;?></div></td>
		  <td width="130"><div align="justify"><?php echo $nama_kelas;?></div></td>
          <td width="24"><div align="center"><a href="editdaftar.php?NIS=<?php echo $NIS;?>">Edit</a></div></td>
          <td width="35"><div align="center"><a href="view_siswa.php?NIS=<?php echo $NIS;?>">View</a></div></td>
          <td width="43"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus siswa dengan nama <?php echo $nama_lengkap ?> ?')" href="deletedaftar.php?NIS=<?php echo $NIS;?>">hapus</a></div></td>
		  
        </tr>
        
        
		<?php } ?>
      </table>
             </td>
    <div style="margin-top:20px">

		
		</div></form>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

