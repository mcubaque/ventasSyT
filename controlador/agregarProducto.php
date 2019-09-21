<?php
session_start();
extract ($_POST);
require "../Modelo/conexion.php";
require "../Modelo/productos.php";
$objProducto=new Productos();
$objProducto->crearProducto($_POST['id_producto'],$_POST['nom_prod'],$_POST['precio'],$_POST['stock'],$_POST['id_categoria']);
$resultado=$objProducto->agregarProducto();
if ($resultado) 
	header("location:../Vista/ventas.php");
else
	header("location:../Vista/error404.html");

?>



