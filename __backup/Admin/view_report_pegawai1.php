<?php 
include "up1.php";
include "../include/koneksi.php";

$NIP = $_GET['NIP'];
$qry=mysql_query("select * from `tbl_pegawai` where `NIP`='$NIP'");
$data=mysql_fetch_array($qry);
$qry2=mysql_query("select * from `tbl_wali` where `NIP`='$NIP'");
$data2=mysql_fetch_array($qry2);

$NIP2 =$data['NIP'];
$nama_lengkap =$data['nama'];
$jeNIP_kelamin =$data['gender'];
$tempat_lahir =$data['tempat_lahir'];
$tanggal_lahir =$data['tgl_lahir'];
$id_agama =$data['kd_agama'];
$anak_ke =$data['anak_ke'];
$jumlah_saudara_kandung =$data['jumlah_saudara'];
$alamat =$data['alamat_s'];
$no_telp =$data['telepon_s'];
$tahun_masuk = $data['tahun_masuk'];
$sekolah_asal =$data['kd_sekolah'];
$id_pendidikan =$data['kd_pendidikan'];
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


$kls_s=mysql_query("select * from `tbl_pendidikan` where `kd_pendidikan`='$id_pendidikan'");
$hkls_s=mysql_fetch_array($kls_s);


$peker_w=mysql_query("select * from `tbl_pekerjaan` where `kd_pekerjaan`='$id_pekerjaan'");
$hpeker_w=mysql_fetch_array($peker_w);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

				
		<title>Data Lengkap Pegawai</title><div id="content">
          <td><div align="center">
              <table width="845" border="0" align="center">
                <tr>
                  <td></td>
                </tr>

                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="4"><div align="center" class="style3"><strong>View Data Pegawai </strong></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td width="52">&nbsp;</td>
                  <td colspan="4" bgcolor="#CCCCCC"><strong>A.IDENTITAS PEGAWAI </strong>
                      <label></label><div align="center"></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="165">NIP</td>
                  <td width="5"><div align="center"><strong>:</strong></div></td>
                  <td width="440"><?php echo $NIP;?></td>
                  <td rowspan="8"><div align="left"><img src="../foto_pegawai/<?php echo $gambar;?>" hspace="0" border="0" height="48%" width="56%" /></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Nama Pegawai</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><?php echo $nama_lengkap;?></label></td>
			    </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>JeNIP Kelamin</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><?php echo $jeNIP_kelamin;?></label></td>
			    </tr>
                <tr>
                  <td height="21">&nbsp;</td>
                  <td>Tempat Lahir</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><?php echo $tempat_lahir;?></label></td>
			    </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Tanggal Lahir</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><span class="style8"><?php echo $tanggal_lahir;?> <?php echo $bulan_lahir;?> <?php echo $tahun_lahir;?> </span></label></td>
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
                  <td>Tahun Masuk</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><?php echo $tahun_masuk;?> </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>Asal Sekolah</td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td><label><?php echo $hasal_sekolah['nama_sekolah'];?> </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="4" bgcolor="#CCCCCC">B. IDENTITAS ORANG TUA/WALI </td>
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
                  <td>pendidikan</td>
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
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><div align="right">
                    <table width="220" border="0">
                      <tr>
                        <td>Yogyakarta, </td>
                      </tr>
                    </table>
                    </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><table width="200" border="0" align="right">
                    <tr>
                      <td><div align="left">(..........................................)</div></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><table width="220" border="0" align="right">
                    <tr>
                      <td><div align="left">NIP :........................................</div></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              </form>
          </td>
          </tr>
		  </table>
        
		<script language="javascript">
		window.print();
		</script>
        
</div>
<?php include "down1.php" ?>
</body>
</html>