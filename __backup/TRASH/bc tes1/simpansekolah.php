<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$nama_sekolah= $_POST['nama_sekolah'];
$alamat_sekolah= $_POST['alamat_sekolah'];


$sql="insert into tbl_asal_sekolah SET
	kd_sekolah='$id_agama',
	nama_sekolah='$nama_sekolah',
	alamat='$alamat_sekolah'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan data sekolah" .mysql_error());

include_once "asal_sekolah.php";
}

?>