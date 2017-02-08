<?php
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
$NIS=$_POST['no_induk'];

$sql="select * from tbl_siswa where no_induk='$NIS'";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  {
  	$NIS = $data['no_induk'];
	$nama= $data['nama'];
	$kelas =$data['kd_kelas'];
  	$id_tahun_ajar =$data['kd_tahun_ajar'];
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
    
    <td><form id="form1" name="form1" method="post" action="prosesnaik_kelas.php?no_induk=<?php echo $NIS;?>">
      <table width="785" border="0">
        <tr>
          <td colspan="4"><div align="center"><strong>KENAIKAN KELAS</strong></div></td>
          </tr>
		  <tr>
          <td width="157">&nbsp;</td>
          <td width="127">No Induk </td>
          <td width="11"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$NIS";?>
            <input name="no_induk" type="hidden" value="<?php echo "no_induk";?>" />
          </label></td>
        </tr>
        <tr>
          <td width="157">&nbsp;</td>
          <td width="127">Nama </td>
          <td width="11"><div align="center"><strong>:</strong></div></td>
          <td width="452"><label>
            <?php echo "$nama";?>
            <input name="nama" type="hidden" value="<?php echo $nama;?>" />
          </label></td>
        </tr>
      
          <td>&nbsp;</td>
          <td>Kelas</td>
          <td width="11"><div align="center"><strong>:</strong></div></td>
        <td><select name="id_kelas" id="id_kelas">
            <option value= "$id_kelas" selected="selected"> [---Pilih---]</option>
            <?php
		  $sql="select * from tbl_kelas ";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_kelas]==$kelas){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_kelas]' $cek1> $data[kelas]</option>";
		  }
		  ?>
          </select></td>
		 </tr>
		<tr>
		<td>&nbsp;</td>
		<td>Tahun Ajar</td>
          <td width="11"><div align="center"><strong>:</strong></div></td>
		<td><select name="id_tahun_ajar" id="id_pekerjaan">
            <option value="Notid_pekerjaan_w" selected="selected"> [---Pilih---]</option>
            <?php
		  $sql="select kd_tahun_ajar,tahun_ajar from tbl_tahun_ajar order by tahun_ajar";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_tahun_ajar]==$id_tahun_ajar){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_tahun_ajar]' $cek1> $data[tahun_ajar]</option>";
		  }
		  ?>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
		  <label>
            <input type="submit" name="Submit" value="Tambah" />
          </label></td>
          <td>
		 <a href="kenaikan_kelas.php">Kembali</a>
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