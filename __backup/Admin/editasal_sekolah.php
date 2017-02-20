<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
$kd_sekolah=$_GET['id_sekolah'];

$sql="select * from tbl_asal_sekolah where kd_sekolah='$kd_sekolah' order by kd_sekolah";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  {
  	$id_sekolah = $data['kd_sekolah'];
	$nama_sekolah = $data['nama_sekolah'];
	$alamat_sekolah = $data['alamat'];


  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include "up1.php";?>

      
    <td><form id="form1" name="form1" method="post" action="updateasal_sekolah.php?id_sekolah=<?php echo $id_sekolah;?>">
      <table width="785" border="0">
        <tr>
          <td colspan="4"><div align="center"><strong>EDIT DATA SEKOLAH ASAL </strong></div></td>
          </tr>
        <tr>
          <td width="157">&nbsp;</td>
          <td width="127">Kode Sekolah </td>
          <td width="31"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$id_sekolah";?>
            <input name="id_sekolah" type="hidden" value="<?php echo "id_sekolah";?>" />
          </label></td>
        </tr>
      <tr>
          <td>&nbsp;</td>
          <td>Nama Sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="nama_sekolah" type="text" id="nama_sekolah" size="40" value="<?php echo $nama_sekolah;?>"/>
          </label></td>
        </tr>
		<tr>
          <td>&nbsp;</td>
          <td>Alamat Sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="alamat_sekolah" type="text" id="alamat_sekolah" size="40" value="<?php echo $alamat_sekolah;?>"/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Update" />
          </label></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
    </form>
 
	<?php include "down1.php"; ?>		
