<?php 

$id_cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : "";
$id_producto = isset($_POST['id_producto']) ? $_POST['id_producto'] : "";
$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : "";
$subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : "";
$total = isset($_POST['total']) ? $_POST['total'] : "";


include "../modelo/conexion.php";
$sentencia = "INSERT INTO ventas (id_cliente, id_producto, cantidad, subtotal, total) VALUES ('".$id_cliente."', '".$id_producto."', '".$cantidad."', '".$subtotal."', '".$total."')";
	Conectarse()->query($sentencia) or die("Error al ingresar los datos");

?>

 <script type="text/javascript">
 	alert("Venta Ingresada Exitosamente");
 	window.location.href = "../vista/factura.php";
 </script>	

