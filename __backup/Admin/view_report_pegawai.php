<?php 
include "../include/koneksi.php";
session_start();

$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");
}
$NIP = $_GET['NIP'];
$qry=mysql_query("select * from `tbl_pegawai` where `NIP`='$NIP'");
$data=mysql_fetch_array($qry);

$qry2=mysql_query("select * from `tbl_ibu` where `NIP`='$NIP'");
$data2=mysql_fetch_array($qry2);

$qry3=mysql_query("select * from `tbl_ayah` where `NIP`='$NIP'");
$data3=mysql_fetch_array($qry3);
//print_r($data3); die();

$qry4=mysql_query("select * from `tbl_wali` where `NIP`='$NIP'");
$data4=mysql_fetch_array($qry4);



//A.keteranga pribadi
$NIPN =$data['NIPN'];
$NIP2 =$data['NIP'];
$NIK = $data ['NIK'];
$KPS = $data ['KPS'];
$nama_lengkap =$data['nama'];
$nama_panggilan =$data['panggilan'];
$jeNIP_kelamin =$data['gender'];
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

// B. Keterangan tempat
$alamat =$data['alamat_s'];
$no_telp =$data['telepon_s'];
$tinggal_dengan = $data['tinggal_dengan'];
$jarak = $data ['jarak'];
$transportasi = $data['transportasi'];

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
$id_pendidikan =$data['kd_pendidikan'];
$tanggal_masuk = $data ['tanggal_masuk'];
$status_masuk = $data['status_masuk'];
$gambar =$data['gambar'];
$asal_sekolah = $data ['asal_sekolah'];

//E. Keterangan ayah
$nama_ayah = $data3['nama_ayah'];
$id_agama_a = $data3['kd_agama_a'];
$kewarganegaraan_a = $data3['kewarganegaraan_a'];
$id_pendidikan_a = $data3['tingkat_pendidikan_a'];
$id_pekerjaan_a = $data3['kd_pekerjaan_a'];
$alamat_a = $data3['alamat_a'];
$no_telp_a = $data3['telepon_a'];
$ttl_a = $data3['ttl_a'];
$penghasilan_a = $data3['penghasilan_a'];
$masih_hidup_a = $data3['masih_hidup_a'];
$pekerjaan_a = $data3['pekerjaan_a'];

//F. Keterangan ibu
$nama_ibu = $data2['nama_ibu'];
$id_agama_i = $data2['kd_agama_i'];
$kewarganegaraan_i = $data2['kewarganegaraan_i'];
$id_pendidikan_i = $data2['tingkat_pendidikan_i'];
$id_pekerjaan_i = $data2['kd_pekerjaan_i'];
$alamat_i = $data2['alamat_i'];
$no_telp_i = $data2['telepon_i'];
$ttl_i = $data2['ttl_i'];
$penghasilan_i = $data2['penghasilan_i'];
$masih_hidup_i = $data2 ['masih_hidup_i'];
$pekerjaan_i = $data2 ['pekerjaan_i'];

//G. Keterangan wali
$nama_wali = $data4['nama_wali'];
$id_agama_w = $data4['kd_agama_w'];
$kewarganegaraan = $data4['kewarganegaraan_w'];
$id_pendidikan = $data4['tingkat_pendidikan_w'];
$id_pekerjaan = $data4['kd_pekerjaan_w'];
$alamat_w = $data4['alamat_w'];
$no_telp_w = $data4['telepon_w'];
$ttl_w = $data4['ttl_w'];
$penghasilan_w = $data4['penghasilan_w'];
$pekerjaan_w = $data4['pekerjaan_w'];

//H. Keterangan hobi
$kesenian = $data ['kesenian'];
$olahraga = $data ['olahraga'];
$orgaNIPasi = $data ['orgaNIPasi'];
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


$id_tahun_ajar=$data['kd_tahun_ajar'];

