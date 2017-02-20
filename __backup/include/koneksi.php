<?php
$host="localhost";
$user="root";
$pass="root";
$db="_kampus_db_aplikom2_githa";
$koneksi=mysql_connect($host,$user,$pass);
if ($koneksi) 
{
mysql_select_db($db,$koneksi) or die ("Error : ".mysql_error());
}
?>