<?php 
include "../include/koneksi.php";
session_start();

$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}

$nopendaftaran = $_GET['nopendaftaran'];

$sql="select * from tblpendaftaran where nopendaftaran='$nopendaftaran' order by nopendaftaran";
$qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
 while($data=mysql_fetch_array($qry))
  {
  $nisn = $data['nisn'];
  $nis = $data['nis'];
  $namasiswa = $data['namasiswa'];
 $jeniskelamin = $data['jeniskelamin'];
 $lulus = $data['lulus'];
 $tmplahir = $data['tmplahir'];
 $tgllahir = $data['tgllahir'];
  $bulanlahir = $data['bulanlahir'];
 $tahunlahir = $data['tahunlahir'];
 $agamasiswa = $data['kodeagama'];
 $namajurusan = $data['kodejurusan'];
 $alamatsiswa = $data['alamatsiswa'];
 $namasekolah =$data['kodesekolah'];
  $namatahun =$data['kodetahun'];
 $status = $data['status'];
 $alamatsekolah =$data['alamatsekolah'];

 $nomorsttb =$data['nomorsttb'];

// Data orang tua
$namaayah = $data['namaayah'];
$namaibu = $data['namaibu'];
$alamatortu = $data['alamatortu'];
$namapekerjaan = $data['kodepekerjaan'];

$wali=mysql_query("select * from tblwali where nopendaftaran='$nopendaftaran'");
$hwali=mysql_fetch_array($wali);
$namawali = $hwali['namawali'];
$alamatwali = $hwali['alamatwali'];


//nilai
//nilai
$bi = $data['1'];
$bigg = $data['2'];
$mat = $data['3'];
$ipa = $data['4'];
$jumlahuan = $data['jumlahuan'];
$total = $data['total'];
	
$bul=array(1=>'Januari',
		   2=>'Februari',
		   3=>'Maret',
		   4=>'April',
		   5=>'Mei',
		   6=>'Juni',
		   7=>'Juli',
		   8=>'Agustus',
		   9=>'September',
		   10=>'Oktober',
		   11=>'November',
		   12=>'Desember');
		   
$bul=array(1=>'Januari',
		   2=>'Februari',
		   3=>'Maret',
		   4=>'April',
		   5=>'Mei',
		   6=>'Juni',
		   7=>'Juli',
		   8=>'Agustus',
		   9=>'September',
		   10=>'Oktober',
		   11=>'November',
		   12=>'Desember');		   
		   

  
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
    
  
    <td><form id="form1" name="form1" method="post" action="simpandafatar.php?nopendaftaran=<?php echo $nopendaftaran;;?>">
      <table width="789" border="0">
        
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><div align="center" class="style3">Pengisisan  Data Siswa Baru </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>A.IDENTITAS CALON PESERTA DIDIK</strong>
            <label></label></td>
          <td width="77">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="145"> No Pendaftaran </td>
          <td width="10">&nbsp;</td>
          <td width="458"><?php echo $nopendaftaran;?>
            <label>
            <input type="hidden" name="nopendaftaran" size="size""5" value="<?php echo $nopendaftaran;?>" />
            </label>
            <span class="style6">*</span> </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>NISN</td>
          <td>&nbsp;</td>
          <td><input name="nisn" type="text" id="nisn" size="15"value="<?php echo $nisn;?>" />
            <span class="style6">*</span> </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>NIS</td>
          <td>&nbsp;</td>
          <td><input name="nis" type="text" id="nis" size="15" value="<?php echo $nis;?>"/>
            <span class="style6">*</span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Siswa</td>
          <td>&nbsp;</td>
          <td><label>
            <input name="namasiswa" type="text" id="namasiswa" size="40" value="<?php echo $namasiswa;?>"/>
            <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Kelamin</td>
          <td>&nbsp;</td>
          <td><label>
  <input name="jeniskelamin" type="radio" value="Laki-laki" id="radiobutton2" <?php if($jeniskelamin == 'Laki-laki'){echo "checked";}?> />
            Laki-laki
 <input name="jeniskelamin" type="radio" value="Perempuan" id="radiobutton" <?php if($jeniskelamin == 'Perempuan'){echo "checked";}?> />
            Perempuan       </label></td>
          <td><label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>LuLus/Belum Lulus</td>
          <td>&nbsp;</td>
          <td><label>
   <input name="lulus" type="radio" value="L" id="radiobutton" <?php if($lulus == 'L'){echo "checked";}?> />
            Lulus
 <input name="lulus" type="radio" value="BL" id="radiobutton" <?php if($lulus == 'BL'){echo "checked";}?> />
            Belum Lulus       </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tempat Lahir</td>
          <td>&nbsp;</td>
          <td><label>
            <input name="tmplahir" type="text" id="tmplahir" size="40" value="<?php echo $tmplahir;?>"/>
            <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal Lahir</td>
          <td>&nbsp;</td>
          <td><span class="style6"><span class="style8">
            <select name="tgllahir" id="tgllahir">
           <?php
		   for($t=1; $t<=31; $t++)
		   {
		   		if($t==$tgllahir)
				{
					echo "<option value=$t selected=selected>$t</option>";
				}
				else
				{
					echo "<option value=$t>$t</option>";
				}
		   }
		   ?>
            </select>
            <select name="bulanlahir" id="bulanlahir">
             <?php
			 foreach($bul as $b => $bl)
			 {
			 	if($bl==$bulanlahir)
				{
					echo "<option value=$b selected=selected>$bl</option>";
				}
				else
				{
					echo "<option value=$b>$bl</option>";
				}
			 }
			 ?>
            </select>
            <select name="tahunlahir" id="tahunlahir">
           <?php
		   for($th=1988; $th<=1994; $th++)
		   {
		   		if($th==$tahunlahir)
				{
					echo "<option value=$th selected=selected>$th</option>";
				}
				else
				{
					echo "<option value=$th>$th</option>";
				}
		   }
		   ?>
            </select>
          </span>*</span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td>&nbsp;</td>
          <td><label>
            <select name="kodeagama" id="namaagama">
              <option value="Notkodeagama" selected="selected"> [---Agama---]</option>
              <?php
		  $agm="select kodeagama,namaagama from tblagama order by namaagama";
		  $agm2= mysql_query($agm);
		  
		  while ($hagm=mysql_fetch_array($agm2)){
		  if ($hagm['kodeagama']==$agamasiswa){
		  	echo"<option value='$hagm[kodeagama]' selected=selected> $hagm[namaagama]</option>";
		  }
		  else
		  {
			echo"<option value='$hagm[kodeagama]'>$hagm[namaagama]</option>";		  }
		  }
		  ?>
            </select>
            <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jurusan</td>
          <td>&nbsp;</td>
          <td><label>
            <select name="kodejurusan" id="kodejurusan">
            <option value="Notkodejurusan" selected="selected"> [-Jurusan-]</option>
             <?php
		  $jrs="select kodejurusan,namajurusan from tbljurusan order by namajurusan";
		  $jrs2= mysql_query($jrs);
		  
		  while ($hjrs=mysql_fetch_array($jrs2)){
		  if ($hjrs['kodejurusan']==$namajurusan){
		  	echo"<option value='$hjrs[kodejurusan]' selected=selected> $hjrs[namajurusan]</option>";
		  }
		  else
		  {
			echo"<option value='$hjrs[kodejurusan]'>$hjrs[namajurusan]</option>";		  }
		  }
		  ?>
          </select>
          </label>
            <label for="textfield"> <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat Lengkap</td>
          <td>&nbsp;</td>
          <td><label></label>
            <label for="textarea"></label>
            <label for="textfield"></label><input name="alamatsiswa" type="text" value="<?php echo $alamatsiswa;?>" size="30" />
            <span class="style6">*</span> </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Sekolah Asal </td>
          <td>&nbsp;</td>
          <td><label>
            <select name="kodesekolah" id="kodesekolah">
              <option value="NotKodeSekolah" selected="selected"> [---Kode Sekolah---]</option>
          <?php
		  $skl="select kodesekolah,namasekolah from tblsekolah order by namasekolah";
		  $skl2= mysql_query($skl);
		  
		  while ($hskl=mysql_fetch_array($skl2)){
		  if ($hskl['kodesekolah']==$namasekolah){
		  	echo"<option value='$hskl[kodesekolah]' selected=selected> $hskl[namasekolah]</option>";
		  }
		  else
		  {
			echo"<option value='$hskl[kodesekolah]'>$hskl[namasekolah]</option>";		  }
		  }
		  ?>
            </select>
            <span class="style6">*</span>          </label>
            <label for="textfield"></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tahun</td>
          <td>&nbsp;</td>
                <td><label>
            <select name="kodetahun" id="kodetahun">
              <option value="Notkodetahun" selected="selected"> [---Kode Tahun---]</option>
            <?php
		  $th="select kodetahun,namatahun from tbltahun order by namatahun";
		  $th2= mysql_query($th);
		  
		  while ($hth=mysql_fetch_array($th2)){
		  if ($hth['kodetahun']==$namatahun){
		  	echo"<option value='$hth[kodetahun]' selected=selected> $hth[namatahun]</option>";
		  }
		  else
		  {
			echo"<option value='$hth[kodetahun]'>$hth[namatahun]</option>";		  }
		  }
		  ?>
            </select>
            <span class="style6">*</span>          </label>
            <label for="textfield"></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor STTB</td>
          <td>&nbsp;</td>
          <td><input name="nomorsttb" type="text" value="<?php echo $nomorsttb;?>" size="30" />
            <span class="style6">*</span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label for="textfield"></label>
            <label></label>
            <label for="textfield"></label>
            <label></label></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>B.IDENTITAS ORANG TUA/WALI</strong></td>
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
          <td>Nama Ayah </td>
          <td>&nbsp;</td>
          <td><label>
              <input name="namaayah" type="text" value="<?php echo $namaayah;?>" size="40" />
              <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Ibu</td>
          <td>&nbsp;</td>
          <td><label>
            <input name="namaibu" type="text"  value="<?php echo $namaibu;?>" size="40" />
            <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat Orang Tua</td>
          <td>&nbsp;</td>
          <td><label>
<span class="style6">
<input name="alamatortu" type="text"  value="<?php echo $alamatortu;?>" size="30" />
*</span></label><label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Wali </td>
          <td>&nbsp;</td>
          <td><input name="namawali" type="text"  value="<?php echo $namawali;?>" size="40" />
            <span class="style6">*</span></td>
          <td>&nbsp;</td>
        </tr>
        
        
        <tr>
          <td>&nbsp;</td>
          <td>Alamat Wali </td>
          <td>&nbsp;</td>
          <td><input name="alamatwali" type="text"  value="<?php echo $alamatwali;?>" />
            <span class="style6">*</span> </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan Orang Tua </td>
          <td>&nbsp;</td>
          <td><label></label>
          <label for="label"></label>
          <select name="kodepekerjaan" id="kodepekerjaan">
            <option value="Notkodepekerjaan" selected="selected"> [---Pekerjaan---]</option>
             <?php
		  $pk="select kodepekerjaan,namapekerjaan from tblpekerjaan order by namapekerjaan";
		  $pk2= mysql_query($pk);
		  
		  while ($hpk=mysql_fetch_array($pk2)){
		  if ($hpk['kodepekerjaan']==$namapekerjaan){
		  	echo"<option value='$hpk[kodepekerjaan]' selected=selected> $hpk[namapekerjaan]</option>";
		  }
		  else
		  {
			echo"<option value='$hpk[kodepekerjaan]'>$hpk[namapekerjaan]</option>";		  }
		  }
		  ?>
          </select>
          <label><span class="style6">*</span> </label></td>
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
          <td colspan="3" bgcolor="#CCCCCC"><strong>Nilai Unas/STK</strong> <label></label></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><span class="style5">*</span><strong>Pengisian nilai harus menggunakan tanda titik</strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><span class="style3">CONTOH : 8.52 </span></td>
          <td>&nbsp;</td>
        </tr>
		<?php
		  $pel="select tblpelajaran.namapelajaran, tbltransaksi.kodepelajaran, nilai from tblpelajaran, tbltransaksi where nopendaftaran=$nopendaftaran and flag='1' and tblpelajaran.kodepelajaran=tbltransaksi.kodepelajaran";
		  $pel2= mysql_query($pel);
		  
		  while ($hpel=mysql_fetch_array($pel2)){
		?>
        <tr>
          <td>&nbsp;</td>
          <td><?php echo $hpel['namapelajaran'];?></td>
          <td>&nbsp;</td>
          <td><label>
            <input name="<?php echo $hpel['kodepelajaran']?>" type="text"  value="<?php echo $hpel['nilai'];?>" size="10" />
            <span class="style6">*</span> </label></td>
          <td>&nbsp;</td>
        </tr>
		<?php
		}
		?>
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
          <td><input type="submit" name="Submit" value="simpan" /></td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label></label></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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