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
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");
}
$NIS = $_GET['NIS'];
$qry=mysql_query("select * from `tbl_siswa` where `no_induk`='$NIS'");
$data=mysql_fetch_array($qry);
$qry2=mysql_query("select * from `tbl_wali` where `no_induk`='$NIS'");
$data2=mysql_fetch_array($qry2);

$NIS2 =$data['no_induk'];
$nama_lengkap =$data['nama'];
$jenis_kelamin =$data['gender'];
$tempat_lahir =$data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($tgl_lahir ));
$id_agama =$data['kd_agama'];
$id_tahun_ajar=$data['kd_tahun_ajar'];
$anak_ke =$data['anak_ke'];
$jumlah_saudara_kandung =$data['jumlah_saudara'];
$alamat =$data['alamat_s'];
$no_telp =$data['telepon_s'];
$sekolah_asal =$data['kd_sekolah'];
$status_masuk = $data['status_masuk'];
$id_kelas =$data['kd_kelas'];
$gambar =$data['gambar'];


$nama_wali = $data2['nama_wali'];
$id_agama_w = $data2['kd_agama'];
$kewarganegaraan = $data2['kewarganegaraan'];
$id_pendidikan = $data2['tingkat_pendidikan'];
$id_pekerjaan = $data2['kd_pekerjaan'];
$alamat_w = $data2['alamat'];
$no_telp_w = $data2['telepon'];

$agm_s=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama'");
$hagm_s=mysql_fetch_array($agm_s);

$agm_w=mysql_query("select * from `tbl_agama` where `kd_agama`='$id_agama_w'");
$hagm_w=mysql_fetch_array($agm_w);

$sklh_asal=mysql_query("select * from `tbl_asal_sekolah` where `kd_sekolah`='$sekolah_asal'");
$hasal_sekolah=mysql_fetch_array($sklh_asal);


$kls_s=mysql_query("select * from `tbl_kelas` where `kd_kelas`='$id_kelas'");
$hkls_s=mysql_fetch_array($kls_s);

$ta=mysql_query("select * from `tbl_tahun_ajar` where `kd_tahun_ajar`='$id_tahun_ajar'");
$hta=mysql_fetch_array($ta);


$peker_w=mysql_query("select * from `tbl_pekerjaan` where `kd_pekerjaan`='$id_pekerjaan'");
$hpeker_w=mysql_fetch_array($peker_w);

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
    <td><div align="center"><table width="794" border="0" align="center">
  <tr>
  <td>  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4"><div align="center" class="style3"><strong>View Data Siswa </strong></div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><a href="view_report_siswa.php?NIS=<?php echo $NIS;?>"  target="_blank" "javascript:window.print()">Lembar Print</a></td>
          <td width="164">&nbsp;</td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td colspan="4" bgcolor="#CCCCCC"><strong>A.IDENTITAS SISWA </strong>
            <label></label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="212">NIS</td>
          <td width="5"><div align="center"><strong>:</strong></div></td>
          <td width="371"><?php echo $NIS;?></td>
          <td rowspan="8"><div align="left"><img src="../foto_siswa/<?php echo $gambar;?>" hspace="0" border="0" height="44%" width="63%" /></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Siswa</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $nama_lengkap;?></label></td>
		  </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Kelamin</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $jenis_kelamin;?></label></td>
		  </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tempat Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $tempat_lahir;?></label></td>
		  </tr>
        
        <tr>
          <td height="21">&nbsp;</td>
          <td>Tanggal Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><span class="style8"><?php echo $tanggal_lahir;?> </span></label></td>
		</tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kelas</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hkls_s['kelas'];?></td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td>&nbsp;</td>
          <td>Tahun Ajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hta['tahun_ajar'];?></td>
          <td>&nbsp;</td>
        </tr>
		
		<tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $hagm_s['agama'];?></label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $anak_ke;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara kandung </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $jumlah_saudara_kandung;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label></label>
            <label for="textarea"></label>
            <label for="textfield"></label>
            <?php echo $alamat;?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $no_telp;?></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Asal Sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label><?php echo $hasal_sekolah['nama_sekolah'];?></label></td>
          <td>&nbsp;</td>
        </tr>
        </tr>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Status Masuk</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $status_masuk;?></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4" bgcolor="#CCCCCC">B. IDENTITAS WALI </td>
		  </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Wali </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $nama_wali;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hagm_w['agama'];?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $kewarganegaraan;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $id_pendidikan;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $hpeker_w['pekerjaan'];?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $alamat_w;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No.Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><?php echo $no_telp_w;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><a href="viewsiswa.php">kembali </a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
</table>
        </form>    </td>
    </div>
		
		<!--- end of box border -->
		</div></div></div></div>
		</div></div></div></div>
		<!-- -->
			<?php include "../css/footer.php"; ?></body>
</html>