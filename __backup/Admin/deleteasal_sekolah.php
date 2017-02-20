<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_sekolah= $_GET['id_sekolah'];

$sql="delete from tbl_asal_sekolah where kd_sekolah='$id_sekolah'";
	
mysql_query($sql,$koneksi) or die ("Gagal Menghapus data Sekolah" .mysql_error());

include_once "asal_sekolah.php";

?>
