<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_pendidikan = $_POST['id_pendidikan'];
$nama_pendidikan= $_POST['nama_pendidikan'];


$sql="insert into tbl_pegawai SET
	NIP='$NIP',
	pendidikan='$kd_pendidikan'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan pegawai" .mysql_error());

include_once "pegawai.php";
}

?>



