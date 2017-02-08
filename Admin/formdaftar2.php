<?php include "up1.php";?>
<?php include "../include/koneksi.php"; ?>

		<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function() {
			$('#form1').validate({
				rules: {
					NIS : {
						digits: true,
						minlength:3,
						maxlength:6
					},
					tgl: {
						indonesianDate:true
					},
					hp_pegawai : {
						digits: true,
						minlength:12,
						maxlength:12
					},
					hp_wali : {
						digits: true,
						minlength:12,
						maxlength:12
					},
				},
				messages: {
					NIS: {
						required: "Kolom no induk harus diisi",
						minlength: "Kolom nis harus terdiri dari 3 digit",
						maxlength: "Kolom nis harus terdiri dari 6 digit"
					},
					email: {
						required: "Alamat email harus diisi",
						email: "Format email tidak valid"
					},
					nama: {
						required: "nama belum di isi"
						
					},
					tempat_lahir: {
						required: "Tempat Lahir belum di isi"
						
					},
					
					
				}
			});
		});
		
		$.validator.addMethod(
			"indonesianDate",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
			},
			"Please enter a date in the format DD/MM/YYYY"
		);
		</script>

	
  <table width="794" border="0" align="center">
  <tr>
  <td>  
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="simpandaftar.php" enctype="multipart/form-data" >
      <table width="1080" border="0">
        <tr>
          <td width="1">&nbsp;</td>
          <td colspan="3"><strong></strong></td>
          <td width="16">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4"><?php
		if(isset($_GET['kosong']))
		{
			if($_GET['kosong']==1)
				echo "<font color='#FF0000'>Data Pada Bagian pegawai belum lengkap. Silahkan dilengkapi.
			</font>";

		}
		?></td>
        </tr>
<!--- start ------------------------------------------------------------------>

        <tr>
          <td colspan="4">NIP</td>
          <td width="16"><div align="center"><strong>:</strong></div></td>
          <td width="489"><input name="NIS" type="text" id="NIS" size="15" class="required" /></td>
          <td><input name="gambar" type="file" id="fieldField" value="Cari Foto" /></td>
        </tr>
        <tr>
          <td colspan="4">NPSN</td>
          <td width="16"><div align="center"><strong>:</strong></div></td>
          <td width="489"><input name="NISN" type="text" id="NISN" size="15" class="required" /></td>
          <td width="1" rowspan="11">&nbsp;</td>
        </tr>
 	    <tr>
          <td colspan="4">NIK</td>
          <td width="16"><div align="center"><strong>:</strong></div></td>
          <td width="489"><input name="NIK" type="text" id="NIK" size="15" class="required" /></td>
        </tr>
<!--- a. keterangan pegawai ---------------------------->
        <tr>
          <td colspan="6">&nbsp;</td>
          <td width="1">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="6"><strong>A.KETERANGAN PRIBADI </strong>
          <label></label></td>
          <td>&nbsp;</td>
   		</tr>
        <tr>
          <td>&nbsp;</td>
          <td width="22">1.</td>
          <td colspan="2">Nama Pegawai</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="13">a.</td>
          <td width="212">Nama Lengkap </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <label>
          <input name="nama_lengkap" type="text" id="nama" class="required"/>
          </label>
          </td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Nama Panggilan </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td> 
          <label>
          <input name="nama_panggilan" type="text" id="nama" class="required"/>
          </label>
          </td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>2.</td>
          <td colspan="2">Jenis Kelamin</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <input name="jenis_kelamin" type="radio" value="L" id="radiobutton" />
            L
          <input name="jenis_kelamin" type="radio" value="P" id="radiobutton"/>
            P 
          </td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>3.</td>
          <td colspan="2">Tempat Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <label>
          <input type="text" name="tempat_lahir" id="tempat_lahir" class="required"/>
          </label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>4.</td>
          <td height="21" colspan="2">Tanggal Lahir</td>
          <td>
		  <div align="center"><strong>:</strong></div>
		  </td>
          <td>
		  <input id="element_1_1" name="element_1_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_1">MM</label>
		</span>
		<span>
			<input id="element_1_2" name="element_1_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_2">DD</label>
		</span>
		<span>
	 		<input id="element_1_3" name="element_1_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_1_3">YYYY</label>
		</span>
	
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_1_3",
			baseField    : "element_1",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="2119" />		
		
        <tr>
          <td height="21">&nbsp;</td>
          <td>5.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <select name="id_agama" id="id_agama">
              <option value="Notid_agama" selected="selected"> [---Agama---]</option>
              <?php
		  $sql="select kd_agama,agama from tbl_agama order by agama";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_agama]==$id_agama){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_agama]' $cek> $data[agama]</option>";
		  }
		  ?>
            </select>
          </label></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>6.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="10" name="kewarganegaraan_pegawai" id="kewarganegaraan_pegawai" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>7.</td>
           <td colspan="2">Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="anak_ke" id="anak_ke"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>8.</td>
          <td colspan="2">Jumlah saudara kandung </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="jumlah_saudara_kandung" id="jlm_sdr" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>9.</td>
           <td colspan="2">Jumlah saudara tiri </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="saudara_tiri" id="saudara_tiri"/>
          </label></td>
          <td>&nbsp;</td>
        </tr> 
	  <tr>
          <td>&nbsp;</td>
          <td>10.</td>
          <td colspan="2">Jumlah saudara angkat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="saudara_angkat" id="saudara_angkat" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>12.</td>
          <td colspan="2">Kemampuan Bahasa Lain</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="bahasa" id="bahasa" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
