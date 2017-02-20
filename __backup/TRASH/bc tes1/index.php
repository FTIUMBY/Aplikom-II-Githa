<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
?>

  <?php include "atas10.php";?>

				
		<div id="content">
		  <table width="767" border="0">
            <tr>
              <td bgcolor="#CCCCCC"><div align="center" class="style20">
                <div align="left"><strong>Informasi Sekolah </strong></div>
              </div></td>
            </tr>
            <tr>
              <td><div align="center" class="style20">
                <div align="left">Nama Sekolah : SMK Kuncup Samigaluh<br />
                  Nomor Statistik Sekolah : 344040411007<br />
                  Program Keahlian : Tata Niaga &amp; Teknik Komputer Dan Jaringan<br />
                  Alamat  : Jl. Noto Sudiro No. 1 Jetis, Gerbosari, Samigaluh, Kulon Progo, Daerah Istimewa Yogyakarta 55673<br />
                  Telepon : 082892674605<br />
                  E-mail : smkkuncupsamigaluh@ymail.com<br />
                  Status sekolah : Sawata <br />
                  Nama Yayasan : Kuncup Samigaluh<br />
                  No. Akte Pendirian : No. 9  Tanggal 14 Juni 1975<br />
                  Tahun Berdiri Sekolah : 1971<br />
                   Status Akreditasi : B </div>
              </div></td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC"><div align="center" class="style20">
                <div align="left"><strong>VISI</strong></div>
              </div></td>
            </tr>
            <tr>
              <td>Mewujudkan  Sumber Daya Manusia  yang profesional, yang tangguh  dan mampu bersaing dalam era globalisasi menghadapi perdagangan bebas.</td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC"><div align="center" class="style20">
                <div align="left"><strong>MISI</strong></div>
              </div></td>
            </tr>
            <tr>
              <td>
                <div align="center" class="style20">
                  <div align="left">Melaksanakan kegiatan pembelajaran dengan berwawasan keunggulan guna menghasilkan tamatan yang mempunyai unjuk kerja dan berkemampuan yang dapat dimanfaatkan dalam meningkatkan tarap kehidupan.</div>
                </div></td>
            </tr>
          </table>
		</div>
		
</body>
</html>