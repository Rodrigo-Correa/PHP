<!DOCTYPE html>

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
				
					<form name="calculate" method="get" enctype="multipart/form-data" action="Result-BMI-Calculator.php" >

						<fieldset>
				
							<label>
								Altura (m)
								<br/>
								<input type="text" name="height" class="form-control">
							</label>
                
							<br /><br />
							<label>
								Peso (kg)
								<br/>
								<input type="text" name="weight" class="form-control">
							</label>
                
							<br /><br />
							<input type="submit" value="Calcular" class="btn btn-default">&nbsp;
							<input type="reset" value="Limpar" class="btn btn-default">
            
						</fieldset>

					</form>

				</p>
				
			</div>

		</div> <!-- /container -->

	</body>

</html>
