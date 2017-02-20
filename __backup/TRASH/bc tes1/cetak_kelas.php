<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	$id_kelas=$_GET['id_kelas'];
	
	$kls=mysql_query("select * from tbl_kelas where kd_kelas='$id_kelas'");
	$data=mysql_fetch_array($kls);
	
	$a_kelas=$data['kelas'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
    
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
    <tr>
    <td colspan="2">
	
      <table width="721" border="0" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
        <tr bordercolor="#FFFFFF">
          <td colspan="3"><div align="left">Kelas : <?php echo"$a_kelas"; ?></div></td>
        </tr>
		</table>
	<table width="721" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
		<tr>
          <td bgcolor="#CCCCCC"><div align="center">No</div></td>
          <td bgcolor="#CCCCCC"><div align="center">NIS </div></td>
          <td bgcolor="#CCCCCC"><div align="left">Nama Siswa </div></td>
        </tr>
	<?php 	  
	$id_kelas=$_GET['id_kelas'];
	
		  $sql="select * from tbl_siswa where kd_kelas='$id_kelas' ";
		  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  		while($data=mysql_fetch_array($qry))
  		{
  		$NIS = $data['no_induk'];
		$nama= $data['nama'];
	?>
  
		<tr>
          <td width="88"> <div align="center"> <?php $i++;echo $i;?></div></td>
          <td width="185"><div align="center"><?php echo $NIS; ?></div></td>
          <td width="440"><div align="justify"><?php echo $nama;?></div><div align="justify"></div></td>
          </tr>
        
    <?php }?>    
      </table>
             </td>
    <div style="margin-top:20px">

		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
	
</div></form>

<script language="javascript">
window.print();
</script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">