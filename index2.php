<?php 
		setlocale(LC_TIME, 'fra_fra');
		$array= [];
		$daye = 1 ;
		while($daye <=10 ){
		$hier = new DateTime('-'.$daye.' day');
		$hierEnChiffre = $hier -> format('d/m').' ';
		$array [] = $hierEnChiffre;
			$daye +=1;
		}
?>  
<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - Pie Chart</title>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	</head>
	<body>
		<canvas id="myChart" ></canvas>
		<script>
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'bar',

				// The data for our dataset
				data: {
					labels: <?php echo json_encode($array);?>,
					datasets: [{
						label: 'My First dataset',
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 25, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 205, 64, 0.2)',
							'rgba(255, 30, 25, 0.2)',
							'rgba(255, 250, 70, 0.2)',
							'rgba(255, 149, 50, 0.2)',
							'rgba(255, 198, 205, 0.2)',
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 25, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 30, 64, 1)',
							'rgba(255, 149, 25, 0.2)',
							'rgba(255, 250, 70, 0.2)',
							'rgba(255, 189, 50, 0.2)',
							'rgba(255, 198, 205, 0.2)',
						],
            			borderWidth: 1,
						data: [4, 10, 5, 2, 20, 30, 45, 48, 4, 45]
					}]
				},

				// Configuration options go here
				options: {}
			});
		</script>
	</body>
</html>