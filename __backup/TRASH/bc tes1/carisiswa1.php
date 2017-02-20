<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
	$NIS=$_GET['no_induk'];
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
  <td bgcolor="#EEEEEE"><div align="center" class="notd">I<strong>INPUT KENAIKAN KELAS </strong></div></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>
      <table width="785" border="0">
        <tr>
		<form id="form1" name="form" method="post" action="proses_cari1.php">
          <td width="157">&nbsp;</td>
          <td width="127">NIS</td>
          <td width="15"><div align="center"><strong>:</strong></div></td>
          <td width="452">
		  <label><input name="no_induk" type="text" id="no_induk" size="30" required="" />
          </label> <input type="submit" name="Submit" value="Cari" /></td>
		  </form>
		</tr>
		</table>
   </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			<?php include "../css/footer.php"; ?>
</div>
</body>
</html>