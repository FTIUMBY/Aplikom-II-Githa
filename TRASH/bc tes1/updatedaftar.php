<?php

	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());



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
$tahun_masuk = $_POST['tahun_masuk'];
$status_masuk = $_POST['status_masuk'];
$nama_wali = $_POST['nama_wali'];
$agama_wali = $_POST['agama_wali'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$pendidikan = $_POST['tingkat_pendidikan'];
$pekerjaan = $_POST['id_pekerjaan'];
$alamat_wali = $_POST['alamat_wali'];
$no_telp_wali = $_POST['no_telp_wali'];


$siswa="update tbl_siswa SET
	nama='$nama_lengkap',
	gender='$jenis_kelamin',
	tempat_lahir='$tempat_lahir',
	tgl_lahir='$tanggal_lahir',
	kd_agama='$id_agama',
	anak_ke='$anak_ke',
	jumlah_saudara='$jumlah_saudara_kandung',
	alamat_s='$alamat',
	kd_sekolah='$id_sekolah',
	telepon_s='$no_telp',
	status_masuk='$status_masuk',
	kd_kelas='$id_kelas'
	where no_induk = '$NIS'";

	
	
mysql_query($siswa,$koneksi) or die ("Gagal Query Update Siswa Ya" .mysql_error());

$wali="update tbl_wali SET
	nama_wali='$nama_wali',
	kd_agama='$agama_wali',
	kewarganegaraan='$kewarganegaraan',
	tingkat_pendidikan='$pendidikan',
	kd_pekerjaan='$pekerjaan',
	alamat='$alamat_wali',
	telepon='$no_telp_wali'
	where no_induk='$NIS'";
mysql_query($wali,$koneksi) or die ("Gagal Query Update wali" .mysql_error());
include_once "viewsiswa.php";

}

?>