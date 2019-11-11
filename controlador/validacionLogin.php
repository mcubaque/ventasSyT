<?php
session_start();
extract ($_POST);
require "../modelo/conexion.php";
/* los variables que viene del formulario son: $login, $password */

/*asigno a la variable password el valor encriptado de lo que colocaron
en el password del formulario, ya que así esta en la base de datos */

$email = $_POST['email'];
$password = ($_POST['password']);

$objConexion=Conectarse();
// Vamos a realizar el proceso para consultar los pacientes
//Guardamos en una variable la sentencia sql
$sql="select * from usuarios where email = '$email' and password = '$password'";
$sql2="select * from usuarios where email = '$email' and password = '$password'";

//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
$resultado2=$objConexion->query($sql2);
//verifico si existe el usuario
$admin = $resultado->num_rows;
$vendedor = $resultado2->num_rows;

if ($admin>0)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario->email;	
	$_SESSION['tipo_usuario']=$usuario->tipo_usuario;

	if($_SESSION['tipo_usuario']=="Administrador")
		header("location:../vista/dashboard.html");
	if($_SESSION['tipo_usuario']=="Vendedor")
		header("location:../vista/ventas.php");
}
else
{  
	
	echo '<script type="text/javascript">alert("Error de usuario, contraseña o usuario no registrado");</script>';
	header('location:../index.php');

	 //x=1, quiere decir que el usuario no esta registrado
}
 
?>