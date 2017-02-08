<?php
$host="localhost";
$user="root";
$pass="";
$db="bukuinduktamansiswa";
$koneksi=mysql_connect($host,$user,$pass);
if ($koneksi) 
{
mysql_select_db($db,$koneksi) or die ("Error : ".mysql_error());
}
?>