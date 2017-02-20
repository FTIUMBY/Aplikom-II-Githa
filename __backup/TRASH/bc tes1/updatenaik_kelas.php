<?php
	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_naik = $_GET['id_naik_kelas'];
$kelas = $_POST['id_kelas'];
$tahun_ajar = $_POST['id_tahun_ajar'];
$NIS = $_POST['no_induk'];

$siswa="update tbl_siswa set kd_kelas='$kelas' where no_induk ='$NIS'";
	
mysql_query($siswa,$koneksi) or die ("Gagal Query Update Siswa Ya" .mysql_error());

$sql="update  tbl_kenaikan_kelas SET
	kd_kelas='$kelas',
	kd_tahun_ajar='$tahun_ajar'
	where kd_kenaikan='$id_naik'";
	
	
mysql_query($sql,$koneksi) or die ("Gagal Query Update Kenaikan Kelas" .mysql_error());




include_once "kenaikan_kelas.php";

}

?>