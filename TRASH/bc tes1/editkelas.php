<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
$id_kelas=$_GET['id_kelas'];

$sql="select * from tbl_kelas where kd_kelas='$id_kelas' order by kd_kelas";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  {
  	$id_kelas = $data['kd_kelas'];
	$nama_kelas= $data['kelas'];
  }

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
				
		<div id="content">
    
    <td><form id="form1" name="form1" method="post" action="updatekelas.php?id_kelas=<?php echo $id_kelas;?>">
      <table width="785" border="0">
        <tr>
          <td colspan="4"><div align="center"><strong>EDIT DATA KELAS </strong></div></td>
          </tr>
        <tr>
          <td width="157">&nbsp;</td>
          <td width="127">Kode Kelas </td>
          <td width="31"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$id_kelas";?>
            <input name="id_pekerjaan" type="hidden" value="<?php echo "id_kelas";?>" />
          </label></td>
        </tr>
      
          <td>&nbsp;</td>
          <td>Kelas</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="nama_kelas" type="text" id="nama_kelas" size="40" value="<?php echo $nama_kelas;?>"/>
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
		 <button onclick="location.href='kelas.php'">Back</button>
		  </td>
        </tr>
      </table>
        </form>    </td>
  </tr>
    </form>
    </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
	<?php include "../css/footer.php"; ?>		
</div>
</body>
</html>