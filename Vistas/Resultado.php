<!DOCTYPE html>
<html lang="en">
<head>

<!--Titulo pagina-->
<title>Mi Barrio</title>
<!--Llamado del stilo css-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.min2.css" type="text/css" />
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
</head>
<body background="../img/bg2.jpg">

<!--Comienzo de la div que contiene el form-->
<div class="container">
	<div class="row"><br><br><br><br></div>
	<div class="row">
			<div class="intro">
						<div class="slogan">
			<h2><span class="text_color">RESULTADO</span> </h2>
			</div>

			<div class="col-lg-5 " > </div>
			<div class="col-lg-2" >
				<div class="intro">
					<div class="slogan">
						<h4><span class="text_color">Tu IMC es:</span></h4>
					</div>
				</div>
				<div class=" text-center" STYLE=" background-color:white">
                    <h1>Peso:</h1>
				</div>
			</div>

			<!--Fin del form, y creacion del link de recuperacion de contraseña-->
					
		    
		</div>
		</div>
			<div class="row"><br><br> </div>
	<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="intro">
					<div class="slogan">
						<h4><span class="text_color">Tabla de Rangos</span></h4>
					</div>
				</div>
				<div class="table-responsive" >
				  <table class="table table-bordered table-striped table-condensed"  STYLE=" background-color:white">
					  	<thead>
			    			<tr>
								<th>IMC</th>
								<th>Clasificación</th>
							</tr>
						</thead>
		    			<tr>
							<td>Menor a 18</td>
							<td>Peso Bajo</td>
						</tr>
		    			<tr>
							<td>18 a 24.9</td>
							<td>Normal</td>
						</tr>
						<tr>
							<td>25 a 26.9</td>
							<td>Sobrepeso</td>
						</tr>
						<tr>
							<td>Mayor a 27</td>
							<td>Obesidad.</td>
						</tr>
						<tr>
							<td>27 a 29.9</td>
							<td>Obesidad grado I. riesgo relativo Alto para desarrollar enfermedades cardiovasculares</td>
						</tr>
						<tr>
							<td>30 a 39.9</td>
							<td>Obesidad grado II. Riesgo relativo Muy alto para desarrollo de enfermedades cardiovasculares</td>

						</tr>
						<tr>
							<td>Mayor a 40</td>
							<td>Obesidad grado III Extrema o Mórbida. Riesgo relativo Extremadamente alto para el desarrollo de enfermedades cardiovasculares</td>
						</tr>
				  </table>
				</div>
			</div>
					
		    
	</div>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="intro">
				<div class="slogan">
					<h4><span class="text_color">Guardar Registro</span></h4>
				</div>
			</div>
				<form role ="form" action="script/Guardar.php" method="post" class="form-signin form col-md-12 center-block ">

	            <div class='form-group' >
	            	<div class='col-lg-9'>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="id" placeholder="Cedula" maxlength="15" required="required" class="form-control">
						</div>				
						<span >Importante: para guardar sus registros debe ingresar el numero de documento</span>
					</div>		
						<input type="submit" name="login" class="btn btn-primary " value="Guardar">
				</div>

				</form> 
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
</body>
</html>

