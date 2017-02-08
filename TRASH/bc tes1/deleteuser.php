<?php
	include "../include/koneksi.php";

$koneksi=mysql_connect($host,$user,$pass) or die ("Gagal koneksi ke server".mysql_error());

if ($koneksi) {

mysql_select_db($db,$koneksi) or die ("Database Gagal Dibuka".mysql_error());

$id_user = $_GET['user_name'];

$sql = "delete from tbl_user where user_name='$id_user'";

mysql_query($sql, $koneksi) or die ("Gagal Query Simpan" .mysql_error());
echo "<script type='text/javascript'>alert('Data User Berhasil Dihapus'), window.location = 'user.php'</script>";
	}
//include_once "user.php";
?>