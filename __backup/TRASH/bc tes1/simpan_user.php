<?php

include "../include/koneksi.php";

$koneksi=mysql_connect($host,$user,$pass) or die ("Gagal koneksi ke server".mysql_error());

if ($koneksi) {

mysql_select_db($db,$koneksi) or die ("Database Gagal Dibuka".mysql_error());

$user_name = $_POST['user_name'];
$pass = md5($_POST['pass']);
$level = $_POST['level'];

$SQL = "insert into tbl_user SET
	user_name='$user_name',
	pass='$pass',
	level='$level'";


mysql_query($SQL, $koneksi) or die ("Gagal Query Simpan data user" .mysql_error());
echo "<script type='text/javascript'>alert('Data User Berhasil Disimpan'), window.location = 'user.php'</script>";
}
?>