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
$queabsdetail = "SELECT * FROM tb_siswa order by NIS asc limit 0, 100";
$exequeabsdetail = mysql_query($queabsdetail);
while($res = mysql_fetch_array($exequeabsdetail)){


//mengambil data siswa dari database dimasukan ke array
$data['NIS'][] = $res['no_induk'];
$data['Nama'][] = $res['nama'];


}
//untuk primary key table data_siswa yaitu id_siswa
$jm = sizeof($data['NIS']);
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=file_siswa.xls");
header("Content-Transfer-Encoding: binary");
xlsBOF();
/*
posisi excel berdasarkan baris dan kolom
diaplikasi posisinya berdasarkan nomor array dimulai dari 0
sedangkan di excel dimulai dari 1
ini untuk judul di excel. posisinya di baris array 0, kolom array 3
berarti posisi di excel 0 berarti baris 1, dan 3 berarti kolom 4
*/
xlsWriteLabel(0,7,"DATA SISWA");
/*
untuk nama2 field dimulai dari baris array 2(baris 3 di excel)
untuk kolomnya dimulai dari array 0(baris 1 di excel)
*/
xlsWriteLabel(2,0,"No");
xlsWriteLabel(2,1,"NIS" );
xlsWriteLabel(2,2,"Nama" );


/*
untuk mulai baris data (row) dimulai pada array 3(baris 4 di excel)
*/
$xlsRow = 3;
//untuk menampilkan data dari database di file excel
for ($y=0; $y<$jm; $y++) {
++$i;
xlsWriteNumber($xlsRow,0,"$i");
xlsWriteLabel($xlsRow,1,$data['NIS'][$y]);
xlsWriteLabel($xlsRow,2,$data['Nama'][$y]);

$xlsRow++;
}
xlsEOF();
exit();
?>