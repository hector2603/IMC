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

function documento(){
			var val = $("#docu").val();
			if(!$.isNumeric( val )){
				$("#docu").val("");
				alert("El documento debe ser de tipo numerico");
			}else if(val.length<=5){
				alert("El documento debe ser mayor o igual a 6 numeros");
			}else if(val.length>=16){
				alert("El documento debe ser menor o igual a 15 numeros");
			}
}		


	$(document).ready(function(){

		var val = parseFloat($("#indice").val());
		var aux = parseInt(val);
		val = val-aux;
		var aux2 = (parseInt(val/0.1)/10)+aux;
		var NvoCampo= document.createElement("h1");
		NvoCampo.innerHTML="<h1 id='Val_imc'>"+aux2+"</h1>";
		var contenedor= document.getElementById("titulo");
	    contenedor.appendChild(NvoCampo);
	    $("#indice").val(aux2);

	    if(aux2<18){
	    	$( "#pesobajo" ).addClass( "danger" );
	    }else if(aux2>=18 && aux2<=24.9){
	    	$( "#normal" ).addClass( "success" );
	    }else if(aux2>=25 && aux2<=26.9){
	    	$( "#sobrepeso" ).addClass( "danger" );
	    }else if(aux2>=27){
	    	$( "#obesidad" ).addClass( "danger" );

	    	if(aux2>=27 && aux2<=29.9){
	    		$( "#obesidad1" ).addClass( "danger" );
	    	}else if(aux2>=30 && aux2<=39.9){
	    		$( "#obesidad2" ).addClass( "danger" );
	    	}else if(aux2>=40){
	    		$( "#obesidad3" ).addClass( "danger" );
	    	}
	    }

	});


</script>
</head>
<body background="../img/bg2.jpg">

<!--Comienzo de la div que contiene el form-->
<div class="container">

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
				<div id="titulo" class=" text-center" STYLE=" background-color:white">
                    
				</div>
			</div>

			<!--Fin del form, y creacion del link de recuperacion de contraseña-->
					
		    
		</div>
		</div>
			<div class="row"><br><br> </div>
	<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="intro">
					<div class="slogan">
						<h4><span class="text_color">Tabla de Rangos</span></h4>
					</div>
				</div>
				<div class="table-responsive" >
				  <table class="table table-bordered table-striped table-condensed"  STYLE=" background-color:white">
					  	<thead>
			    			<tr >
								<th>IMC</th>
								<th>Clasificación</th>
							</tr>
						</thead>
		    			<tr  id="pesobajo" >
							<td>Menor a 18</td>
							<td>Peso Bajo</td>
						</tr>
		    			<tr  id="normal">
							<td>18 a 24.9</td>
							<td>Normal</td>
						</tr>
						<tr  id="sobrepeso">
							<td>25 a 26.9</td>
							<td>Sobrepeso</td>
						</tr>
						<tr  id="obesidad">
							<td>Mayor a 27</td>
							<td>Obesidad.</td>
						</tr>
						<tr  id="obesidad1">
							<td>27 a 29.9</td>
							<td>Obesidad grado I. riesgo relativo Alto para desarrollar enfermedades cardiovasculares</td>
						</tr>
						<tr  id="obesidad2">
							<td>30 a 39.9</td>
							<td>Obesidad grado II. Riesgo relativo Muy alto para desarrollo de enfermedades cardiovasculares</td>

						</tr>
						<tr  id="obesidad3">
							<td>Mayor a 40</td>
							<td>Obesidad grado III Extrema o Mórbida. Riesgo relativo Extremadamente alto para el desarrollo de enfermedades cardiovasculares</td>
						</tr>
				  </table>
				</div>
			</div>
					
		    
	</div>
	<div class="row">
		<div class="col-lg-3"><a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a> </div>
		<div class="col-lg-6">
			<div class="intro">
				<div class="slogan">
					<h4><span class="text_color">Guardar Registro</span></h4>
				</div>
			</div>
				<form role ="form" action="../script/Guardar.php" method="post" class="form-signin form col-md-12 center-block ">
<?php
			$imc = $_REQUEST['imc'];
			echo "<input type='text' id='indice' name='imc' value=$imc maxlength='15' required='required' class='form-control hide'>";
?>
	            <div class='form-group' >
	            	<div class='col-lg-9'>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" id="docu" name="id" onBlur="documento()" placeholder="Cedula" maxlength="15" required="required" class="form-control">
						</div>				
						<span >Importante: para guardar sus registros debe ingresar el numero del documento</span>
					</div>		
						<input type="submit" name="login" class="btn btn-primary " value="Guardar">
				</div>

				</form> 
		</div>
	</div>
</body>
</html>