<!--- b. keterangan tempat ---------------------------->
        <tr>
          <td colspan="7">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>B. Keterangan Tempat Tinggal </strong>
          <label></label></td>
        </tr>
              
        <tr>
          <td>&nbsp;</td>
          <td>13.</td>
          <td colspan="2">Alamat Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label></label>
              <label for="textarea"></label>
              <label for="textfield"></label>
              <textarea name="alamat"></textarea></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>14.</td>
          <td colspan="2">No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="no_telp" id="hp_pegawai" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>15.</td>
          <td colspan="2">Tinggal dengan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tinggal_dengan" id="tinggal_dengan" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>17.</td>
          <td colspan="2">Jarak dari sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="jarak" id="jarak" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
           <td>&nbsp;</td>
           <td>18.</td>
          <td colspan="2">Transportasi ke sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="transportasi" id="transportasi" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
 
 <!--- --------------------------------------------------------------------------------------->
 <!--- c. ketarangan kesehatan---------------------------->
        <tr>
          <td colspan="7">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>C. KETERANGAN KESEHATAN</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>19.</td>
          <td colspan="2">Golongan Darah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <input name="gol_darah" type="radio" value="A" id="radiobutton" />A
          <input name="gol_darah" type="radio" value="B" id="radiobutton"/>B
          <input name="gol_darah" type="radio" value="AB" id="radiobutton"/>AB
          <input name="gol_darah" type="radio" value="O" id="radiobutton"/>O
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>20.</td>
          <td colspan="2">Penyakit yang pernah diderita</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="penyakit" id="penyakit" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>21.</td>
          <td colspan="2">Kelainan Jasmani</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="kelainan_jasmani" id="kelainan_jasmani" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>22.</td>
          <td colspan="2">Tinggi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tinggi" id="tinggi" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>23.</td>
          <td colspan="2">Berat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="berat" id="berat" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
 <!--- --------------------------------------------------------------------------------------->
 <!--- d. keterangan pendidikan---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>D. KETERANGAN PENDIDIKAN</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><strong>24.</strong></td>
		  <td><strong>A</strong></td>
          <td colspan="2"><strong>Pendidikan SD</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="nama_sekolah_SD" id="nama_sd" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sd_tahun_mulai" id="sd_tahun_mulai" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sd_tahun_akhir" id="sd_tahun_akhir" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
       
         <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <td><strong>B.</strong></td>
          <td colspan="2"><strong>Pendidikan SMP</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="nama_sekolah_SMP" id="smp_nama" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tahun_mulai_SMP" id="smp_tahun_mulai" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tahun_akhir_SMP" id="smp_tahun_akhi" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
		   <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <td><strong>C.</strong></td>
          <td colspan="2"><strong>Pendidikan SMA</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sttb" id="sttb" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="skhu" id="skhu" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>d.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="lama_belajar" id="lama_belajar" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
		   <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <td><strong>D.</strong></td>
          <td colspan="2"><strong>Pendidikan SARJANA</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sttb" id="sttb" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="skhu" id="skhu" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>d.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="lama_belajar" id="lama_belajar" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
		 <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <td><strong>E.</strong></td>
          <td colspan="2"><strong>Pendidikan PASCA SARJANA</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sttb" id="sttb" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="skhu" id="skhu" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>d.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="lama_belajar" id="lama_belajar" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <td><strong>F.</strong></td>
          <td colspan="2"><strong>Pendidikan DOKTORAL</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Tahun mulai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sttb" id="sttb" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>c.</td>
          <td>Tahun akhir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="skhu" id="skhu" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>d.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="lama_belajar" id="lama_belajar" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>

