<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
$id_pekerjaan=$_GET['id_pekerjaan'];

$sql="select * from tbl_pekerjaan where kd_pekerjaan='$id_pekerjaan' order by kd_pekerjaan";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  {
  	$id_pekerjaan = $data['kd_pekerjaan'];
$nama_pekerjaan= $data['pekerjaan'];


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
    
    <td><form id="form1" name="form1" method="post" action="updatepeker.php?id_pekerjaan=<?php echo $id_pekerjaan;?>">
      <table width="785" border="0">
        <tr>
          <td colspan="4"><div align="center"><strong>EDIT PEKERJAAN </strong></div></td>
          </tr>
        <tr>
          <td width="157">&nbsp;</td>
          <td width="127">id pekerjaan </td>
          <td width="31"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$id_pekerjaan";?>
            <input name="id_pekerjaan" type="hidden" value="<?php echo "id_pekerjaan";?>" />
          </label></td>
        </tr>
      
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="nama_pekerjaan" type="text" id="nama_pekerjaan" size="40" value="<?php echo $nama_pekerjaan;?>"/>
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
    </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
	<?php include "../css/footer.php"; ?>		
</div>
</body>
</html>