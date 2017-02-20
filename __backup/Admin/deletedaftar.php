<?php

	include "../include/koneksi.php";


$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());
}
$NIS = $_GET['NIS'];

$sql = "SELECT gambar FROM tbl_pegawai WHERE no_induk = ".$_GET['NIS'];

$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if(count($row) > 0){
	if($row['gambar'] != ""){
		unlink("../foto_pegawai/".$row['gambar']);
	}
}

$sql="delete from tbl_pegawai where no_induk='$NIS'";
	
mysql_query($sql,$koneksi) or die ("Gagal Query simpan Ini Ya" .mysql_error());

include_once "viewpegawai.php";

?>
