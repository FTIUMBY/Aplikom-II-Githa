<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_kelas = $_POST['id_kelas'];
$nama_kelas= $_POST['nama_kelas'];


$sql="insert into tbl_kelas SET
	kd_kelas='$id_kelas',
	kelas='$nama_kelas'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan kelas" .mysql_error());

include_once "kelas.php";
}

?>



