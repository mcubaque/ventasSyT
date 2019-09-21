º<?php
// connect to database
include '../modelo/conexion.php';
 
// get the product id
$id_producto = isset($_GET['id_producto']) ? $_GET['id_producto'] : "";
$nom_prod = isset($_GET['nom_prod']) ? $_GET['nom_prod'] : "";
$id_usuario = 1;
$conexion = Conectarse();
 
// delete query
$query = "DELETE FROM factura WHERE id_prod=?";
 
// prepare query
$resultado = mysqli_prepare($conexion, $query);
 
// bind values
$ok = mysqli_stmt_bind_param($resultado, "i", $id_producto);

$ok = mysqli_stmt_execute($resultado); 
// execute query
if($ok){
    // redirect and tell the user product was removed
    header('Location: ../vista/factura.php?action=removed&id_producto=' . $id_producto . '&nom_prod=' . $nom_prod);
}
 
// if remove failed
else{
    // redirect and tell the user it failed
    header('Location: ../vista/factura.php?action=failed&id_producto=' . $id_producto . '&nom_prod=' . $nom_prod);
}
?>