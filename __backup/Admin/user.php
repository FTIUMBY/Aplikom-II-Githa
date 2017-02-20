<link rel="stylesheet" href="style_table.css" />
<?php 
error_reporting (E_ALL^(E_NOTICE | E_WARNING));
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?> 

<?php include "up1.php";?>
         
   	  <table width="558" border="0" align="center" cellpadding="0" cellspacing="0" >
       	      <tr>
       	        <td height="35" align="right"><a href="formuser.php">Tambah User</a></td>
   	          </tr>
       	      <?php
		  $batas = 50;
          if (empty($halaman))
          {
          	$posisi = 0;
          	$halaman = 1;
          }
          else
          {
          	$posisi = ($halaman - 1)* $batas;
          }
		  
$sql = "select * from tbl_user ";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no=1; 
while($data=mysql_fetch_array($qry))
{
     $user_name=$data['user_name'];
     $pass=$data['pass'];
   	$level=$data['level'];
   	$no++; 
?>
       	      <?php }; ?>
        </table>
   	  <table width="558" border="2" align="center"  cellpadding="0" cellspacing="0" bordercolor="#0000000">
        <tr>
                  <td bgcolor="#CCCCCC"><div align="center">No</div></td>
                  <td bgcolor="#CCCCCC"><div align="center">User Name</div></td>
                 
                  <td width="161" bgcolor="#CCCCCC"><div align="center">Level</div></td>
                  <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
        </tr>
                <?php
		  $batas = 50;
          if (empty($halaman))
          {
          	$posisi = 0;
          	$halaman = 1;
          }
          else
          {
          	$posisi = ($halaman - 1)* $batas;
          }
		  
$sql = "select * from tbl_user ";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
$no=1; 
while($data=mysql_fetch_array($qry))
{
     $user_name=$data['user_name'];
     $pass=$data['pass'];
   	$level=$data['level'];
   	$no++; 
?>
                <tr>
                  <td width="45" bgcolor="#FFFFFF"><div align="center">
                      <?php $i++; echo $i?>
                  </div></td>
                  <td width="163" bgcolor="#FFFFFF"><?php echo $user_name;?></td>
                
                  <td bgcolor="#FFFFFF"><?php echo $level;?>
                      <div align="center"></div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center"><a href="edituser.php?user_name=<?php echo $user_name;?>">Edit</a></div></td>
                  <td width="109" bgcolor="#FFFFFF"><div align="center"><a href="deleteuser.php?user_name=<?php echo $user_name;?>" onclick="return confirm('Apakah Anda benar-benar akan menghapus user ini?')">hapus</a></div></td>
                </tr>
                <?php }; ?>
      </table></td>
            </tr>
          </table>    
          
	
			
<?php include "down1.php";?>
