<!DOCTYPE html>

<?php

	ini_set('display_errors', 0 );
	error_reporting(0);
	
?>

<html lang="pt-BR">

	<head>

		<title>Calculadora IMC</title>
	
		<meta charset="utf-8"> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		
	</head>

	<body>

		<div class="container">

			<div class="jumbotron text-center">
			
				<h1>Calculadora IMC</h1>
				<p class="lead">
							    
					<?php 
				
					$weight = $_GET['weight'];
					$height = $_GET['height'];
										
					$height = str_replace(',', '.', $height);
					$weight = str_replace(',', '.', $weight);					
		
					$y1 = $height * $height;
					$y2 = $weight / $y1;
		
					$result = number_format($y2);
					
					if ($result < 17)
					{
						$bmi = "Muito abaixo do peso";
					}
					else if ($result >= 17 && $result <= 18.49)
					{
						$bmi = "Abaixo do peso";
					}
					else if ($result >= 18.5 && $result <= 24.99)
					{
						$bmi = "Peso normal";
					}
					else if ($result >= 25 && $result <= 29.99)
					{
						$bmi = "Acima do peso";
					}
					else if ($result >= 30 && $result <= 34.99)
					{
						$bmi = "Obesidade I";
					}
					else if ($result >= 35 && $result <= 39.99)
					{
						$bmi = "Obesidade II (severa)";
					}					
					else if ($result >= 40)
					{
						$bmi = "Obesidade III (mórbida)";
					}

					if(isset($result) && $result != '0')
						{;	
							echo 
							'<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-center">IMC</th>
										<th class="text-center">Situação</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>'.$result.'</td>
										<td>'.$bmi.'</td>
									</tr>					
								</tbody>
							</table>
							<span class="navbar-left"><a href="Form-BMI-Calculator.php" class="btn btn-default">Voltar</a></span>
							<br>';							
						}						

						else
						{
							echo '<h2 class="alert alert-warning">Por favor, utilize apenas números.</h1><br>
							<span class="navbar-center"><a href="Form-BMI-Calculator.php" class="btn btn-default">Voltar</a></span>';						
						}					

					?>					

				</p>			
			
			</div>
  
		</div> <!-- /container -->			
		
	</body>

</html>
