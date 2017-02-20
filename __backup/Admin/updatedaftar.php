<?php

	include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
if ($koneksi) {
mysql_select_db($db,$koneksi) or die (mysql_error());

//$gambar = "../foto_pegawai/1.png"; //admbil dari kolom gambar di table pegawai
if(isset($_POST['gambar'])){
	$sql = "SELECT gambar FROM tbl_pegawai WHERE no_induk = ".$_POST['NIS'];
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	if(count($row) > 0){
		if($row['gambar'] != ""){
			unlink("../foto_pegawai/".$row['gambar']);
		}
	}
	$gambar =$_POST['gambar'];
}

//A.keteranga pribadi
$NISN =$_POST['NISN'];
$NIS =$_POST['NIS'];
$NIK = $_POST['NIK'];
$KPS = $_POST['KPS'];
$nama_lengkap =$_POST['nama_lengkap'];
$nama_panggilan =$_POST['nama_panggilan'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$tempat_lahir =$_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($tgl_lahir ));
$id_agama =$_POST['id_agama'];
$kewarganegaraan_s = $_POST['kewarganegaraan_s'];
$anak_ke =$_POST['anak_ke'];
$jumlah_saudara_kandung =$_POST['jumlah_saudara_kandung'];
$saudara_tiri =$_POST['saudara_tiri'];
$saudara_angkat =$_POST['saudara_angkat'];
$yatim_piatu = $_POST['yatim_piatu'];
$bahasa = $_POST['bahasa'];


//$NIS = $_POST['NIS'];
//$nama_lengkap = $_POST['nama_lengkap'];
//$nama_panggilan = $_POST['nama_panggilan'];
//$jenis_kelamin = $_POST['jenis_kelamin'];
//$tempat_lahir = $_POST['tempat_lahir'];
//$tanggal_lahir = $_POST['tgl_lahir'];
//$id_agama = $_POST['id_agama'];
//$anak_ke = $_POST['anak_ke'];
//$jumlah_saudara_kandung = $_POST['jumlah_saudara_kandung'];

// B. Keterangan tempat
$alamat_s =$_POST['alamat_s'];
$no_telp_s =$_POST['no_telp_s'];
$tinggal_dengan = $_POST['tinggal_dengan'];
$jarak = $_POST['jarak'];
$transportasi = $_POST['transportasi'];

//$alamat = $_POST['alamat'];
//$no_telp = $_POST['no_telp'];

//C. Keterangan kesehatan
$gol_darah = $_POST['gol_darah'];
$penyakit = $_POST['penyakit'];
$kelainan_jasmani = $_POST['kelainan_jasmani'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];

//D. Keterang pendidikan
//$id_sekolah = $_POST['id_sekolah'];
$sttb = $_POST ['sttb'];
$skhu = $_POST['skhu'];
$lama_belajar = $_POST['lama_belajar'];
$pindahan = $_POST['pindahan'];
$alasan = $_POST ['alasan'];
$id_kelas = $_POST['id_kelas'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$status_masuk = $_POST['status_masuk'];
$asal_sekolah = $_POST['asal_sekolah'];


//$id_sekolah = $_POST['id_sekolah'];
//$id_kelas = $_POST['id_kelas'];

// E. Keterangan ayah
$nama_ayah = $_POST['nama_ayah'];
$id_agama_a = $_POST['agama_a'];
$kewarganegaraan_a = $_POST['kewarganegaraan_a'];
$id_pendidikan_a = $_POST['tingkat_pendidikan_a'];
//$id_pekerjaan_a = $_POST['id_pekerjaan_a'];
$alamat_a = $_POST['alamat_a'];
$no_telp_a = $_POST['no_telp_a'];
$ttl_a = $_POST['ttl_a'];
$penghasilan_a = $_POST['penghasilan_a'];
$masih_hidup_a = $_POST['masih_hidup_a'];
$pekerjaan_a = $_POST['pekerjaan_a'];

// F. Keterangan ibu
$nama_ibu = $_POST['nama_ibu'];
$id_agama_i = $_POST['id_agama_i'];
$kewarganegaraan_i = $_POST['kewarganegaraan_i'];
$id_pendidikan_i = $_POST['tingkat_pendidikan_i'];
//$id_pekerjaan_i = $_POST['id_pekerjaan_i'];
$alamat_i = $_POST['alamat_i'];
$no_telp_i = $_POST['no_telp_i'];
$ttl_i = $_POST['ttl_i'];
$penghasilan_i = $_POST['penghasilan_i'];
$masih_hidup_i = $_POST['masih_hidup_i'];
$pekerjaan_i = $_POST['pekerjaan_i'];

//G. keterang wali
$nama_wali = $_POST['nama_wali'];
$agama_wali = $_POST['agama_wali'];
//$kewarganegaraan_w = $_POST['kewarganegaraan_w'];
$kewarganegaraan_w = $_POST['kewarganegaraan_w'];
$pendidikan_w = $_POST['tingkat_pendidikan_w'];
//$pekerjaan_w = $_POST['id_pekerjaan'];
$alamat_wali = $_POST['alamat_wali'];
$no_telp_wali = $_POST['no_telp_wali'];
$ttl_w = $_POST ['ttl_w'];
$penghasilan_w = $_POST['penghasilan_w'];
$pekerjaan_w = $_POST['pekerjaan_w'];

//H. Keterangan hobi
$kesenian = $_POST ['kesenian'];
$olahraga = $_POST ['olahraga'];
$organisasi = $_POST ['organisasi'];
$hobi_lain = $_POST ['hobi_lain'];

//I. keterangan perkembangan
$beapegawai = $_POST ['beapegawai'];
$prestasi = $_POST ['prestasi'];
$tanggal_do = $_POST ['tanggal_do'];
$alsan_do = $_POST ['alasan_do'];
$tamat_belajar = $_POST ['tamat_belajar'];
$sttb_lulus = $_POST ['sttb_lulus'];
$skhu_lulus = $_POST ['skhu_lulus'];

//J. Keterangan selesai pendidikan
$lanjut = $_POST ['lanjut'];
$tanggal_bekerja = $_POST ['tanggal_bekerja'];
$nama_perusahaan = $_POST ['nama_perusahaan'];
$penghasilan_pegawai = $_POST ['penghasilan_pegawai'];

//$tahun_masuk = $_POST['tahun_masuk'];


function spasi($s)
{
	$spasi=str_replace(" ","_", $s);
	return($spasi);
}
if(isset($_POST['gambar'])){
	$path='../foto_pegawai/';
	$filename=spasi($_FILES['gambar']['name']);
	move_uploaded_file($_FILES['gambar']['tmp_name'], $path.$filename);
}
//a. ket.pribadi
$pegawai="update tbl_pegawai SET
	NIK = '$NIK',
	KPS = '$KPS',
	nama='$nama_lengkap',
	panggilan='$nama_panggilan',
	gender='$jenis_kelamin',
	tempat_lahir='$tempat_lahir',
	tgl_lahir='$tanggal_lahir',
	kd_agama='$id_agama',
	kewarganegaraan_pegawai='kewarganegaraan_s',
	anak_ke='$anak_ke',
	jumlah_saudara='$jumlah_saudara_kandung',
	saudara_tiri='$saudara_tiri',
	saudara_angkat='$saudara_angkat',
	yatim_piatu='$yatim_piatu',
	bahasa='$bahasa',
	alamat_s='$alamat_s',
	telepon_s='$no_telp_s',
	tinggal_dengan='$tinggal_dengan',
	jarak='$jarak',
	transportasi='$transportasi',
	gol_darah='$gol_darah',
	penyakit='$penyakit',
	kelainan_jasmani='$kelainan_jasmani',
	tinggi='$tinggi',
	berat='$berat',
	
	sttb='$sttb',
	skhu='$skhu',
	lama_belajar='$lama_belajar',
	pindahan='$pindahan',
	alasan='$alasan',
	kd_kelas='$id_kelas',
	tanggal_masuk='$tanggal_masuk',
	asal_sekolah = '$asal_sekolah',
    
	kesenian='$kesenian',
	olahraga='$olahraga',
	organisasi='$organisasi',
	hobi_lain='$hobi_lain',
	beapegawai='$beapegawai',
	prestasi='$prestasi',
	tanggal_do='$tanggal_do',
	alasan_do='$tanggal_do',
	tamat_belajar='$tamat_belajar',
	sttb_lulus='$sttb_lulus',
	skhu_lulus='$skhu_lulus',";
	
if(isset($_POST["gambar"]))
	$pegawai.="gambar='$gambar', gambar = '$filename', ";
	
$pegawai.="lanjut='$lanjut',
	tanggal_bekerja='$tanggal_bekerja',
	nama_perusahaan='$nama_perusahaan',
	penghasilan_pegawai='$penghasilan_pegawai',
		  	
	status_masuk='$status_masuk'
	where no_induk = '$NIS'";

//e. ket ayah
$ayah="update tbl_ayah SET
	nama_ayah='$nama_ayah',
	kd_agama_a ='$id_agama_a',
	kewarganegaraan_a ='$kewarganegaraan_a',
	tingkat_pendidikan_a ='$id_pendidikan_a',

	alamat_a ='$alamat_a',
	telepon_a ='$no_telp_a',
	ttl_a = '$ttl_a',
	penghasilan_a = '$penghasilan_a',
	masih_hidup_a = '$masih_hidup_a',
	pekerjaan_a = '$pekerjaan_a'
	where no_induk='$NIS'";
	
//f. ket ibu
$ibu="update tbl_ibu SET
	nama_ibu ='$nama_ibu',
	kd_agama_i ='$id_agama_i',
	kewarganegaraan_i ='$kewarganegaraan_i',
	tingkat_pendidikan_i ='$id_pendidikan_i',

	alamat_i ='$alamat_i',
	telepon_i ='$no_telp_i',
	ttl_i = '$ttl_i',
	penghasilan_i = '$penghasilan_i',
	masih_hidup_i = '$masih_hidup_i',
	pekerjaan_i = '$pekerjaan_i'
	where no_induk ='$NIS'";

//g. ket wali
$wali="update tbl_wali SET
	nama_wali='$nama_wali',
	kd_agama_w ='$agama_wali',
	kewarganegaraan_w ='$kewarganegaraan_w',
	tingkat_pendidikan_w ='$pendidikan_w',
	
	alamat_w ='$alamat_wali',
	telepon_w ='$no_telp_wali',
	ttl_w = '$ttl_w',
	penghasilan_w = '$penghasilan_w',
	pekerjaan_w = '$pekerjaan_w'
	where no_induk = '$NIS'";
	

mysql_query($pegawai,$koneksi) or die ("Gagal Query Update pegawai Ya" .mysql_error());
mysql_query($ayah,$koneksi) or die ("Gagal Query Update wali" .mysql_error());
mysql_query($ibu,$koneksi) or die ("Gagal Query Update wali" .mysql_error());
mysql_query($wali,$koneksi) or die ("Gagal Query Update wali" .mysql_error());
include_once "viewpegawai.php";

}

?>