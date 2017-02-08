<?php 
include "../include/koneksi.php";
include "up1.php";

$NIS = $_GET['NIS'];
$sql = "select * from tbl_pegawai as s,tbl_ayah as a ,tbl_ibu as i where s.no_induk='$NIS' and s.no_induk = a.no_induk and s.no_induk = i.no_induk order  by s.no_induk";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
while($data=mysql_fetch_array($qry))
{

//A.keteranga pribadi
$NISN =$data['NISN'];
$NIS2 =$data['no_induk'];
$NIK = $data ['NIK'];
$KPS = $data ['KPS'];
$nama_lengkap =$data['nama'];
$nama_panggilan =$data['panggilan'];
$jenis_kelamin =$data['gender'];
$tempat_lahir =$data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($tgl_lahir ));
$id_agama =$data['kd_agama'];
$kewarganegaraan_s = $data['kewarganegaraan_pegawai'];
$anak_ke =$data['anak_ke'];
$jumlah_saudara_kandung =$data['jumlah_saudara'];
$saudara_tiri =$data['saudara_tiri'];
$saudara_angkat =$data['saudara_angkat'];
$yatim_piatu = $data['yatim_piatu'];
$bahasa = $data ['bahasa'];

//$NIS =$data['no_induk'];
//$nama_lengkap =$data['nama'];
//$nama_panggilan =$data['panggilan'];
//$jenis_kelamin =$data['gender'];
//$tempat_lahir =$data['tempat_lahir'];
//$tanggal_lahir =$data['tgl_lahir'];
//$agama =$data['kd_agama'];
//$anak_ke =$data['anak_ke'];
//$jumlah_saudara_kandung =$data['jumlah_saudara'];

// B. Keterangan tempat
$alamat_s =$data['alamat_s'];
$no_telp_s =$data['telepon_s'];
$tinggal_dengan = $data['tinggal_dengan'];
$jarak = $data ['jarak'];
$transportasi = $data['transportasi'];

//$alamat =$data['alamat_s'];
//$no_telp =$data['telepon_s'];

//C. Keterangan kesehatan
$gol_darah = $data ['gol_darah'];
$penyakit = $data ['penyakit'];
$kelainan_jasmani = $data ['kelainan_jasmani'];
$tinggi = $data ['tinggi'];
$berat = $data ['berat'];

//D. Keterang pendidikan
$sekolah_asal =$data['kd_sekolah'];
$sttb = $data ['sttb'];
$skhu = $data ['skhu'];
$lama_belajar = $data ['lama_belajar'];
$pindahan = $data ['pindahan'];
$alasan = $data ['alasan'];
$id_kelas =$data['kd_kelas'];
$tanggal_masuk = $data ['tanggal_masuk'];
$status_masuk = $data['status_masuk'];
$gambar =$data['gambar'];
$asal_sekolah = $data ['asal_sekolah'];

// E. Keterangan ayah
$nama_ayah = $data['nama_ayah'];
$id_agama_a = $data['kd_agama'];
$kewarganegaraan_a = $data['kewarganegaraan_a'];
$id_pendidikan_a = $data['tingkat_pendidikan_a'];
$id_pekerjaan_a = $data['kd_pekerjaan_a'];
$alamat_a = $data['alamat_a'];
$no_telp_a = $data['telepon_a'];
$ttl_a = $data['ttl_a'];
$penghasilan_a = $data['penghasilan_a'];
$masih_hidup_a = $data['masih_hidup_a'];
$pekerjaan_a = $data['pekerjaan_a'];

// F. Keterangan ibu
$nama_ibu = $data['nama_ibu'];
$id_agama_i = $data['kd_agama_i'];
$kewarganegaraan_i = $data['kewarganegaraan_i'];
$id_pendidikan_i = $data['tingkat_pendidikan_i'];
$id_pekerjaan_i = $data['kd_pekerjaan_i'];
$alamat_i = $data['alamat_i'];
$no_telp_i = $data['telepon_i'];
$ttl_i = $data['ttl_i'];
$penghasilan_i = $data['penghasilan_i'];
$masih_hidup_i = $data ['masih_hidup_i'];
$pekerjaan_i = $data ['pekerjaan_i'];

$sql2 = "select * from tbl_wali where no_induk= $NIS";
$qry2 = mysql_query($sql2,$koneksi) or die ("Query Gagal ".mysql_error());
while($data2=mysql_fetch_array($qry2))
{
// G. Keterangan wali
$nama_wali = $data2['nama_wali'];
$id_agama_w = $data2['kd_agama_w'];
$kewarganegaraan_w= $data2['kewarganegaraan_w'];
$id_pendidikan = $data2['tingkat_pendidikan_w'];
$id_pekerjaan = $data2['kd_pekerjaan_w'];
$tingkat_pendidikan_w = $data2['tingkat_pendidikan_w'];
$alamat_w = $data2['alamat_w'];
$no_telp_w = $data2['telepon_w'];
$ttl_w = $data2['ttl_w'];
$penghasilan_w = $data2['penghasilan_w'];
$pekerjaan_w = $data2['pekerjaan_w'];
}

