<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:../index.php");//significa que no han iniciado sesión
include '../modelo/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="web aldami">
    <meta name="author" content="Marco Cubaque">
    <title>Registrar Venta</title>
    <link rel="icon" href="img/logoAldami.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/funciones.js"></script>
  </head>

<body>
    <div id="divMenu"> <?php include "navbar.php";?> </div>
    <br>
    <div class="text-right">
        <a href='agregar_producto.php'> <button type='button' class='btn btn-danger'>Agregar Producto</button></a> 
        <a href='factura.php'> <button type='button' class='btn btn-danger'>Ver Factura</button></a>
    </div>
    
    <br>

            <h3 class="text-center">SELECCIONAR PRODUCTOS</h3>
            
            <table class="table table-hover text-center mt-3">
                <thead>
                    <th class="text-center">ID_Producto</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Stock</th>
                    <th class="text-center">Precio</th>
                    <th class="col-xs-3 text-center">Cantidad</th>
                    <th class="text-center">Acciones</th>
                </thead>
<?php

// to prevent undefined index notice
$acciones = isset($_GET['acciones']) ? $_GET['acciones'] : "";
$id_producto = isset($_GET['id_producto']) ? $_GET['id_producto'] : "1";
$nom_prod = isset($_GET['nom_prod']) ? $_GET['nom_prod'] : "";
$stock = isset($_GET['stock']) ? $_GET['stock'] : "";
$cantidad= isset($_GET['cantidad']) ? $_GET['cantidad'] : "1";
$precio= isset($_GET['precio']) ? $_GET['precio'] : "1";
$imagen= isset($_GET['imagen']) ? $_GET['imagen'] : "1";


                
                $sentencia = "SELECT id_producto, nom_prod, precio, stock, cantidad 
                            FROM productos  
                                LEFT JOIN factura 
                                    ON productos.id_producto = factura.id_prod 
                            ORDER BY id_producto";

// 
                $resultado=Conectarse()->query($sentencia) or die (mysqli_error($conexion));
                while ($filas=$resultado->fetch_assoc()) {    
                echo "<tr>";
                echo "<td>";
                    echo  "<div class='id_producto' style=''>{$filas['id_producto']}</div>";
                echo "</td>";
                echo "<td>";
                    echo  "<div class='nom_prod'>{$filas['nom_prod']}</div>"; 
                echo "</td>";
                echo "<td>";
                    echo  "<div class='stock'>{$filas['stock']}</div>"; 
                echo "</td>";
                echo "<td>"; 
                    echo  "<div class='precio'>{$filas['precio']}</div>";
                if(!isset($cantidad)){
                    echo "<td>";
                             echo "<input type='text' name='cantidad' value='{$cantidad}' disabled class='form-control' />";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-success' disabled>";
                            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Agregado!";
                        echo "</button>";
                    echo "</td>";             
                }else{
                    echo "<td>";
                             echo "<input class='text-center' type='number' name='cantidad' value='1'/>";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-danger add-to-fact'>";
                            echo "<span class='glyphicon glyphicon-plus'>Agregar</span> ";
                        echo "</button>";
                    echo "</td>";
                }
            echo "</tr>";

                    
include 'footerFactura.php';
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

    <div id="divPiePagina"><?php include "footer.php";?> </div>
</body>
</html>

