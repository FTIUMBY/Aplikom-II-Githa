<?php

include "../include/koneksi.php";

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());


function spasi($s)
{
	$spasi=str_replace(" ","_", $s);
	return($spasi);
}

$NIP = $_POST['NIP'];
$NPSN = $_POST ['NPSN'];
$NIK = $_POST['NIK'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST ['nama_panggilan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$id_agama = $_POST['id_agama'];
$kewarganegaraan_pegawai = $_POST['kewarganegaraan_pegawai'];
$anak_ke = $_POST['anak_ke'];
$jumlah_saudara_kandung = $_POST['jumlah_saudara_kandung'];
$saudara_tiri = $_POST['saudara_tiri'];
$saudara_angkat = $_POST['saudara_angkat'];
$bahasa = $_POST['bahasa'];

$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tinggal_dengan = $_POST['tinggal_dengan'];
$jarak = $_POST['jarak'];
$transportasi = $_POST['transportasi'];

$gol_darah = $_POST ['gol_darah'];
$penyakit = $_POST['penyakit'];
$kelainan_jasmani = $_POST ['kelainan_jasmani'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];

$tahun_ajar = $_POST['id_tahun_ajar'];
$sql="select * from tbl_tahun_ajar where kd_tahun_ajar='$tahun_ajar' ";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  

 //$pendidikan = $_POST['kd_pendidikan'];
$sd_nama = $_POST ['nama_sekolah_SD'];
$sd_tahun_mulai = $_POST ['tahun_mulai_sd'];
$sd_tahun_akhir = $_POST ['tahun_akhir_sd'];

$smp_nama = $_POST ['nama_sekolah_SMP'];
$smp_tahun_mulai = $_POST ['tahun_mulai_smp'];
$smp_tahun_akhir = $_POST ['tahun_akhir_smp'];
  
  
  $sma_nama = $_POST ['nama_sekolah_SMA'];
$sma_tahun_mulai = $_POST ['tahun_mulai_sma'];
$sma_tahun_akhir = $_POST ['tahun_akhir_sma'];
$sma_jurusan = $_POST ['jurusan_SMA'];
  
  $sj_nama = $_POST ['nama_sekolah_sarjana'];
$sj_tahun_mulai = $_POST ['tahun_mulai_sarjana'];
$sj_tahun_akhir = $_POST ['tahun_akhir_sarjana'];
  
  $pc_nama = $_POST ['nama_sekolah_pascasarjana'];
$pc_tahun_mulai = $_POST ['tahun_mulai_pascasarjana'];
$pc_tahun_akhir = $_POST ['tahun_akhir_pascasarjana'];
  
    $dk_nama = $_POST ['nama_sekolah_doktora;'];
$dk_tahun_mulai = $_POST ['tahun_mulai_doktoral'];
$dk_tahun_akhir = $_POST ['tahun_akhir_doktoral'];

$nama_ibu = $_POST['nama_ibu'];
$agama_i = $_POST['agama_ibu'];
$kewarganegaraan_i = $_POST['kw_ibu'];
$pendidikan_i = $_POST['tp_ibu'];

//$pekerjaan_i = $_POST['id_pekerjaan_ibu'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_i = $_POST['alamat_ibu'];
$telp_i = $_POST['telp_ibu'];
$ttl_i = $_POST['ttl_i'];



$tahun_ajar = $_POST['id_tahun_ajar'];
$sql="select * from tbl_tahun_ajar where kd_tahun_ajar='$tahun_ajar' ";
  $qry= mysql_query($sql,$koneksi) or die ("Query Gagal ".mysql_error());
  
  while($data=mysql_fetch_array($qry))
  { 
	$tahun_masuk= $data['tahun_ajar'];
  }


//$status_masuk = $_POST['status_masuk'];



$path='../foto_pegawai/';
$filename=spasi($_FILES['gambar']['name']);
move_uploaded_file($_FILES['gambar']['tmp_name'], $path.$filename);

if(!$_POST['NIS'] | !$_POST['nama_lengkap'] )
{
	header("location:form_input_data.php?kosong=1");
}

else
{

$pegawai="insert into tbl_pegawai SET
	NIP='$NIP',
	NPSN = '$NPSN',
	NIK = '$NIK',
	nama='$nama_lengkap',
	panggilan = '$nama_panggilan',
	gender='$jenis_kelamin',
	tempat_lahir='$tempat_lahir',
	tgl_lahir='$tanggal_lahir',
	kd_agama='$id_agama',
	kewarganegaraan_pegawai = '$kewarganegaraan_pegawai',
	anak_ke='$anak_ke',
	jumlah_saudara='$jumlah_saudara_kandung',
	saudara_tiri = '$saudara_tiri',
	saudara_angkat = '$saudara_angkat',
	bahasa = '$bahasa',

	alamat_s='$alamat',
	telepon_s='$no_telp',
	tinggal_dengan = '$tinggal_dengan',
	jarak = '$jarak',
	transportasi = '$transportasi',
	
	gol_darah = '$gol_darah',
	penyakit = '$penyakit',
	kelainan_jasmani = '$kelainan_jasmani',
	tinggi = '$tinggi',
	berat = '$berat',
	
	asal_sekolah = '$asal_sekolah',
	
	kd_pendidikan='$id_pendidikan',
	sd_nama = 'nama_sekolah_SD',
	sd_tahun_mulai = 'tahun_mulai_SD',
	sd_tahun_akhir = 'tahun_akhir_SD',

	smp_nama = 'nama_sekolah_SMP',
	smp_tahun_mulai = 'tahun_mulai_SMP',
	smp_tahun_akhir = 'tahun_akhir_SMP',
  
  
	sma_nama = 'nama_sekolah_SMA',
	sma_tahun_mulai = 'tahun_mulai_SMA',
	sma_tahun_akhir = 'tahun_akhir_SMA',
  
	sj_nama = 'nama_sekolah_SARJANA',
	sj_tahun_mulai = 'tahun_mulai_SARJANA',
	sj_tahun_akhir = 'tahun_akhir_SARJANA',
  
	pc_nama = 'nama_sekolah_PASCASARJANA',
	pc_tahun_mulai = 'tahun_mulai_PASCASARJANA',
	pc_tahun_akhir = 'tahun_akhir_PASCASARJANA',
  
    dk_nama = 'nama_sekolah_DOKTORAL',
	dk_tahun_mulai = 'tahun_mulai_DOKTORAL',
	dk_tahun_akhir = 'tahun_akhir_DOKTORAL'
	
	
	kd_tahun_ajar='$tahun_ajar',
	tahun_masuk='$tahun_masuk',
	
	gambar='$filename'";
	
mysql_query($pegawai,$koneksi) or die ("Gagal Query simpan Data pegawai" .mysql_error());


$ibu="insert into tbl_ibu SET 
	NIP='$NIP', 
	nama_ibu = '$nama_ibu', 
	kd_agama_i ='$agama_i', 
	kewarganegaraan_i = '$kewarganegaraan_i', 
	tingkat_pendidikan_i = '$pendidikan_i', 
	pekerjaan_i = '$pekerjaan_i',
	
mysql_query($pegawai,$koneksi) or die ("Gagal Query simpan Data Ibu : \n".$pegawai."\n".mysql_error());


$nonformal="insert into tbl_nonformal"
	NIP='$NIP', 
	nama_lembaga = '$nama_lembaga', 
	jurusan_nf ='$jurusan_nf',
	
	
mysql_query($nonformal,$koneksi) or die ("Gagal Query simpan Data pegawai" .mysql_error());

echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=http://localhost/bukuinduk/admin/view_pegawai.php?NIS=$_POST[NIS]\">");
}
?>