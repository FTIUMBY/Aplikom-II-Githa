<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_kelas= $_GET['id_kelas'];

$sql="delete from tbl_kelas where kd_kelas='$id_kelas'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query Menghapus Kelas" .mysql_error());

include_once "kelas.php";

?>