//H. Keterangan hobi
$kesenian = $data ['kesenian'];
$olahraga = $data ['olahraga'];
$organisasi = $data ['organisasi'];
$hobi_lain = $data ['hobi_lain'];

//I. keterangan perkembangan
$beapegawai = $data ['beapegawai'];
$prestasi = $data ['prestasi'];
$tanggal_do = $data ['tanggal_do'];
$alasan_do = $data ['alasan_do'];
$tamat_belajar = $data ['tamat_belajar'];
$sttb_lulus = $data ['sttb_lulus'];
$skhu_lulus = $data ['skhu_lulus'];

//J. Keterangan selesai pendidikan
$lanjut = $data ['lanjut'];
$tanggal_bekerja = $data ['tanggal_bekerja'];
$nama_perusahaan = $data ['nama_perusahaan'];
$penghasilan_pegawai = $data ['penghasilan_pegawai'];

$sekolah_asal =$data['kd_sekolah'];
$kelas =$data['kd_kelas'];
$tingkat_pendidikan_a = $data['tingkat_pendidikan_a'];
$tingkat_pendidikan_i = $data['tingkat_pendidikan_i'];

$status_masuk = $data['status_masuk'];
$gambar =$data['gambar'];



}
?>

    <td><form id="form1" name="form1" method="post" action="updatedaftar.php?NIS=<?php echo $NIS;?>" enctype="multipart/form-data">
      <table width="1077" border="0">
        <tr>
        	<td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4"><div align="center" class="style3" font size="18">Edit  Data pegawai  </div></td>
        </tr>
        
<!--- a. KETERANGAN pegawai -------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>A.KETERANGAN PRIBADI </strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td width="159"> NIS</td>
          <td width="9"><div align="center"><strong>:</strong></div></td>
          <td width="305"><?php echo $NIS;?>
            <label>
            <input type="hidden" name="NIS" size="5" value="<?php echo $NIS;?>" />
            </label>
            <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="159"> NISN</td>
          <td width="9"><div align="center"><strong>:</strong></div></td>
          <td width="305"><?php echo $NISN;?>
            <label>
            <input type="hidden" name="NISN" size="5" value="<?php echo $NISN;?>" />
            </label>
            <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>NIK</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="NIK" value="<?php echo $NIK;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>KPS</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="KPS" value="<?php echo $KPS;?>" />
          </td>
        </tr>
