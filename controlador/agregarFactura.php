<?php
// connect to database
include '../modelo/conexion.php';
 
// product details
$id_producto = isset($_GET['id_producto']) ?  $_GET['id_producto'] : die;
$nom_prod = isset($_GET['nom_prod']) ?  $_GET['nom_prod'] : die;
$cantidad  = isset($_GET['cantidad']) ?  $_GET['cantidad'] : die;
$id_usuario=1;
$creado=date('Y-m-d H:i:s');
$conexion = Conectarse();
 
// insert query
$query = "INSERT INTO factura (id_prod, cantidad, id_usuario, creado) VALUES (?,?,?,?)";
 
// prepare query
$resultado = mysqli_prepare($conexion, $query);

$ok = mysqli_stmt_bind_param($resultado, "idis", $id_producto, $cantidad, $id_usuario, $creado);

$ok = mysqli_stmt_execute($resultado);
 
 
// if database insert succeeded
if($ok){
    header('Location: ../vista/ventas.php?action=added&id_producto=' . $id_producto . '&nom_prod=' . $nom_prod);
}
 
// if database insert failed
else{
     header('Location: ../vista/ventas.php?action=failed&id_producto=' . $id_producto . '&nom_prod=' . $nom_prod);
}
 