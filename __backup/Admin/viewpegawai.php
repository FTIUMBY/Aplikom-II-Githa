<?php
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?> 

<?php include "up1.php";?>
          	
            
    	<td colspan="2" bgcolor="#EEEEEE"><div align="center"></div></td>
  </tr>
  
  <tr>
  <td width="265"><div align="right"></div></td>
    <td width="169" bgcolor="#FFFFFF">
      <label>
   <div align="right"><a href="formdaftar.php">Tambah pegawai</a><span class="style1"></a></div>
      </label></td>
    </tr>
	<tr>
    <td bgcolor="#FFFFFF">
      <label></label></td>
    <td colspan="2">&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="2">
	
      <table width="721" border="1" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
        <tr>
          <td bgcolor="#CCCCCC"><div align="center">No</div></td>
          <td bgcolor="#CCCCCC"><div align="center">NIP </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Nama Lengkap Pegawai </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Nama Panggilan Pegawai </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Alamat </div></td>
          <td bgcolor="#CCCCCC"><div align="center">Gender</div></td>
          <td colspan="4" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
          </tr>
		<?php
  			$sql = "SELECT * from tbl_pegawai left join tbl_wali
					on tbl_pegawai.NIP=tbl_wali.NIP
				left join tbl_pegawai
					on tbl_pegawai.kd_pendidikan=tbl_pendidikan.kd_pendidikan";

  $sql="select * from tbl_pegawai order by NIP ASC";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  $no=1;
  $i=0;
  while($data=mysql_fetch_array($qry))
  {
  

$NIS = $data['NIP'];
$nama_lengkap = $data['nama'];
$nama_panggilan= $data['panggilan'];
$nama_pendidikan = $data['kd_pendidikan'];
$alamat=$data['alamat'];
$gender=$data['gender'];


		?>
        <tr>
          <td width="28"> <div align="center"> <?php $i++;echo $i;?></div></td>
          <td width="98"><div align="center"><?php echo $NIS; ?></div></td>
          <td width="111"><div align="justify"><?php echo $nama_lengkap;?></div><div align="justify"></div></td>
          <td width="111"><div align="justify"><?php echo $nama_panggilan;?></div><div align="justify"></div></td>
          <td width="187"><div align="left"><?php echo $alamat;?></div><div align="justify"></div></td>
          <td width="45"><div align="center"><?php echo $gender;?></div></td>
		  <td width="130"><div align="center"><?php echo $nama_pendidikan;?></div></td>
          <td width="45"><div align="center"><a href="editdaftar.php?NIS=<?php echo $NIS;?>">Edit</a></div></td>
          <td width="45"><div align="center"><a href="view_pegawai.php?NIS=<?php echo $NIS;?>">View</a></div></td>
          <td width="50"><div align="center"><a onclick="return confirm ('Apakah Anda Akan Mnghapus pegawai dengan nama <?php echo $nama_lengkap ?> ?')" href="deletedaftar.php?NIS=<?php echo $NIS;?>">Hapus</a></div></td>
		  
        </tr>
        
        
		<?php } ?>
      </table>
             </td>
    <div style="margin-top:20px">

		
		</div></form>            
 
 <?php include "down1.php";?>