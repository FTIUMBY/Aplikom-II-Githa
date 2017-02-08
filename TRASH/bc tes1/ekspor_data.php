<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>
<?php 
include "excel.php";
//query database untuk menampilkan data siswa

  $sql ="select * from tbl_siswa, tbl_wali, tbl_kelas,tbl_agama, tbl_pekerjaan,tbl_asal_sekolah where tbl_siswa.no_induk=tbl_wali.no_induk and tbl_siswa.kd_agama=tbl_agama.kd_agama and tbl_asal_sekolah.kd_sekolah=tbl_siswa.kd_sekolah and tbl_wali.kd_pekerjaan=tbl_pekerjaan.kd_pekerjaan and tbl_siswa.kd_kelas=tbl_kelas.kd_kelas order by kelas"; 
  
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  $no=1;
  while($res=mysql_fetch_array($qry))
  {
  
  
//mengambil data siswa dari database dimasukan ke array
$data['NIS'][] = $res['no_induk'];
$data['nama_lengkap'][] = $res['nama'];
$data['jenis_kelamin'][] = $res['gender'];
$data['tl'][] = $res['tempat_lahir'];
$data['tgl'][]= $res['tgl_lahir'];
$data['agama_s'][] = $res['agama'];
$data['lulusan_dari'][] = $res['nama_sekolah'];
$data['kelas_s'][] = $res['kelas'];
$data['wali'][] = $res['nama_wali'];
$data['no_telp_w'][] = $res['telepon'];
$data['pekerjaan_w'][] = $res['pekerjaan'];
$data['alamat_w'][] = $res['alamat'];


}
//untuk primary key table data_siswa yaitu id_siswa
$jm = sizeof($data['NIS']);
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=data_siswa.xls");
header("Content-Transfer-Encoding: binary");
xlsBOF();
/*
posisi excel berdasarkan baris dan kolom
diaplikasi posisinya berdasarkan nomor array dimulai dari 0
sedangkan di excel dimulai dari 1
ini untuk judul di excel. posisinya di baris array 0, kolom array 3
berarti posisi di excel 0 berarti baris 1, dan 3 berarti kolom 4
*/
xlsWriteLabel(0,7,"DATA SISWA SMK KUNCUP SAMIGALUH");
/*
untuk nama2 field dimulai dari baris array 2(baris 3 di excel)
untuk kolomnya dimulai dari array 0(baris 1 di excel)
*/
xlsWriteLabel(2,0,"No");
xlsWriteLabel(2,1,"NIS" );
xlsWriteLabel(2,2,"Nama Siswa" );
xlsWriteLabel(2,3,"Tempat Lahir" );
xlsWriteLabel(2,4,"Tanggal Lahir" );
xlsWriteLabel(2,5,"L/P" );
xlsWriteLabel(2,6,"Agama" );
xlsWriteLabel(2,7,"Kelas" );
xlsWriteLabel(2,8,"Asal SMP" );
xlsWriteLabel(2,9,"Nama Wali" );
xlsWriteLabel(2,10,"Pekerjaan Wali" );
xlsWriteLabel(2,11,"No. Telp Wali" );
xlsWriteLabel(2,12,"Alamat Wali" );


/*
untuk mulai baris data (row) dimulai pada array 3(baris 4 di excel)
*/
$xlsRow = 3;
//untuk menampilkan data dari database di file excel
for ($y=0; $y<$jm; $y++) {
++$i;
xlsWriteNumber($xlsRow,0,"$i");
xlsWriteLabel($xlsRow,1,$data['NIS'][$y]);
xlsWriteLabel($xlsRow,2,$data['nama_lengkap'][$y]);
xlsWriteLabel($xlsRow,3,$data['tl'][$y]);
xlsWriteLabel($xlsRow,4,$data['tgl'][$y]);
xlsWriteLabel($xlsRow,5,$data['jenis_kelamin'][$y]);
xlsWriteLabel($xlsRow,6,$data['agama_s'][$y]);
xlsWriteLabel($xlsRow,7,$data['kelas_s'][$y]);
xlsWriteLabel($xlsRow,8,$data['lulusan_dari'][$y]);
xlsWriteLabel($xlsRow,9,$data['wali'][$y]);
xlsWriteLabel($xlsRow,10,$data['pekerjaan_w'][$y]);
xlsWriteLabel($xlsRow,11,$data['no_telp_w'][$y]);
xlsWriteLabel($xlsRow,12,$data['alamat_w'][$y]);

$xlsRow++;
}
xlsEOF();
exit();
?>