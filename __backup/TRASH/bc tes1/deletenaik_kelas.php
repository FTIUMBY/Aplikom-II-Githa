<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_naik = $_GET['id_naik_kelas'];

$sql="delete from tbl_kenaikan_kelas where kd_kenaikan='$id_naik'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query Menghapus Kenaikan Kelas" .mysql_error());

include_once "kenaikan_kelas.php";

?>