<!--- e. keterangan ibu---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>F. KETERANGAN IBU KANDUNG</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>25.</td>
          <td colspan="2">Nama Ibu</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="nama_ibu" id="nama_ibu" class="required"/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>26.</td>
          <td colspan="2">Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="agama_ibu" id="agama_ibu">
              <option value="Notid_agama_a" selected="selected"> [---Agama---]</option>
              <?php
		  $sql="select kd_agama,agama from tbl_agama order by agama";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_agama]==$id_agama){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_agama]' $cek> $data[agama]</option>";
		  }
		  ?>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>27.</td>
          <td colspan="2">Tempat Tanggal Lahir </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="ttl_i" id="ttl_i" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>28.</td>
          <td colspan="2">Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="kw_ibu" type="radio" value="WNI" id="radiobutton" />
            WNI
            <input name="kw_ibu" type="radio" value="WNA" id="radiobutton"/>
            WNA</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>29.</td>
          <td colspan="2">Pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="tp_ibu" type="radio" value="SD" id="radiobutton" />
            SD
            <input name="tp_ibu" type="radio" value="SMP" id="radiobutton"/>
            SMP
			<input name="tp_ibu" type="radio" value="SMA" id="radiobutton"/>
            SMA
			<input name="tp_ibu" type="radio" value="Sarjana" id="radiobutton"/>
            Sarjana</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>30.</td>
          <td colspan="2">Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="pekerjaan_i" id="pekerjaan_i" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>

<!--- i.  KETERANGAN PENDIDIKAN NON FORMAL---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>I. KETERANGAN PENDIDIKAN NON FORMAL</strong>
          <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
		  <td>40.</td>
		  <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama Lembaga</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="beapegawai" id="beapegawai" class="required"/></td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tamat_belajar" id="tamat_belajar" class="required"/></td>
        </tr>
		    <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama Lembaga</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="beapegawai" id="beapegawai" class="required"/></td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tamat_belajar" id="tamat_belajar" class="required"/></td>
        </tr>
		    <tr>
          <td>&nbsp;</td>
		  <td></td>
		  <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>a.</td>
          <td>Nama Lembaga</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="beapegawai" id="beapegawai" class="required"/></td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>b.</td>
          <td>Jurusan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tamat_belajar" id="tamat_belajar" class="required"/></td>
        </tr>
        
<!--- J. keterangan SELESAI---------------------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="7"><strong>J. KETERANGAN MENGUNDURKAN DIRI</strong>
            <label></label></td>
        </tr><tr>
          <td>&nbsp;</td>
          <td>41.</td>
          <td height="21" colspan="2">Tanggal</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="date" id="to" name="tgl_lahir" size="9" 
         <tr>
          <td>&nbsp;</td>
          <td>42.</td>
          <td colspan="2">Alamat Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label></label>
              <label for="textarea"></label>
              <label for="textfield"></label>
              <textarea name="alamat"></textarea></td>
          <td>&nbsp;</td>
		  <tr>
          <td>&nbsp;</td>
		  <td>43.</td>
          <td colspan="2">Tahun Mengajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_tahun_ajar" id="id_tahun_ajar">
              <option value="tahun_ajar" selected="selected"> [---pilih---]</option>
              <?php
		  $sql="select kd_tahun_ajar,tahun_ajar from tbl_tahun_ajar order by tahun_ajar";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_tahun_ajar]==$id_tahun_ajar){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_tahun_ajar]' $cek> $data[tahun_ajar]</option>";
		  }
		  ?>
            </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>          
          <td>          
        </tr>
        <tr>
          <td>          
          <td>          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <!--- C-I ---------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <!------------------- C-I ---------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <!--- C-I ---------------->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        
        
        <!--- End Button ---------------->
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Simpan" />
            <input type="submit" value="Batal" onclick="viewpegawai.php" />
          </label></td>
        
      </table>
    </form> 
	
	   </td>
  </tr>
</table>
        </form>    </td>
            
<?php include "down1.php";?>