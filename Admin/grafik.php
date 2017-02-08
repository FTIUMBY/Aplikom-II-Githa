<?php include "up1.php";?>

		  <script src="../src/Chart.Core.js"></script>
		  <script src="../src/Chart.Doughnut.js"></script>
		  <style>
			body{
				padding: 0;
				margin: 0;
			}
			#canvas-holder{
				width:40%;
			}
			#canvas-holder2{
				width:40%;
			}
		  </style>
	</head>
	<body>
    <div id="canvas-holder">
		<canvas id="chart-area" width="500" height="500"/>

	<!--- chart 1-->
	<script>

		var doughnutData = [
				{
					value: 5,
					label: "One"
				},
				{
					value: 2,
					label: "Two"
				},
				{
					value: 3,
					label: "Three"
				},
				{
					value: 4,
					label: "Four"
				},
				{
					value: 5,
					label: "Five"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
			};
	</script>
    </div>
    
     <div id="canvas-holder2">
		<canvas id="chart-area2" width="500" height="500"/>

	<!--- chart 1-->
	<script>

		var doughnutData = [
				{
					value: 5,
					label: "One"
				},
				{
					value: 2,
					label: "Two"
				},
				{
					value: 3,
					label: "Three"
				},
				{
					value: 4,
					label: "Four"
				},
				{
					value: 5,
					label: "Five"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
			};
	</script>
    </div>
  <?php include "down1.php";?>
	</body>
</html>
