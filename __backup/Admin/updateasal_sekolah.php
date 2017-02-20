<?php
	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_sekolah = $_GET['id_sekolah'];
$nama_sekolah = $_POST['nama_sekolah'];
$alamat_sekolah = $_POST['alamat_sekolah'];


$sql="update  tbl_asal_sekolah SET
	nama_sekolah='$nama_sekolah',
	alamat = '$alamat_sekolah'
	where kd_sekolah='$id_sekolah'";
	
	
mysql_query($sql,$koneksi) or die ("Gagal Query memperbarui data sekolah" .mysql_error());


include_once "asal_sekolah.php";

}

?>