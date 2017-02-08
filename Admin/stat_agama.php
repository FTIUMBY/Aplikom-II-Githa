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


  <center>Statistik berdasarkan agama pegawai</center>
      <table width="916" height="81" border="0">
	    <tr>
	      <td>
          
          <div id="canvas-holder">
			<canvas id="chart-area" width="500" height="500"/>
		</div>

		<script>
         <?php	
                $a1=mysql_query("SELECT NIP from tbl_pegawai where kd_agama='AG1' ",$koneksi);
                $jum_a1=mysql_num_rows($a1);
                
                $a2=mysql_query("SELECT NIP from tbl_pegawai where kd_agama='AG2' ",$koneksi);
                $jum_a2=mysql_num_rows($a2);
                
                $a3=mysql_query("SELECT NIP from tbl_pegawai where kd_agama='AG3' ",$koneksi);
                $jum_a3=mysql_num_rows($a3);
                
                $a4=mysql_query("SELECT NIP from tbl_pegawai where kd_agama='AG4' ",$koneksi);
                $jum_a4=mysql_num_rows($a4);
				
				$a5=mysql_query("SELECT NIP from tbl_pegawai where kd_agama='AG5' ",$koneksi);
                $jum_a5=mysql_num_rows($a5);
                
             ?>
    
            var doughnutData = [
                    {
                        value: <?php echo $jum_a1;?>,
                        label: "Islam"
                    },
                    {
                        value: <?php echo $jum_a2;?>,
                        label: "Kristen"
                    },
                    {
                        value: <?php echo $jum_a3;?>,
                        label: "Katolik"
                    },
                    {
                        value: <?php echo $jum_a4;?>,
                        label: "Hindu"
                    },
					{
                        value: <?php echo $jum_a5;?>,
                        label: "Budha"
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
               <td width="103"><div align="justify">Islam</div></td>
               <td width="76"><div align="center"><?php echo $jum_a1;?></div></td>
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
               <td width="103"><div align="justify">Kristen</div></td>
               <td width="76"><div align="center"><?php echo $jum_a2;?></div></td>
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
               <td width="103"><div align="justify">Katolik</div></td>
               <td width="76"><div align="center"><?php echo $jum_a3;?></div></td>
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
               <td width="103"><div align="justify">Hindu</div></td>
               <td width="76"><div align="center"><?php echo $jum_a4;?></div></td>
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
               <td width="103"><div align="justify">Budha</div></td>
               <td width="76"><div align="center"><?php echo $jum_a5;?></div></td>
               </tr>
               </table> 
                
        </tr>
     	</table>
    
		
   <?php include "down1.php";?>