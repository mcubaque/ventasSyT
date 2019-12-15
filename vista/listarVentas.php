<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:../index.php");//significa que no han iniciado sesión
?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="web aldami">
    <meta name="author" content="Aldami">
    <title>Listado de Ventas</title>
    <link rel="icon" href="img/logoAldami.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script type="text/javascript" src="js/funciones.js"></script>
  </head>

<body>
	<div id="divMenu"> <?php include "navbar.php";?> </div>
	
<br>
<a href='factura.php'> <button type='button' class='btn btn-danger'>Volver</button></a>

<?php 
	
	$sentencia="SELECT id_venta, id_cliente, id_producto, total, fecha_venta, nombres, apellido FROM ventas, cliente WHERE id_clientes = id_cliente;";
	
?>
<br>
			
					
			<h3 class="text-center">LISTADO DE VENTAS</h3>
			
			<table class="table table-hover text-center mt-3">
				<thead>
					<th class="text-center">Id_Venta</th>
					<th class="text-center">Id_Cliente</th>
					<th class="text-center">Nombre</th>
					<th class="text-center">Apellido</th>
					<th class="text-center">Id_Producto</th>
					<th class="text-center">Total</th>
					<th class="text-center">Fecha_Venta</th>
				</thead>
				<?php
				include "../modelo/conexion.php";
			
				$resultado=Conectarse()->query($sentencia) or die (mysqli_error($conexion));
				while ($filas=$resultado->fetch_assoc()) {
					echo "<tr>";
						echo "<td>"; echo $filas['id_venta']; echo "</td>";
						echo "<td>"; echo $filas['id_cliente']; echo "</td>";
						echo "<td>"; echo $filas['nombres']; echo "</td>";
						echo "<td>"; echo $filas['apellido']; echo "</td>";
						echo "<td>"; echo $filas['id_producto']; echo "</td>";
						echo "<td>"; echo $filas['total']; echo "</td>";
						echo "<td>"; echo $filas['fecha_venta']; echo "</td>";
					echo "</tr>";
				 } 
				 ?>
			</table>	
		</div>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	

	<div id="divPiePagina"><?php include "footer.php";?> </div>
</body>
</html>

