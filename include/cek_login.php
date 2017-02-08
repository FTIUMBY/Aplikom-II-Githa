<?php
session_start();
include "../include/koneksi.php";
 
$id_user = $_POST['user_name'];
$pass = $_POST['pass'];
$hash = md5($pass);
$op = $_GET['op'];
 
if($op=="in"){
	if(isset($_POST['login']))
	{
		//cek apakah semua kolom sudah terisi
		if(!$_POST['user_name'] | !$_POST['pass'])
		{
			header("location:../index.php?err=1");
		}
		else
		{
    $cek = mysql_query("SELECT * FROM tbl_user WHERE user_name='$id_user' AND pass='$hash'");
	$cek2 = mysql_query("SELECT * FROM tb_user WHERE user_name='$id_user2' AND pass='$hash2'");
	
	
	
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['user_name'] = $c['user_name'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:../Admin/index.php");
        }
        else if($c['level']=="petugas"){
            header("location:../Petugas/index.php");
        }
    }else
			{   
				//jika tidak, kembali ke index.php dengan pesan error
				header("location:../index.php?err=2");}
		}
	}
}else if($op=="out"){
    unset($_SESSION['user_name']);
    unset($_SESSION['level']);
    header("location:../index.php");
}
?>