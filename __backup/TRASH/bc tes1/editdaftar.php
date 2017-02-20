<style type="text/css">
body {
	background-image: url(002.jpg);
}
</style>

<?php 
include "../include/koneksi.php";
session_start();

$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}

$NIS = $_GET['NIS'];
$sql = "select * from tbl_siswa as s,tbl_wali as w where s.no_induk='$NIS' and s.no_induk = w.no_induk order by s.no_induk";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
while($data=mysql_fetch_array($qry))
{

$NIS =$data['no_induk'];
$nama_lengkap =$data['nama'];
$jenis_kelamin =$data['gender'];
$tempat_lahir =$data['tempat_lahir'];
$tanggal_lahir =$data['tgl_lahir'];
$agama =$data['kd_agama'];
$anak_ke =$data['anak_ke'];
$jumlah_saudara_kandung =$data['jumlah_saudara'];
$alamat =$data['alamat_s'];
$no_telp =$data['telepon_s'];
$sekolah_asal =$data['kd_sekolah'];
$kelas =$data['kd_kelas'];
$tingkat_pendidikan = $data['tingkat_pendidikan'];
$status_masuk = $data['status_masuk'];
$gambar =$data['gambar'];

$nama_wali = $data['nama_wali'];
$id_agama_w = $data['kd_agama'];
$kewarganegaraan = $data['kewarganegaraan'];
$id_pendidikan = $data['tingkat_pendidikan'];
$id_pekerjaan = $data['kd_pekerjaan'];
$alamat_w = $data['alamat'];
$no_telp_w = $data['telepon'];

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
    
  
    <td><form id="form1" name="form1" method="post" action="updatedaftar.php?NIS=<?php echo $NIS;?>">
    
      <table width="813" border="0">
        
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><div align="center" class="style3">Edit  Data Siswa  </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>A.IDENTITAS SISWA </strong>
            <label></label></td>
          <td width="77">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="169"> NIS</td>
          <td width="10"><div align="center"><strong>:</strong></div></td>
          <td width="458"><?php echo $NIS;?>
            <label>
            <input type="hidden" name="NIS" size="size""5" value="<?php echo $NIS;?>" />
            </label>
            <label></label></td>
          <td>&nbsp;</td>
        </tr>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Kelamin </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
            <input name="jenis_kelamin" type="radio" value="L" id="radiobutton2" <?php if($jenis_kelamin == 'L'){echo "checked";}?> />
            L
  			<input name="jenis_kelamin" type="radio" value="P" id="radio" <?php if($jenis_kelamin == 'P'){echo "checked";}?> />
            P </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tempat lahir </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" /></td>
          <td><label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal lahir </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="date" id="to" name="tgl_lahir" size="9" value="<?php echo $tanggal_lahir ?>" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.to);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.tgl_lahir);return false;" ><img name="popcal" align="center" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> 
		   <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:500px;">
</iframe>
		   </td>
		  <tr>
          <td>&nbsp;</td>
          <td>Kelas</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_kelas" id="id_kelas">
            <option value="0" selected="selected"> [-pilih-]</option>
            <?php
		  $sql="select * from tbl_kelas ";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_kelas]==$kelas){
		  $cek="selected";
		  }
		  else
		  {
		  $cek="";
		  }
		  echo"<option value='$data[kd_kelas]' $cek> $data[kelas]</option>";
		  }
		  ?>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        
		  
		  <tr>
          <td>&nbsp;</td>
          <td>Agama </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_agama" id="nama_agama">
            <option value="$agama" selected="selected"> [---Agama---]</option>
            <?php
		  $sql="select * from tbl_agama ";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_agama]==$agama){
		  $cek11="selected";
		  }
		  else
		  {
		  $cek11="";
		  }
		  echo"<option value='$data[kd_agama]' $cek11> $data[agama]</option>";
		  }
		  ?>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="anak_ke" value="<?php echo $anak_ke;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara kandung</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="jumlah_saudara_kandung" value="<?php echo $jumlah_saudara_kandung;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="169">Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
                <td><textarea name="alamat"><?php echo $alamat;?></textarea></td>
                <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="no_telp" value="<?php echo $no_telp;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_sekolah" id="id_pekerjaan_a">
              <option value="0" selected="selected"> [---pilih---]</option>
             <?php
		  $sql="select kd_sekolah,nama_sekolah from tbl_asal_sekolah order by nama_sekolah";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_sekolah]==$sekolah_asal){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_sekolah]' $cek1> $data[nama_sekolah]</option>";
		  }
		  ?>
            </select>          </td>
			<td>&nbsp;</td>
        </tr>
		 <tr>
          <td>&nbsp;</td>
          <td>Status Masuk</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
            <input name="status_masuk" type="radio" value="Fresh" id="radiobutton" <?php if($status_masuk == 'Fresh'){echo "checked";}?> />
            Fresh
            <input name="status_masuk" type="radio" value="Pindahan" id="radiobutton" <?php if($status_masuk == 'Pindahan'){echo "checked";}?>/>
            Pindahan </td>
          <td><label></label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Wali </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="nama_wali" value="<?php echo $nama_wali;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td><div align="center">:</div></td>
          <td><select name="agama_wali" id="id_agama_w">
            <option value="Notid_agama_w" selected="selected"> [---Agama---]</option>
            <?php
		  $sql="select kd_agama,agama from tbl_agama order by agama";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_agama]==$id_agama_w){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_agama]' $cek1> $data[agama]</option>";
		  }
		  ?>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center">:</div></td>
          <td><input name="kewarganegaraan" type="radio" value="WNI" id="radio5" <?php if($kewarganegaraan == 'WNI'){echo "checked";}?> />
WNI
  <input name="kewarganegaraan" type="radio" value="WNA" id="radio5" <?php if($kewarganegaraan== 'WNA'){echo "checked";}?>/>
WNA</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan</td>
          <td><div align="center">:</div></td>
         <td><input name="tingkat_pendidikan" type="radio" value="SD" id="radiobutton" <?php if($tingkat_pendidikan == 'SD'){echo "checked";}  ?> />
            SD
            <input name="tingkat_pendidikan" type="radio" value="SMP" id="radiobutton" <?php if($tingkat_pendidikan == 'SMP'){echo "checked";}  ?>/>
            SMP
			<input name="tingkat_pendidikan" type="radio" value="SMA" id="radiobutton" <?php if($tingkat_pendidikan == 'SMA'){echo "checked";}  ?>/>
            SMA
			<input name="tingkat_pendidikan" type="radio" value="Sarjana" id="radiobutton" <?php if($tingkat_pendidikan == 'Sarjana'){echo "checked";}  ?>/>
            Sarjana</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center">:</div></td>
          <td><select name="id_pekerjaan" id="id_pekerjaan">
            <option value="Notid_pekerjaan_w" selected="selected"> [---Pilih---]</option>
            <?php
		  $sql="select kd_pekerjaan,pekerjaan from tbl_pekerjaan order by pekerjaan";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_pekerjaan]==$id_pekerjaan){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_pekerjaan]' $cek1> $data[pekerjaan]</option>";
		  }
		  ?>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center">:</div></td>
          <td><textarea name="alamat_wali"><?php echo $alamat_w;?></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="no_telp_wali" value="<?php echo $no_telp_w;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Update" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
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