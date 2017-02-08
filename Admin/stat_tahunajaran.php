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


   <center>Statistik berdasarkan tahun ajaran </center>
      <table width="916" height="81" border="0">
	    <tr>
	      <td>
          
          <div id="canvas-holder">
			<canvas id="chart-area" width="500" height="500"/>
		</div>

		<script>
         <?php	
                $t1=mysql_query("SELECT NIP from tbl_pegawai where kd_tahun_ajar='1' ",$koneksi);
                $jum_t1=mysql_num_rows($t1);
                
                $t2=mysql_query("SELECT NIP from tbl_pegawai where kd_tahun_ajar='2' ",$koneksi);
                $jum_t2=mysql_num_rows($t2);
                
                $t3=mysql_query("SELECT NIP from tbl_pegawai where kd_tahun_ajar='3' ",$koneksi);
                $jum_t3=mysql_num_rows($t3);
                
                $t4=mysql_query("SELECT NIP from tbl_pegawai where kd_tahun_ajar='4' ",$koneksi);
                $jum_t4=mysql_num_rows($t4);
				
				$t5=mysql_query("SELECT NIP from tbl_pegawai where kd_tahun_ajar='5' ",$koneksi);
                $jum_t5=mysql_num_rows($t5);
                
             ?>
    
            var doughnutData = [
                    {
                        value: <?php echo $jum_t1;?>,
                        label: "12/13"
                    },
                    {
                        value: <?php echo $jum_t2;?>,
                        label: "13/14"
                    },
                    {
                        value: <?php echo $jum_t3;?>,
                        label: "14/15"
                    },
                    {
                        value: <?php echo $jum_t4;?>,
                        label: "15/16"
                    },
					{
                        value: <?php echo $jum_t5;?>,
                        label: "16/17"
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
               <td width="103"><div align="justify">2012/2013</div></td>
               <td width="76"><div align="center"><?php echo $jum_t1;?></div></td>
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
               <td width="25" bgcolor="#5AD3D1"><div align="justify"> </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">2013/2014</div></td>
               <td width="76"><div align="center"><?php echo $jum_t2;?></div></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
               <td width="25" bgcolor="#33FF66"><div align="justify">  </div></td>
               <td width="25" >&nbsp;</td>
               <td width="103"><div align="justify">2014/2015</div></td>
               <td width="76"><div align="center"><?php echo $jum_t3;?></div></td>
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
               <td width="103"><div align="justify">2015/2016</div></td>
               <td width="76"><div align="center"><?php echo $jum_t4;?></div></td>
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
               <td width="103"><div align="justify">2016/2017</div></td>
               <td width="76"><div align="center"><?php echo $jum_t5;?></div></td>
               </tr>
               </table> 
                
        </tr>
     	</table>
    
		
   <?php include "down1.php";?>