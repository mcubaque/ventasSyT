<?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:../index.php");//significa que no han iniciado sesión
include "../modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<title>Agregar productos</title>
	<link rel="icon" href="img/logoAldami.ico">
</head>
<body>
	
	<div id="divMenu"> <?php include "navbar.php";?> </div>
	
	<br>
	<div class="container">
		<div class="row">
			
			<h1 class="table table-hover text-center mt-3">AGREGAR PRODUCTO</h1>

			<div class="container">
			<form class="form-horizontal" action="../controlador/agregarProducto.php" method="POST">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Producto</label>
						<div class="col-sm-4">
						<input type="text" name="id_producto" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Marca</label>
					<div class="col-sm-4">
						<input name="nom_prod" class="form-control"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Precio</label>
					<div class="col-sm-4">
						<input name="precio" class="form-control"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Stock</label>
					<div class="col-sm-4">
						<input name="stock" class="form-control"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Categoria</label>
					<div class="col-sm-4">
						<input name="id_categoria" class="form-control"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-danger btn-block">Guardar</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>

<?php

?>


<div id="divPiePagina"><?php include "footer.php";?> </div>

</body>
</html>


			