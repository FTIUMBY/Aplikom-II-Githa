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

    
		<!--- box border -->
		<div id="lb">
		<div id="rb">
		<div id="bb"><div id="blc"><div id="brc">
		<div id="tb"><div id="tlc"><div id="trc">
		<!--  -->
				
		<div id="content" style="margin-left:-20px;">
    	<td colspan="2" bgcolor="#EEEEEE"><div align="center"></div></td>
  </tr>
  <?php include "atasprint.php";?>
  <tr>
  <td width="265"><div align="right"></div></td>
    <td width="169" bgcolor="#FFFFFF">
      <label></label></td>
    <td width="325">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF">
      <label></label>        </td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td colspan="2"><div align="center"><table width="1293" border="0">
  <tr>
    <td width="1307"><div align="left">
        <table width="200" border="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="1271" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666">
          <tr>
            <td width="20" rowspan="2" bgcolor="#CCCCCC"><div align="center">No</div></td>
            <td width="58" rowspan="2" bgcolor="#CCCCCC"><div align="center">NIS</div></td>
            <td width="84" rowspan="2" bgcolor="#CCCCCC"><div align="center">Nama Siswa</div></td>
            <td width="28" rowspan="2" bgcolor="#CCCCCC"><div align="center">L/P</div></td>
            <td width="80" rowspan="2" bgcolor="#CCCCCC"><div align="center">Kelas</div></td>
            <td width="80" rowspan="2" bgcolor="#CCCCCC"><div align="center">Tempat Lahir </div></td>
            <td width="125" rowspan="2" bgcolor="#CCCCCC"><div align="center">Tanggal Lahir </div></td>
            <td width="119" rowspan="2" bgcolor="#CCCCCC"><div align="center">Asal SMP </div></td>
            <td width="75" rowspan="2" bgcolor="#CCCCCC"><div align="center">Agama</div></td>
            <td width="75" rowspan="2" bgcolor="#CCCCCC"><div align="center">Alamat Siswa </div></td>
          	<td width="87" rowspan="2" bgcolor="#CCCCCC"><div align="center">Nama Wali </div></td>
            <td width="87" rowspan="2" bgcolor="#CCCCCC"><div align="center">Pekerjaan Wali </div></td>
            <td width="157" rowspan="2" bgcolor="#CCCCCC"><div align="center">Alamat Wali </div></td>
          </tr>
          <tr>
            
          </tr>
          <tr>
            <?php
  $sql ="select * from tbl_siswa, tbl_wali, tbl_kelas,tbl_agama, tbl_pekerjaan,tbl_asal_sekolah where tbl_siswa.no_induk=tbl_wali.no_induk and tbl_siswa.kd_agama=tbl_agama.kd_agama and tbl_asal_sekolah.kd_sekolah=tbl_siswa.kd_sekolah and tbl_wali.kd_pekerjaan=tbl_pekerjaan.kd_pekerjaan and tbl_siswa.kd_kelas=tbl_kelas.kd_kelas order by kelas"; 
  
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  $no=1;
  while($data=mysql_fetch_array($qry))
  {
  

$NIS = $data['no_induk'];
$nama_lengkap = $data['nama'];
$jenis_kelamin = $data['gender'];
$nama_kelas = $data['kelas'];
$tempat_lahir = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($tgl_lahir ));
$lulusan_dari = $data['nama_sekolah'];
$nama_agama = $data['agama'];
$alamat = $data['alamat_s'];
$nama_wali = $data['nama_wali'];
$nama_pekerjaan_w = $data['pekerjaan'];
$alamat_w = $data['alamat'];

?>
            <td><div align="center"> <?php echo $no;?> </div></td>
            <td><div align="center"><?php echo $NIS;?></div></td>
            <td><div align="left"><?php echo $nama_lengkap;?></div></td>
            <td><div align="center"><?php echo $jenis_kelamin;?></div></td>
            <td><div align="left"><?php echo $nama_kelas;?></div></td>
            <td><div align="left"><?php echo $tempat_lahir;?></div></td>
            <td><div align="left"><?php echo $tanggal_lahir;?></div></td>
            <td><div align="center"><?php echo $lulusan_dari;?></div></td>
            <td><div align="left"><?php echo $nama_agama;?></div></td>
            <td><div align="left"><?php echo $alamat;?></div></td>
            <td><div align="left"><?php echo $nama_wali;?></div></td>
            <td><div align="left"><?php echo $nama_pekerjaan_w;?></div></td>
            <td><div align="left"><?php echo $alamat_w;?></div></td>
          </tr>
          <?php $no++; } ?>
        </table>
    </div></td>
  </tr>
</table>
</div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </div></div></div>
		</div></div></div></div>
		<!-- -->
		
</div></form>
<script language="javascript">
window.print();
</script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

