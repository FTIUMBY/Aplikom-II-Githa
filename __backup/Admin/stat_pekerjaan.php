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

   <center>Statistik berdasarkan pekerjaan wali pegawai</center>
      <table width="916" height="81" border="0">
	    <tr>
	      <td>
                        
            <div id="canvas-holder">
			<canvas id="chart-area" width="500" height="500"/>
		</div>
    	<script>
         <?php
                $P01=mysql_query("SELECT NIP from tbl_wali where kd_pekerjaan= 'P01' " ,$koneksi);
                $jum_P01=mysql_num_rows($P01);
                
                $P02=mysql_query("SELECT NIP from tbl_wali where kd_pekerjaan= 'P02' " ,$koneksi);
                $jum_P02=mysql_num_rows($P02);
                
                $P03=mysql_query("SELECT NIP from tbl_wali where kd_pekerjaan= 'P03' " ,$koneksi);
                $jum_P03=mysql_num_rows($P03);
                
                $P04=mysql_query("SELECT NIP from tbl_wali where kd_pekerjaan= 'P04' " ,$koneksi);
                $jum_P04=mysql_num_rows($P04);
          ?>
    
            var doughnutData = [
                    {
                        value: <?php echo $jum_P01;?>,
                        label: "Pegawai Negeri"
                    },
                    {
                        value: <?php echo $jum_P02;?>,
                        label: "Wira swasta"
                    },
                    {
                        value: <?php echo $jum_P03;?>,
                        label: "Lain-lain"
                    },
                    {
                        value: <?php echo $jum_P04;?>,
                        label: "Pegawai Swasta"
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
               <td width="25" bgcolor="#FF0000"><div align="justify">  </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">Pegawai Negeri</div></td>
               <td width="76"><div align="center"><?php echo $jum_P01;?></div></td>
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
               <td width="25" bgcolor="#33FF66"><div align="justify"> </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">Wira swasta</div></td>
               <td width="76"><div align="center"><?php echo $jum_P02;?></div></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
               <td width="25" bgcolor="#5AD3D1"><div align="justify">  </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">Lain-lain</div></td>
               <td width="76"><div align="center"><?php echo $jum_P03;?></div></td>
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
               <td width="25" bgcolor="#6633FF"><div align="justify"> </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">Pegawai Swasta</div></td>
               <td width="76"><div align="center"><?php echo $jum_P04;?></div></td>
               </tr>
               </table> 
                
        </tr>
     	</table>
    
		
 <?php include "down1.php";?>