<!DOCTYPE html>
<html lang="en">
<head>

<!--Titulo pagina-->
<title>Consulta I.M.C</title>
<!--Llamado del stilo css-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min2.css" type="text/css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
<script type="text/javascript">

function Talla(){
			var val = parseFloat($("#idtalla").val());
			if(parseFloat(val)!==val){
				$("#idtalla").val("");
				alert("la Estatura debe ser numeros");
			}
}
function Peso(){
			var val = parseFloat($("#idpeso").val());
			if(parseFloat(val)!==val){
				$("#idpeso").val("");
				alert("el Peso debe ser numeros");
			}
}
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



</script>
</head>
<body background="img/bg2.jpg">

<!--Comienzo de la div que contiene el form-->
<div class="container">
	<div class="row"><br><br><br><br></div>
	<div class="row">
			<div class="intro">
						<div class="slogan">
			<h2><span class="text_color">ÍNDICE DE MASA CORPORAL</span> </h2>
			</div>

			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				
					<form role ="form" action="script/Calcular.php" method="post" class="form-signin form col-md-12 center-block form-horizontal">
                    <div class='form-group' >
                        <label  class='col-lg-2 control-label'>Peso:</label>
                        <div class='col-lg-9'>
                            <input type='text' id="idpeso" name='peso' onBlur="Peso()" placeholder='Peso' required='required' class='form-control' maxlength=30/>
                        </div>
                        <label  class='col-lg-1 control-label'>Kg</label>		
					</div>
                    <div class='form-group' >
                        <label  class='col-lg-2 control-label'>Estatura:</label>
                        <div class='col-lg-9'>
                            <input type='text' id="idtalla"name='talla' onBlur="Talla()" placeholder='Estatura' required='required' class='form-control' maxlength=30/>
                        </div>
                        <label  class='col-lg-1 control-label'>Metros</label>		
					</div>
							
						<br>
					<div class="col-lg-4"></div>

					<div class="col-lg-1 ">
							<input type="submit" name="login" class="btn btn-primary " value="Calcular">
					</div>	
					</form>
			</div>

					
		    
		</div>
		</div>
			<div class="row"><br><br> </div>
	<div class="row ">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="intro">
					<div class="slogan">
						<h4><span class="text_color">Consultar registros</span></h4>
					</div>
				</div>
				<h2></h2>
					<form role ="form" action="script/Buscar.php" method="post" class="form-signin form col-md-12 center-block ">

		            <div class='form-group' >
		            	<div class='col-lg-9'>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="docu" name="user" placeholder="Cedula" onBlur="documento()" maxlength="15" required="required" class="form-control">
							</div>				
							<span >Importante: para consultar sus registros debe ingresar el numero del documento</span>
						</div>		
							<input type="submit" name="login" class="btn btn-primary " value="Consultar">
					</div>

					</form>
			</div>
					
		    
		</div>
		</div>

</body>
</html>

