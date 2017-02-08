<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
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
          <td><div align="center">TAMBAH PETUGAS </div></td>
          </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>

         <td height="292"><form name="form1" method="post" action="simpan_user.php"ENCTYPE="MULTIPART/FORM-DATA">
      <table width="352" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="89">&nbsp;</td>
          <td width="11">&nbsp;</td>
          <td width="252">&nbsp;</td>
        </tr>
        <tr>
          <td height="32" class="hitam">Nama User </td>
          <td class="black"><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="user_name" type="text" id="user_name" size="25" maxlength="25">
          </label></td>
        </tr>
        <tr>
          <td height="31" class="hitam">Password</td>
          <td class="black"><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input name="pass" type="password" id="password" size="25" maxlength="50">
          </label></td>
        </tr>
        <tr>
          <td height="31" class="hitam">Level</td>
          <td class="black"><div align="center"><strong>:</strong></div></td>
          <td><select name="level">
            <option>petugas</option>
            <option>admin</option>
          </select></td>
        </tr>
        <tr>
          <td height="36" colspan="3" align="center"><label>
            <input type="submit" name="btsimpan" value="Simpan">
          </label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>    </td>
        </form>    </td>
    </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			<?php include "../css/footer.php"; ?>
</div>
</body>
</html>