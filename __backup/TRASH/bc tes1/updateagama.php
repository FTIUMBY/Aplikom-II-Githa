<?php
	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_agama = $_GET['kd_agama'];
$nama_agama = $_POST['agama'];




$sql="update  tbl_agama SET
	agama='$nama_agama'
	where kd_agama='$id_agama'";
	
	
mysql_query($sql,$koneksi) or die ("Gagal Query simpan agama" .mysql_error());


include_once "agama.php";

}

?>