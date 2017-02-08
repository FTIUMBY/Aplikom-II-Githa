<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());


function spasi($s)
{
	$spasi=str_replace(" ","_", $s);
	return($spasi);
}

$NIS = $_POST['NIS'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$id_agama = $_POST['id_agama'];
$anak_ke = $_POST['anak_ke'];
$jumlah_saudara_kandung = $_POST['jumlah_saudara_kandung'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_sekolah = $_POST['id_sekolah'];
$id_kelas = $_POST['id_kelas'];
$tahun_ajar = $_POST['id_tahun_ajar'];

$sql="select * from tbl_tahun_ajar where kd_tahun_ajar='$tahun_ajar' ";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  { 
	$tahun_masuk= $data['tahun_ajar'];
  }


$status_masuk = $_POST['status_masuk'];

$nama_wali = $_POST['nama_wali'];
$agama_wali = $_POST['agama_wali'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$pendidikan = $_POST['tingkat_pendidikan'];
$pekerjaan = $_POST['id_pekerjaan'];
$alamat_wali = $_POST['alamat_wali'];
$no_telp_wali = $_POST['no_telp_wali'];

$path='../foto_siswa/';
$filename=spasi($_FILES['gambar']['name']);
move_uploaded_file($_FILES['gambar']['tmp_name'], $path.$filename);

if(!$_POST['NIS'] | !$_POST['nama_lengkap'] )
{
	header("location:form_input_data.php?kosong=1");
}

else
{

$siswa="insert into tbl_siswa SET
	no_induk='$NIS',
	nama='$nama_lengkap',
	gender='$jenis_kelamin',
	tempat_lahir='$tempat_lahir',
	tgl_lahir='$tanggal_lahir',
	kd_agama='$id_agama',
	kd_kelas='$id_kelas',
	kd_tahun_ajar='$tahun_ajar',
	anak_ke='$anak_ke',
	jumlah_saudara='$jumlah_saudara_kandung',
	alamat_s='$alamat',
	kd_sekolah='$id_sekolah',
	telepon_s='$no_telp',
	tahun_masuk='$tahun_masuk',
	status_masuk='$status_masuk',
	gambar='$filename'";
	
mysql_query($siswa,$koneksi) or die ("Gagal Query simpan Data Siswa" .mysql_error());

$wali="insert into tbl_wali SET
	no_induk='$NIS',
	nama_wali='$nama_wali',
	kd_agama='$agama_wali',
	kewarganegaraan='$kewarganegaraan',
	tingkat_pendidikan='$pendidikan',
	kd_pekerjaan='$pekerjaan',
	alamat='$alamat_wali',
	telepon='$no_telp_wali'";
	
mysql_query($wali,$koneksi) or die ("Gagal Query simpan Data wali" .mysql_error());


$kelas="insert into tbl_kenaikan_kelas SET
	kd_kenaikan='$naik',
	no_induk='$NIS',
	kd_kelas='$id_kelas',
	kd_tahun_ajar='$tahun_ajar'";
	
mysql_query($kelas,$koneksi) or die ("Gagal Query simpan tabel kenaikan Kelas" .mysql_error());


echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=http://localhost/datasiswa/admin/view_siswa.php?NIS=$_POST[NIS]\">");}
?>