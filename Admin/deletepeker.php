<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_pekerjaan= $_GET['id_pekerjaan'];

$sql="delete from tbl_pekerjaan where kd_pekerjaan='$id_pekerjaan'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query Menghapus Dekerjaan" .mysql_error());

include_once "pekerjaan.php";

?>