$agm_s=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama'");
$hagm_s=mysql_fetch_array($agm_s);


$agm_w=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama_w'");
$hagm_w=mysql_fetch_array($agm_w);

$agm_a=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama_a'");
$hagm_a=mysql_fetch_array($agm_a);

$agm_i=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama_i'");
$hagm_i=mysql_fetch_array($agm_i);

$sklh_asal=mysql_query("select * from `tbl_asal_sekolah` where `kd_sekolah`='$sekolah_asal'");
$hasal_sekolah=mysql_fetch_array($sklh_asal);


$kls_s=mysql_query("select * from `tbl_pendidikan` where `kd_pendidikan`='$id_pendidikan'");
$hkls_s=mysql_fetch_array($kls_s);

$ta=mysql_query("select * from `tbl_tahun_ajar` where `kd_tahun_ajar`='$id_tahun_ajar'");
$hta=mysql_fetch_array($ta);


$peker_w=mysql_query("select * from `tbl_pekerjaan` where `kd_pekerjaan`='$id_pekerjaan'");
$hpeker_w=mysql_fetch_array($peker_w);

$peker_a=mysql_query("select * from `tbl_pekerjaan` where `kd_pekerjaan`='$id_pekerjaan_a'");
$hpeker_a=mysql_fetch_array($peker_a);

$peker_i=mysql_query("select * from `tbl_pekerjaan` where `kd_pekerjaan`='$id_pekerjaan_i'");
$hpeker_i=mysql_fetch_array($peker_i);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <?php include "atasprint.php";?> 

    
				
		<title>Data Lengkap Pegawai</title><div id="content">
          <td><div align="center">
              <table width="845" border="0" align="center">
                <tr>
                  <td></td>
                </tr>

                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="4"><div align="center" class="style3"><strong> </strong></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
<!--- start ---------------------------->
        
        <tr>
          <td colspan="4">NIP</td>
          <td width="5"><div align="center"><strong>:</strong></div></td>
          <td width="371"><?php echo $NIP;?></td>
        </tr>
        <tr>
          <td colspan="4">NIPN</td>
          <td width="5"><div align="center"><strong>:</strong></div></td>
          <td width="371"><?php echo $NIPN;?></td>
          <td rowspan="11"><img src="../foto_pegawai/<?php echo $gambar;?>" hspace="0" border="0" height="44%" width="63%" /></td>
        </tr>
        <tr>
          <td colspan="4">NIK</td>
          <td width="5"><div align="center"><strong>:</strong></div></td>
          <td width="371"><?php echo $NIK;?></td>
        </tr>
		<tr>
          <td colspan="4">KPS</td>
          <td width="5"><div align="center"><strong>:</strong></div></td>
          <td width="371"><?php echo $KPS;?></td>
        </tr>
<!--- a. ketarangan pegawai ---------------------------->
        <tr>
          <td colspan="6">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="6"><strong>A.KETERANGAN PRIBADI </strong>
          <label></label></td>
          <td>&nbsp;</td>
   		</tr>
        <tr>
          <td>&nbsp;</td>
          <td>1.</td>
          <td colspan="2">Nama pegawai</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td width="212">Nama Lengkap </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $nama_lengkap;?></label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Nama Panggilan </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $nama_panggilan;?></label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>2.</td>
          <td colspan="2">JeNIP Kelamin</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $jeNIP_kelamin;?></label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>3.</td>
          <td colspan="2">Tempat Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $tempat_lahir;?></label></td>
    </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>4.</td>
          <td height="21" colspan="2">Tanggal Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><span class="style8"><?php echo $tanggal_lahir;?> </span></label></td>
        </tr>
        <tr>
          <td height="21">&nbsp;</td>
          <td>5.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $hagm_s['agama'];?></label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>6.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kewarganegaraan_s;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>7.</td>
           <td colspan="2">Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $anak_ke;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>8.</td>
          <td colspan="2">Jumlah saudara kandung </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $jumlah_saudara_kandung;?></label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>9.</td>
           <td colspan="2">Jumlah saudara tiri </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $saudara_tiri;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>10.</td>
          <td colspan="2">Jumlah saudara angkat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $saudara_angkat;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>11.</td>
          <td colspan="2">Anak yatim/piatu</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $yatim_piatu;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>12.</td>
          <td colspan="2">Bahasa sehari-hari</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $bahasa;?></label></td>
          <td>&nbsp;</td>
        </tr>