<!--- a.ket pegawai ---------------------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>Nama Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>" />
          </td>
          <td rowspan="11"><label><img src="<?= "../foto_pegawai/".$gambar; ?>"/>
          						<input name="gambar" type="file" id="fieldField" value="Cari Foto" />
                          </label>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Panggilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="nama_panggilan" value="<?php echo $nama_panggilan;?>" />
          </td>
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
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tempat lahir </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" /></td>
        </tr>
        <tr>
         
		    <td>&nbsp;</td>
		    <td>Tanggal lahir </td>
		    <td><div align="center"><strong>:</strong></div></td>
		    <td><input type="date" id="to" name="tgl_lahir" size="9" value="<?php echo $tanggal_lahir ?>" onclick="if(self.gfPop)gfPop.fPopCalendar(document.form1.to);return false;"/>
		      <a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.form1.tgl_lahir);return false;" ><img src="./calender/calender.jpeg" alt="" name="popcal" width="34" height="29" id="popcal" style="border:none" align="center" border="0" /></a>
		      <iframe width="174" height="189" name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:500px;"> </iframe></td>
	    </tr>
         <tr>
          <td>&nbsp;</td>
          <td>Agama </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_agama" id="id_agama">
            <option value="$id_agama" selected="selected"> [---Agama---]</option>
            <?php
		  $sql="select * from tbl_agama ";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_agama]==$id_agama){
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
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="kewarganegaraan_s" value="<?php echo $kewarganegaraan_s;?>" />
          </td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="anak_ke" value="<?php echo $anak_ke;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara kandung</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="jumlah_saudara_kandung" value="<?php echo $jumlah_saudara_kandung;?>" /></td>
        </tr>
          <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara tiri </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="saudara_tiri" value="<?php echo $saudara_tiri;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara angkat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="saudara_angkat" value="<?php echo $saudara_angkat;?>" /></td>
        </tr>
          <tr>
          <td>&nbsp;</td>
          <td>Anak yatim/piatu </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="yatim_piatu" value="<?php echo $yatim_piatu;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Bahasa sehari-hari</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="bahasa" value="<?php echo $bahasa;?>" /></td>
        </tr>
<!---  -------------------------------------->
<!--- b. KETERANGAN tempat-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>B. KETERANGAN TEMPAT TINGGAL</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="159">Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
                <td><textarea name="alamat_s"><?php echo $alamat_s;?></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="no_telp_s" value="<?php echo $no_telp_s;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tinggal dengan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tinggal_dengan" value="<?php echo $tinggal_dengan;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jarak</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="jarak" value="<?php echo $jarak;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Transportasi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="transportasi" value="<?php echo $transportasi;?>" /></td>
        </tr>
<!--- c. KETERANGAN Sehat-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>C. KETERANGAN KESEHATAN</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Golongan darah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="gol_darah" value="<?php echo $gol_darah;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penyakit yang diderita</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="penyakit" value="<?php echo $penyakit;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kelainan jasmani</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="kelainan_jasmani" value="<?php echo $kelainan_jasmani;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tinggi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tinggi" value="<?php echo $tinggi;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Berat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="berat" value="<?php echo $berat;?>" /></td>
        </tr>
<!--- d. KETERANGAN pendidikan-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>D. KETERANGAN PENDIDIKAN</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Asal sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="asal_sekolah" value="<?php echo $asal_sekolah;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="sttb" value="<?php echo $sttb;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor SKHU</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="skhu" value="<?php echo $skhu;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Lama belajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="lama_belajar" value="<?php echo $lama_belajar;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pindahan dari sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="pindahan" value="<?php echo $pindahan;?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alasan pindah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="alasan" value="<?php echo $alasan;?>" /></td>
        </tr>
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
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal diterima</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tanggal_masuk" value="<?php echo $tanggal_masuk;?>" /></td>
        </tr>
<!--- e. KETERANGAN ayah-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>E. KETERANGAN AYAH KANDUNG</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Ayah </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="nama_ayah" value="<?php echo $nama_ayah;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td><div align="center">:</div></td>
          <td><select name="agama_a" id="id_agama_a">
            <option value="Notid_agama_a" selected="selected"> [---Agama---]</option>
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
          <td>Tempat & tanggal lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="ttl_a" value="<?php echo $ttl_a;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center">:</div></td>
          <td><input name="kewarganegaraan_a" type="radio" value="WNI" id="radio5" <?php if($kewarganegaraan_a == 'WNI'){echo "checked";}?> />
WNI
  <input name="kewarganegaraan_a" type="radio" value="WNA" id="radio5" <?php if($kewarganegaraan_a == 'WNA'){echo "checked";}?>/>
WNA</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan</td>
          <td><div align="center">:</div></td>
         <td><input name="tingkat_pendidikan_a" type="radio" value="SD" id="radiobutton" <?php if($tingkat_pendidikan_a == 'SD'){echo "checked";}  ?> />
            SD
            <input name="tingkat_pendidikan_a" type="radio" value="SMP" id="radiobutton" <?php if($tingkat_pendidikan_a == 'SMP'){echo "checked";}  ?>/>
            SMP
			<input name="tingkat_pendidikan_a" type="radio" value="SMA" id="radiobutton" <?php if($tingkat_pendidikan_a == 'SMA'){echo "checked";}  ?>/>
            SMA
			<input name="tingkat_pendidikan_a" type="radio" value="Sarjana" id="radiobutton" <?php if($tingkat_pendidikan_a == 'Sarjana'){echo "checked";}  ?>/>
            Sarjana</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="pekerjaan_a" value="<?php echo $pekerjaan_a;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="penghasilan_a" value="<?php echo $penghasilan_a;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center">:</div></td>
          <td><textarea name="alamat_a"><?php echo $alamat_a;?></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="no_telp_a" value="<?php echo $no_telp_a;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Masih hidup/meninggal pada tahun</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="masih_hidup_a" value="<?php echo $masih_hidup_a;?>" />
          </td>
        </tr>
<!--- f. KETERANGAN ibu-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>F. KETERANGAN IBU KANDUNG</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama ibu </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="nama_ibu" value="<?php echo $nama_ibu;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td><div align="center">:</div></td>
          <td><select name="id_agama_i" id="id_agama_i">
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
          <td>Tempat & tanggal lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="ttl_i" value="<?php echo $ttl_i;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center">:</div></td>
          <td><input name="kewarganegaraan_i" type="radio" value="WNI" id="radio5" <?php if($kewarganegaraan_i == 'WNI'){echo "checked";}?> />
WNI
  <input name="kewarganegaraan_i" type="radio" value="WNA" id="radio5" <?php if($kewarganegaraan_i== 'WNA'){echo "checked";}?>/>
WNA</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan</td>
          <td><div align="center">:</div></td>
         <td><input name="tingkat_pendidikan_i" type="radio" value="SD" id="radiobutton" <?php if($tingkat_pendidikan_i == 'SD'){echo "checked";}  ?> />
            SD
            <input name="tingkat_pendidikan_i" type="radio" value="SMP" id="radiobutton" <?php if($tingkat_pendidikan_i == 'SMP'){echo "checked";}  ?>/>
            SMP
			<input name="tingkat_pendidikan_i" type="radio" value="SMA" id="radiobutton" <?php if($tingkat_pendidikan_i == 'SMA'){echo "checked";}  ?>/>
            SMA
			<input name="tingkat_pendidikan_i" type="radio" value="Sarjana" id="radiobutton" <?php if($tingkat_pendidikan_i == 'Sarjana'){echo "checked";}  ?>/>
            Sarjana</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="pekerjaan_i" value="<?php echo $pekerjaan_i;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="penghasilan_i" value="<?php echo $penghasilan_i;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center">:</div></td>
          <td><textarea name="alamat_i"><?php echo $alamat_i;?></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="no_telp_i" value="<?php echo $no_telp_i;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Masih hidup/meninggal pada tahun</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="masih_hidup_i" value="<?php echo $masih_hidup_i;?>" />
          </td>
        </tr>
<!--- g. KETERANGAN wali-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>G. KETERANGAN WALI</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
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
          <td>Tempat & tanggal lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="ttl_w" value="<?php echo $ttl_w;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center">:</div></td>
          <td><input name="kewarganegaraan_w" type="radio" value="WNI" id="radio5" <?php if($kewarganegaraan_w == 'WNI'){echo "checked";}?> />
WNI
  <input name="kewarganegaraan_w" type="radio" value="WNA" id="radio5" <?php if($kewarganegaraan_w == 'WNA'){echo "checked";}?>/>
WNA</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan</td>
          <td><div align="center">:</div></td>
         <td><input name="tingkat_pendidikan_w" type="radio" value="SD" id="radiobutton" <?php if($tingkat_pendidikan_w == 'SD'){echo "checked";}  ?> />
            SD
            <input name="tingkat_pendidikan_w" type="radio" value="SMP" id="radiobutton" <?php if($tingkat_pendidikan_w == 'SMP'){echo "checked";}  ?>/>
            SMP
			<input name="tingkat_pendidikan_w" type="radio" value="SMA" id="radiobutton" <?php if($tingkat_pendidikan_w == 'SMA'){echo "checked";}  ?>/>
            SMA
			<input name="tingkat_pendidikan_w" type="radio" value="Sarjana" id="radiobutton" <?php if($tingkat_pendidikan_w == 'Sarjana'){echo "checked";}  ?>/>
            Sarjana</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="pekerjaan_w" value="<?php echo $pekerjaan_w;?>" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="penghasilan_w" value="<?php echo $penghasilan_w;?>" />
          </td>
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
<!--- h. KETERANGAN HOBI-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>H. KETERANGAN HOBI</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kesenian</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="kesenian" value="<?php echo $kesenian;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Olahraga</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="olahraga" value="<?php echo $olahraga;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Organisis/kemasyarakatan</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="organisasi" value="<?php echo $organisasi;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Lain-lain</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="hobi_lain" value="<?php echo $hobi_lain;?>" /></td>
          <td>&nbsp;</td>
        </tr>
<!--- i. KETERANGAN HOBI-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>I. KETERANGAN PERKEMBANGAN pegawai</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Beapegawai</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="beapegawai" value="<?php echo $beapegawai;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Prestasi</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="prestasi" value="<?php echo $prestasi;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal keluar sekolah</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="tanggal_do" value="<?php echo $tanggal_do;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alasan keluar</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="alasan_do" value="<?php echo $alasan_do;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tamat belajar</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="tamat_belajar" value="<?php echo $tamat_belajar;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="sttb_lulus" value="<?php echo $sttb_lulus;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor SKHU</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="skhu_lulus" value="<?php echo $skhu_lulus;?>" /></td>
          <td>&nbsp;</td>
        </tr>       
        
        
<!--- j. KETERANGAN selesai-------------------------------------->
        <tr>
          <td width="64">&nbsp;</td>
          <td colspan="3" bgcolor="#CCCCCC"><strong>J. KETERANGAN SETELAH SELESAI PENDIDIKAN</strong>
            <label></label></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Melanjutkan di Univ</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="lanjut" value="<?php echo $lanjut;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal bekerja</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="tanggal_bekerja" value="<?php echo $tanggal_bekerja;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Perusahaan</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="nama_perusahaan" value="<?php echo $nama_perusahaan;?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penghasilan</td>
          <td><div align="center">:</div></td>
          <td><input type="text" name="penghasilan_pegawai" value="<?php echo $penghasilan_pegawai;?>" /></td>
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
<?php include "down1.php" ?>
</body>
</html>