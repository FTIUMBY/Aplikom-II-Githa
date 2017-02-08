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
      <table width="789" border="0">
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><strong></strong></td>
          <td width="158">&nbsp;</td>
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
          <td>&nbsp;</td>
          <td width="145">NIS</td>
          <td width="10"><div align="center"><strong>:</strong></div></td>
          <td width="377"><input name="NIS" type="text" id="NIS" size="15" class="required" /></td>
          <td><input name="gambar" type="file" id="fieldField" value="Cari Foto" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="145">NISN</td>
          <td width="10"><div align="center"><strong>:</strong></div></td>
          <td width="377"><input name="NISN" type="text" id="NISN" size="15" class="required" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="145">NIK</td>
          <td width="10"><div align="center"><strong>:</strong></div></td>
          <td width="377"><input name="NIK" type="text" id="NIK" size="15" class="required" /></td>
        </tr>
    
<!--- a.ket pegawai ------------------------------------------------------------------>
		<tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>A.KETERANGAN PRIBADI </strong>
              <label></label></td>
        </tr>
       
        
        <tr>
          <td>&nbsp;</td>
          <td>Nama Lengkap Pegawai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <label>
          <input name="nama_lengkap" type="text" id="nama" class="required"/>
          </label>
          </td>
          <td>&nbsp;</td>
        </tr>
       <tr>
          <td>&nbsp;</td>
          <td>Nama Panggilan Pegawai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <label>
          <input name="nama_panggilan" type="text" id="nama" class="required"/>
          </label>
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jenis Kelamin</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
            <input name="jenis_kelamin" type="radio" value="L" id="radiobutton" />
            Laki - laki
            <input name="jenis_kelamin" type="radio" value="P" id="radiobutton"/>
            Perempuan
			</td>
          <td><label></label></td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>Tempat Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal Lahir</td>
          <td><div align="center"><strong>:</strong></div></td>
           <td><input type="date" id="to" name="tgl_lahir" size="9" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.to);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.tgl_lahir);return false;" ><img name="popcal" align="center" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> 
		   <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:500px;">
</iframe>
		</td>
		</tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
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
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="kewarganegaraan_pegawai" id="kewarganegaraan_pegawai" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
   <tr>
          <td>&nbsp;</td>
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="kewarganegaraan_pegawai" type="radio" value="WNI" id="radiobutton" />
            WNI
            <input name="kewarganegaraan_pegawai" type="radio" value="WNA" id="radiobutton"/>
            WNA</td>
        </tr>  
<!--        <tr>
          <td>&nbsp;</td>
          <td>Anak ke </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="anak_ke" id="anak_ke"/>
          </label></td>
          <td>&nbsp;</td>
        </tr> 
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara kandung </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="jumlah_saudara_kandung" id="jlm_sdr" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara tiri </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="saudara_tiri" id="saudara_tiri"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jumlah saudara angkat </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="saudara_angkat" id="saudara_angkat" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Anak yatim/piatu</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="yatim_piatu" id="yatim_piatu" />
          </label></td>
          <td>&nbsp;</td>
        </tr> -->
    <!--
	<tr>
          <td>&nbsp;</td>
          <td>Bahasa sehari-hari </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" size="5" name="bahasa" id="bahasa" />
          </label></td>
          <td>&nbsp;</td>
        </tr> 
		-->

<!--- B. Keterangan Tempat ---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>B.KETERANGAN TEMPAT TINGGAL</strong>
              <label></label></td>
        </tr>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat Lengkap</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label></label>
              <label for="textarea"></label>
              <label for="textfield"></label>
              <textarea name="alamat"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="no_telp" id="hp_pegawai" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tinggal dengan </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tinggal_dengan" id="tinggal_dengan" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jarak ke sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="jarak" id="jarak" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Transportasi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="transportasi" id="transportasi" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
<!--- ---------------------------------------------------------->
<!--- C. Keterangan kesehatan---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>C. KETERANGAN KESEHATAN</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Golongan Darah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
          <input name="gol_darah" type="radio" value="A" id="radiobutton" />A
          <input name="gol_darah" type="radio" value="B" id="radiobutton"/>B
          <input name="gol_darah" type="radio" value="AB" id="radiobutton"/>AB
          <input name="gol_darah" type="radio" value="O" id="radiobutton"/>O
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penyakit yang pernah diderita</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="penyakit" id="penyakit" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kelainan jasmani</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="kelainan_jasmani" id="kelainan_jasmani" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tinggi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tinggi" id="tinggi" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Berat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="berat" id="berat" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
<!--- ---------------------------------------------------------->
<!--- D. Keterangan pendidikan---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>D. KETERANGAN PENDIDIKAN</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pendidikan sebelumnya </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_sekolah" id="id_sekolah">
              <option value="Notid_pekerjaan_a" selected="selected"> [---pilih---]</option>
              <?php
		  $sql="select kd_sekolah,nama_sekolah from tbl_asal_sekolah order by nama_sekolah";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_sekolah]==$id_sekolah){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_sekolah]' $cek> $data[nama_sekolah]</option>";
		  }
		  ?>
            </select>          
          </td>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="sttb" id="sttb" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor SKHU</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="skhu" id="skhu" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>Lama belajar </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="lama_belajar" id="lama_belajar" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Pindahan dari sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="pindahan" id="pindahan" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alasan pindah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="alasan" id="alasan" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Diterima di pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
         <td><select name="diterima" id="diterima">
              <option value="kd_pendidikan" selected="selected"> [---pendidikan---]</option>
              <?php
		  $sql="select kd_pendidikan,pendidikan from tbl_pendidikan order by pendidikan";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_pendidikan]==$kd_pendidikan){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_pendidikan]' $cek> $data[pendidikan]</option>";
		  }
		  ?>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal diterima</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="tanggal_masuk" id="tanggal_masuk" class="required"/>
          </label></td>
          <td>&nbsp;</td>
        </tr>
