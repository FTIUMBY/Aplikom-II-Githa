<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
$id_tahun_ajar=$_GET['id_tahun_ajar'];

$sql="select * from tbl_tahun_ajar where kd_tahun_ajar='$id_tahun_ajar' order by kd_tahun_ajar";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  {
  	$id_tahun_ajar = $data['kd_tahun_ajar'];
	$nama_tahun_ajar= $data['tahun_ajar'];
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include "up1.php";?>

    
    
    <td><form id="form1" name="form1" method="post" action="updatetahun_ajar.php?id_tahun_ajar=<?php echo $id_tahun_ajar;?>">
      <table width="785" border="0">
        <tr>
          <td colspan="4"><div align="center"><strong>EDIT TAHUN AJAR </strong></div></td>
        </tr>
		
		<tr>
          <td width="157">&nbsp;</td>
          <td width="127">Kode Tahun Ajar </td>
          <td width="31"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$id_tahun_ajar";?>
            <input name="id_tahun_ajar" type="hidden" value="<?php echo "id_tahun_ajar";?>" />
          </label></td>
        </tr>
		<tr>
          <td>&nbsp;</td>
          <td>Tahun Ajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="nama_tahun_ajar" type="text" id="nama_tahun_ajar" size="40" value="<?php echo $nama_tahun_ajar;?>"/>
          </label></td>
		  
		  
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
		  <label>
            <input type="submit" name="Submit" value="Update" />
          </label></td>
          <td>
		 <button onclick="location.href='tahun_ajar.php'">Back</button>
		  </td>
        </tr>
      </table>
        </form>    </td>
  </tr>
    </form>
    </div>
		
	<?php include "down1.php" ?>