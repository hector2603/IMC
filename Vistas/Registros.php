<!DOCTYPE html>
<html lang="en">
<head>

<!--Titulo pagina-->
<title>Consulta I.M.C</title>
<!--Llamado del stilo css-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.min2.css" type="text/css" />
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
<script type="text/javascript">


	$(document).ready(function(){

		
		var val = $("#user").val();
		var contenedor= document.getElementById("tabla");
		var NvoCampo= document.createElement("table");
		NvoCampo.classList.add("table");
		NvoCampo.classList.add("table-bordered");
		NvoCampo.classList.add("table-striped");
		NvoCampo.classList.add("table-condensed");
		NvoCampo.style.background = 'white';

	      $.post("../script/CrearRegistro.php",
  			{
		    	user:val	
		  	},
		  function(data,status){
		  	NvoCampo.innerHTML="<thead><tr><th>Identificacion</th><th>Fecha</th><th>IMC</th></tr></thead>"+data;
		    contenedor.appendChild(NvoCampo);
		  });

	});




</script>
</head>
<body background="../img/bg2.jpg">

<!--Comienzo de la div que contiene el form-->
<div class="container">
	<div class="row"><br><br><br><br>
<?php
			$imc = $_REQUEST['user'];
			echo "<input type='text' id='user' value=$imc  class='form-control hide'>";
?>
	</div>
	<div class="row">
			<div class="intro">
						<div class="slogan">
			<h2><span class="text_color">Registros</span> </h2>
			</div>
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				
				<div id="tabla" class="table-responsive" >
				</div>
			</div>
			</div>
	</div>
	<div class="row">
		<div class="col-lg-4"></div>

		<a href="../index.php" class="btn btn-primary">Calcular un nuevo IMC</a>
	</div>
	<div class="row"> </div>
</div>

</body>
</html>

