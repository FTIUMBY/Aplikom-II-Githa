<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_pendidikan= $_GET['id_pendidikan'];

$sql="delete from tbl_pendidikan where kd_pendidikan='$id_pendidikan'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query Menghapus pendidikan" .mysql_error());

include_once "pendidikan.php";

?>
