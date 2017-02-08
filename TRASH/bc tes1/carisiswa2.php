<?php
include "../include/koneksi.php";

$koneksi=mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

$NIS=$_POST['no_induk'];


header( "location:siswa_naik_kelas.php?no_induk=$NIS");
}
?>
