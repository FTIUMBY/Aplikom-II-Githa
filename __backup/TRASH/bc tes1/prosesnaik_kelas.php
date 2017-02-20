<?php

	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$NIS = $_GET['no_induk'];
$kd_kelas = $_POST['id_kelas'];
$kd_tahun_ajar = $_POST['id_tahun_ajar'];


$siswa="update tbl_siswa set kd_kelas='$kd_kelas',kd_tahun_ajar='$kd_tahun_ajar' where no_induk ='$NIS'";
	
mysql_query($siswa,$koneksi) or die ("Gagal Query Update Siswa Ya" .mysql_error());

$kelas="insert into tbl_kenaikan_kelas values ('$no','$NIS','$kd_kelas','$kd_tahun_ajar')";
mysql_query($kelas,$koneksi) or die ("Gagal Query Update Siswa Ya" .mysql_error());

header( "location:kenaikan_kelas.php?no_induk=$NIS");

}

?>