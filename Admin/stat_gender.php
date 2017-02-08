<?php 
	include "../include/koneksi.php";
	session_start();
	
	$id_user = $_SESSION['user_name'];
	//cek level user
	if($_SESSION['level']!="admin"){header("Location:../include/previleges.php");}
	
?>
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
        
<?php include "up1.php";?>
	 
       <center>Statistik berdasarkan gender pegawai</center>
      <table width="916" height="81" border="0">
	    <tr>
	      <td>
                        
            <div id="canvas-holder">
                <canvas id="chart-area" width="500" height="500"/>
            </div>
            <script>
             <?php
                    $l=mysql_query("SELECT NIP from tbl_pegawai where gender='L' ",$koneksi);
                    $jum_l=mysql_num_rows($l);
                    
                    $p=mysql_query("SELECT NIP from tbl_pegawai where gender='P' ",$koneksi);
                    $jum_p=mysql_num_rows($p);
                 ?>
        
                var doughnutData = [
                        {
                            value: <?php echo $jum_p;?>,
                            label: "Perempuan"
                        },
                        {
                            value: <?php echo $jum_l;?>,
                            label: "Laki-laki"
                        }
                    ];
        
                    window.onload = function(){
                        var ctx = document.getElementById("chart-area").getContext("2d");
                        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                    };
        	  </script>
              
          </td>
	      <td>
             
               <table width="229" border="0" align="center"  cellpadding="0" cellspacing="0" bordercolor="#666666">
               
               <tr>
               <td width="30" bgcolor="#FF0000"><div align="justify">  </div></td>
               <td width="30" >&nbsp;</td>
               <td width="101"><div align="justify">Perempuan</div></td>
               <td width="98"><div align="center"><?php echo $jum_p;?></div></td>
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
               <td width="30" bgcolor="#5AD3D1"><div align="justify"> </div></td>
               <td width="30" >&nbsp;</td>
               <td width="101"><div align="justify">Laki-laki</div></td>
               <td width="98"><div align="center"><?php echo $jum_l;?></div></td>
               </tr>
               </table> 
                
        </tr>
     	</table>
          

      

  <?php include "down1.php";?>