<?php

	include "../include/koneksi.php";


$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$NIS = $_GET['NIS'];

$sql="delete from tbl_siswa where no_induk='$NIS'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query simpan Ini Ya" .mysql_error());

include_once "viewsiswa.php";

?>
