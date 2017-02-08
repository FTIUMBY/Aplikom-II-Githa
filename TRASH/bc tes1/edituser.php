<style type="text/css">
body {
	background-image: url(002.jpg);
}
</style>

<?php
include "../include/koneksi.php";
session_start();

$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}

$id_user = $_GET['user_name'];
	
$sql = "select * from tbl_user where user_name='$id_user' ";
$qry = mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());	
while($data=mysql_fetch_array($qry))
{
$user_name=$data['user_name'];
$pass=$data['pass'];
$level=$data['level'];
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include "atas.php";?>

    
		<!--- box border -->
		<div id="lb">
		<div id="rb">
		<div id="bb"><div id="blc"><div id="brc">
		<div id="tb"><div id="tlc"><div id="trc">
		<!--  -->
				
		<div id="content">
    <td><div align="center" class="notd"></div></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>

         <td height="292">   
         <td colspan="6"><table width="785" border="0" align="center">
           <tr>
             <td><div align="center"><strong>EDIT USER </strong></div></td>
           </tr>
           <tr>
             <td><form action="updateuser.php" method="post" name="form1" id="form1">
               <table width="379" border="0" align="center">
                 <tr>
                   <td>User Name </td>
                   <td><div align="center">:</div></td>
                   <td><label>
                     <input name="user_name" type="hidden" id="user_name" value="<?php echo $user_name;?>" size="25" maxlength="25" />
					 <?php echo $user_name; ?>
                   </label></td>
                 </tr>
                 <tr>
                   <td>Password</td>
                   <td align="center"><div align="center">:</div></td>
                   <td><label>
                     <input name="pass" type="password" id="pass"  value="<?php echo $pass;?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Level</td>
                   <td align="center"><div align="center">:</div></td>
                   <td><label>
                     <select name="level" value="<?php echo $level;?>">
                       <option><?php echo $level;?></option>
                       <option>petugas</option>
                       <option>admin</option>
                     </select>
                   </label
          ></td>
                 </tr>
                 <tr>
                   <td height="21">&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td colspan="3" align="center"><input name="Submit" type="submit" id="Submit" value="Update" /></td>
                 </tr>
               </table>
               <div align="center"></div>
             </form></td>
           </tr>
         </table></td>
  </tr>
</table>
  
    </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
	<?php include "../css/footer.php"; ?>		
</div>
</body>
</html>