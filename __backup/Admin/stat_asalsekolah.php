<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
?>
<?php include "up1.php";?>
<script src="../src/Chart.Core.js"></script>
<script src="../src/Chart.Doughnut.js"></script>

		<style>
			body{
				padding: 0;
				margin: 0;
			}
			#canvas-holder{
				width:70%;
			}
		</style>


  <center>
   Statistik berdasarkan 
  asal sekolah pegawai
  </center>
      <table width="916" height="81" border="0">
	    <tr>
	      <td>
          
          <div id="canvas-holder">
			<canvas id="chart-area" width="500" height="500"/>
		</div>

		<script>
         <?php	
                $s1=mysql_query("SELECT NIP from tbl_pegawai where kd_sekolah='1' ",$koneksi);
                $jum_s1=mysql_num_rows($s1);
                
                $s2=mysql_query("SELECT NIP from tbl_pegawai where kd_sekolah='2' ",$koneksi);
                $jum_s2=mysql_num_rows($s2);
                
                $s3=mysql_query("SELECT NIP from tbl_pegawai where kd_sekolah='3' ",$koneksi);
                $jum_s3=mysql_num_rows($s3);
                
                $s4=mysql_query("SELECT NIP from tbl_pegawai where kd_sekolah='4' ",$koneksi);
                $jum_s4=mysql_num_rows($s4);
                
             ?>
    
            var doughnutData = [
                    {
                        value: <?php echo $jum_s1;?>,
                        label: "SMP Negeri 1 Yogyakarta"
                    },
                    {
                        value: <?php echo $jum_s2;?>,
                        label: "SMP Negeri 2 Yogyakarta"
                    },
                    {
                        value: <?php echo $jum_s3;?>,
                        label: "SMP Negeri 3 Yogyakarta"
                    },
                    {
                        value: <?php echo $jum_s4;?>,
                        label: "SMP Negeri 4 Yogyakarta"
                    }
                ];
    
                window.onload = function(){
                    var ctx = document.getElementById("chart-area").getContext("2d");
                    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                };
    
       		 </script>
              
          </td>
	      <td>
             
               <table width="276" border="0" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
               
               <tr>
               <td width="30" bgcolor="#FF0000"><div align="justify">  </div></td>
               <td width="30" >&nbsp;</td>
               <td width="187"><div align="justify">SMP Negeri 1 Yogyakarta</div></td>
               <td width="29"><div align="center"><?php echo $jum_s1;?></div></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
                 <td></td>
                 <td></td>
               <td></td>
               <td></td>
               <tr>
               <td width="30" bgcolor="#33FF66"><div align="justify"> </div></td>
               <td width="30" >&nbsp;</td>
               <td width="187"><div align="justify">SMP Negeri 2 Yogyakarta</div></td>
               <td width="29"><div align="center"><?php echo $jum_s2;?></div></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
               <td width="30" bgcolor="#5AD3D1"><div align="justify">  </div></td>
               <td width="30" >&nbsp;</td>
               <td width="187"><div align="justify">SMP Negeri 3 Yogyakarta</div></td>
               <td width="29"><div align="center"><?php echo $jum_s3;?></div></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
                 <td></td>
                 <td></td>
               <td></td>
               <td></td>
               <tr>
               <td width="30" bgcolor="#6633FF"><div align="justify"> </div></td>
               <td width="30" >&nbsp;</td>
               <td width="187"><div align="justify">SMP Negeri 4 Yogyakarta</div></td>
               <td width="29"><div align="center"><?php echo $jum_s4;?></div></td>
               </tr>
               </table> 
                
        </tr>
     	</table>
    
		
   <?php include "down1.php";?>