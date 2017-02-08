<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_pekerjaan = $_POST['id_pekerjaan'];
$nama_pekerjaan= $_POST['nama_pekerjaan'];


$sql="insert into tbl_pekerjaan SET
	kd_pekerjaan='$id_pekerjaan',
	pekerjaan='$nama_pekerjaan'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan Pekerjaan" .mysql_error());

include_once "pekerjaan.php";
}

?>



