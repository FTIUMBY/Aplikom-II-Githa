<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_pendidikan = $_POST['id_pendidikan'];
$nama_pendidikan= $_POST['nama_pendidikan'];


$sql="insert into tbl_pendidikan SET
	kd_pendidikan='$id_pendidikan',
	pendidikan='$nama_pendidikan'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan pendidikan" .mysql_error());

include_once "pendidikan.php";
}

?>



