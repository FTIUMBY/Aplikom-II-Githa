<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_tahun_ajar = $_POST['id_tahun_ajar'];
$nama_tahun_ajar= $_POST['nama_tahun_ajar'];


$sql="insert into tbl_tahun_ajar SET
	kd_tahun_ajar='$id_tahun_ajar',
	tahun_ajar='$nama_tahun_ajar'";
	
		
mysql_query($sql,$koneksi) or die ("Gagal Query simpan tahun_ajar" .mysql_error());

include_once "tahun_ajar.php";
}

?>