<!--- a. ketarangan pegawai ---------------------------->
        <tr>
          <td colspan="7">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>B. Keterangan Tempat Tinggal </strong>
          <label></label></td>
        </tr>
              
        <tr>
          <td>&nbsp;</td>
          <td>13.</td>
          <td colspan="2">Alamat Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label></label>
            <label for="textarea"></label>
            <label for="textfield"></label>
            <?php echo $alamat;?></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>14.</td>
          <td colspan="2">No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $no_telp;?></label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>15.</td>
          <td colspan="2">Tinggal dengan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $tinggal_dengan;?></label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>17.</td>
          <td colspan="2">Jarak dari sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $jarak;?></label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>18.</td>
          <td colspan="2">Transportasi ke sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $transportasi;?></label></td>
          <td>&nbsp;</td>
        </tr>
 
 <!--- --------------------------------------------------------------------------------------->
 <!--- c. ketarangan kesehatan---------------------------->
        <tr>
          <td colspan="7">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>C. KETERANGAN KESEHATAN</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>19.</td>
          <td colspan="2">Golongan Darah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $gol_darah;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>20.</td>
          <td colspan="2">Penyakit yang pernah diderita</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $penyakit;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>21.</td>
          <td colspan="2">Kelainan Jasmani</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $kelainan_jasmani;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>22.</td>
          <td colspan="2">Tinggi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $tinggi;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>23.</td>
          <td colspan="2">Berat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $berat;?></label></td>
          <td>&nbsp;</td>
        </tr>
 <!--- --------------------------------------------------------------------------------------->
 <!--- d. ketarangan pendidikan---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>D. KETERANGAN pendidikan</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>24.</td>
          <td colspan="2">pendidikan sebelumnya</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Asal Sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $asal_sekolah;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $sttb;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Nomor SKHU</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $skhu;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>d.</td>
          <td>Lama belajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $lama_belajar;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>25.</td>
          <td colspan="2">Pindahan</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Dari sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $pindahan;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Alasan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $alasan;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>26.</td>
          <td colspan="2">Diterima di sekolah ini</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td> Diterima di pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hkls_s['pendidikan'];?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tanggal diterima</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $tanggal_masuk;?></label></td>
          <td>&nbsp;</td>
        </tr>
		
<!--- e. ketarangan ayah---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>E. KETERANGAN AYAH KANDUNG</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>27.</td>
          <td colspan="2">Nama Ayah </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $nama_ayah;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>28.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hagm_a['agama'];?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>29.</td>
          <td colspan="2">Tempat & Tanggal Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $ttl_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>30.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kewarganegaraan_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>31.</td>
          <td colspan="2">pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $id_pendidikan_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>32.</td>
          <td colspan="2">Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $pekerjaan_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>33.</td>
          <td colspan="2">Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $penghasilan_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>34.</td>
          <td colspan="2">Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $alamat_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>35.</td>
          <td colspan="2">No.Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $no_telp_a;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>36.</td>
          <td colspan="2">Masih hidup/meninggal pada tahun</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $masih_hidup_a;?></td>
        </tr>
