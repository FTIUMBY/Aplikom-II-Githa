<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$id_tahun_ajar= $_GET['id_tahun_ajar'];

$sql="delete from tbl_tahun_ajar where kd_tahun_ajar='$id_tahun_ajar'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query Menghapus Tahun Ajar" .mysql_error());

include_once "tahun_ajar.php";

?>
