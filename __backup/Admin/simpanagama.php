<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_agama = $_POST['id_agama'];
$nama_agama= $_POST['nama_agama'];


$sql="insert into tbl_agama SET
	kd_agama='$id_agama',
	agama='$nama_agama'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan kelas" .mysql_error());

include_once "agama.php";
}

?>