<!--- f. ketarangan ibu---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>F. KETERANGAN IBU KANDUNG</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>37.</td>
          <td colspan="2">Nama Ibu</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $nama_ibu;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>38.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hagm_i['agama'];?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>39.</td>
          <td colspan="2">Tempat & Tanggal lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $ttl_i;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>40.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kewarganegaraan_i;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>41.</td>
          <td colspan="2">pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $id_pendidikan_i;?></td>
        </tr>
    <tr>
          <td>&nbsp;</td>
          <td>42.</td>
          <td colspan="2">Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $pekerjaan_i;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>43.</td>
          <td colspan="2">Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $penghasilan_i;?></td>
        </tr>
    <tr>
          <td>&nbsp;</td>
          <td>44.</td>
          <td colspan="2">Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $alamat_i;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>45.</td>
          <td colspan="2">No.Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $no_telp_i;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>46.</td>
          <td colspan="2">Masih hidup/meninggal pada tahun</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $masih_hidup_i;?></td>
        </tr>
<!--- g. ketarangan wali---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>G. KETERANGAN WALI</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>47.</td>
          <td colspan="2">Nama Wali </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $nama_wali;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>48.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hagm_w['agama'];?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>49.</td>
          <td colspan="2">Tempat dan Tanggal lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $ttl_w;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>50.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kewarganegaraan;?></td>
        </tr>
    <tr>
          <td>&nbsp;</td>
          <td>51.</td>
          <td colspan="2">pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $id_pendidikan;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>51.</td>
          <td colspan="2">Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $pekerjaan_w;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>53.</td>
          <td colspan="2">penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $penghasilan_w;?></td>
        </tr>
    <tr>
          <td>&nbsp;</td>
          <td>54.</td>
          <td colspan="2">Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $alamat_w;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>55.</td>
          <td colspan="2">No.Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $no_telp_w;?></td>
        </tr>
<!--- g. ketarangan hobi---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>G. KETERANGAN HOBI</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>56.</td>
          <td colspan="2">Kesenian</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kesenian;?></td>
        </tr>
       <tr>
         <td>&nbsp;</td>
         <td>57.</td>
          <td colspan="2">Olahraga</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $olahraga;?></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>58.</td>
          <td colspan="2">OrgaNIPasi/kemasyarakatan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $orgaNIPasi;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>59.</td>
          <td colspan="2">lain-lain</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hobi_lain;?></td>
        </tr>
<!--- i. ketarangan perkambangan---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>I. KETERANGAN PERKEMBANGAN</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>60.</td>
          <td colspan="2">Menerima beapegawai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $beapegawai;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>61.</td>
          <td colspan="2">Prestasi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $prestasi;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>62.</td>
          <td colspan="2">Meninggalkan sekolah</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Tanggal keluar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $tanggal_do;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Alasan keluar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $alasan_do;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>63.</td>
          <td colspan="2">Akhir pendidikan</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Tamat belajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $tamat_belajar;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $sttb_lulus;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Nomor SKHU</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $skhu_lulus;?></td>
        </tr>
        
<!--- J. ketarangan SELESAI---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>J. KETERANGAN SETELAH SELESAI pendidikan</strong>
            <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>64.</td>
          <td colspan="2">Melanjutkan di Univ</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $lanjut;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>65.</td>
          <td colspan="2">Mulai bekerja</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Tanggal Bekerja</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $tanggal_bekerja;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Nama Perusahaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $nama_perusahaan;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $penghasilan_pegawai;?></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Tahun Ajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hta['tahun_ajar'];?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>          
          <td>          
        </tr>
        <tr>
          <td>          
          <td>          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          <td align="right">(...............................................)</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">NIP : .......................................</td>
        </tr>
        
<!--- --------------------------------------------------------------------------------------->

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>


<!-- ------------------------------------------->
                
                
                
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
                  <td colspan="2"><table width="200" border="0" align="right">
                    <tr>
                      <td><div align="left"></div></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><table width="220" border="0" align="right">
                    <tr>
                      <td><div align="left"></div></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              </form>
          </td>
          </tr>
</table>
        </form>    </td>
  </div>
		<script language="javascript">
window.print();
</script>
</body>
</html>