<!--- ---------------------------------------------------------->
<!--- E. Keterangan ayah ---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>E. KETERANGAN AYAH KANDUNG</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama Ayah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="nama_ayah" id="nama_ayah" class="required"/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="agama_ayah" id="agama_a">
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
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="kw_ayah" type="radio" value="WNI" id="radiobutton" />
            WNI
            <input name="kw_ayah" type="radio" value="WNA" id="radiobutton"/>
            WNA</td>
        </tr>
		
		 <tr>
          <td>&nbsp;</td>
          <td>Tingkat Pendidikan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="tp_ayah" type="radio" value="SD" id="radiobutton" />
            SD
            <input name="tp_ayah" type="radio" value="SMP" id="radiobutton"/>
            SMP
			<input name="tp_ayah" type="radio" value="SMA" id="radiobutton"/>
            SMA
			<input name="tp_ayah" type="radio" value="Sarjana" id="radiobutton"/>
            Sarjana</td>
        </tr>
		
        <tr>
          <td>&nbsp;</td>
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_pekerjaan_ayah" id="pekerjaan_ayah">
              <option value="Notid_pekerjaan" selected="selected"> [---pilih---]</option>
              <?php
		  $sql="select kd_pekerjaan,pekerjaan from tbl_pekerjaan order by pekerjaan";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_pekerjaan]==$id_pekerjaan){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_pekerjaan]' $cek> $data[pekerjaan]</option>";
		  }
		  ?>
            </select>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><textarea name="alamat_a" required></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="no_telp_a" id="no_telp_a" class="required"/></td>
        </tr>
        </tr>
<!--- ---------------------------------------------------------->
<!--- F. Keterangan Ibu---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>F. KETERANGAN IBU KANDUNG</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nama </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><label>
            <input type="text" name="nama_ibu" id="nama_ibu" class="required"/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Agama</td>
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
          <td>Kewarganegaraan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input name="kw_ibu" type="radio" value="WNI" id="radiobutton" />
            WNI
            <input name="kw_ibu" type="radio" value="WNA" id="radiobutton"/>
            WNA</td>
        </tr>
		
		 <tr>
          <td>&nbsp;</td>
          <td>Tingkat Pendidikan</td>
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
          <td>Pekerjaan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><select name="id_pekerjaan_ibu" id="pekerjaan_ibu">
              <option value="Notid_pekerjaan" selected="selected"> [---pilih---]</option>
              <?php
		  $sql="select kd_pekerjaan,pekerjaan from tbl_pekerjaan order by pekerjaan";
		  $qry= mysql_query($sql);
		  
		  while ($data=mysql_fetch_array($qry)){
		  if ($data[kd_pekerjaan]==$id_pekerjaan){
		  $cek1="selected";
		  }
		  else
		  {
		  $cek1="";
		  }
		  echo"<option value='$data[kd_pekerjaan]' $cek> $data[pekerjaan]</option>";
		  }
		  ?>
            </select>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alamat</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><textarea name="alamat_ibu" required></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>No. Telp </td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="telp_ibu" class="required"/></td>
        </tr>
        </tr>

<!--- ---------------------------------------------------------->
<!--- H. Keterangan hobi ---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>H. KETERANGAN HOBI</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Kesenian</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="kesenian" id="kesenian" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Olahraga</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="olahraga" id="olahraga" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Organisasi/Kemasyarakatan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="organisasi" id="organisasi" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Lain-lain</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="hobi_lain" id="hobi_lain" class="required"/></td>
        </tr>
<!--- ---------------------------------------------------------->
<!--- I. Keterangan perkembangan---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>H. KETERANGAN PERKEMBANGAN pegawai</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Menerima beapegawai</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="beapegawai" id="beapegawai" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Prestasi</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="prestasi" id="prestasi" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal keluar sekolah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tanggal_do" id="tanggal_do" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Alasan keluar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="alasan_do" id="alasan_do" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tamat belajar</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tamat_belajar" id="tamat_belajar" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor STTB/Ijazah</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="sttb_lulus" id="sttb_lulus" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Nomor SKHU</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="skhu_lulus" id="skhu_lulus" class="required"/></td>
        </tr>
        
<!--- ---------------------------------------------------------->
<!--- J. Keterangan slesai---------------------------------------------------------->       
		
        <tr>
          <td width="77">&nbsp;</td>
          <td colspan="4"><strong>J. KETERANGAN SETELAH SELESAI PENDIDIKAN</strong>
              <label></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Melanjutkan di univ</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="lanjut" id="lanjut" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Tanggal bekerja</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="tanggal_bekerja" id="tanggal_bekerja" class="required"/></td>
        </tr>
		<tr>
          <td>&nbsp;</td>
          <td>Nama perusahaam</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="nama_perusahaan" id="nama_perusahaan" class="required"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Penghasilan</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td><input type="text" name="penghasilan_pegawai" id="penghasilan_pegawai" class="required"/></td>
        </tr>
        
        </tr>
   		<td>&nbsp;</td>
        
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
          <td>Tahun Masuk</td>
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
            </select>          </td>
   <td>&nbsp;</td>
        </tr>
		
        <tr>
          <td>&nbsp;</td>
          <td>Status Masuk</td>
          <td><div align="center"><strong>:</strong></div></td>
          <td>
            <input name="status_masuk" type="radio" value="Fresh" id="radiobutton" />
            Fresh
            <input name="status_masuk" type="radio" value="Pindahan" id="radiobutton"/>
            Pindahan </td>
          <td><label></label></td>
        </tr>
		
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
          <td>&nbsp;</td>
        </tr>
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