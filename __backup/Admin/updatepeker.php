<?php
	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_pekerjaan = $_GET['id_pekerjaan'];
$nama_pekerjaan = $_POST['nama_pekerjaan'];




$sql="update  tbl_pekerjaan SET
	pekerjaan='$nama_pekerjaan'
	where kd_pekerjaan='$id_pekerjaan'";
	
	
mysql_query($sql,$koneksi) or die ("Gagal Query simpan Ini Ya" .mysql_error());


include_once "pekerjaan.php";

}

?>