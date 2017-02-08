<?php
	include "../include/koneksi.php";
	
$koneksi = mysql_connect($host,$user,$passs) or die (mysql_error());
if ($koneksi){
mysql_select_db($db,$koneksi) or die (mysql_error());

$id_user = $_POST['id_user'];
$user_name = $_POST['user_name'];
$pass = md5($_POST['pass']);
$level = $_POST['level'];


$sql = "update user_login SET
id_user		='$id_user',
user_name	='$user_name',
pass		='$pass',
level		='$level'	
where id_user='$id_user'";

mysql_query($sql,$koneksi) or die ("Gagal Query Update" .mysql_error());

include_once "user.php";

}
?>
 
