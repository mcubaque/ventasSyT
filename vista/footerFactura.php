<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>footerFactura</title>
</head>
<body>
    
<!-- /container -->
 
<!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
<!-- bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.js"></script>
 
<script>
$(document).ready(function(){
    $('.add-to-fact').click(function(){
        var id_producto = $(this).closest('tr').find('.id_producto').text();
        var nom_prod = $(this).closest('tr').find('.nom_prod').text();
        var cantidad = $(this).closest('tr').find('input').val();
        window.location.href = "../controlador/agregarFactura.php?id_producto=" + id_producto + "&nom_prod=" + nom_prod + "&cantidad=" + cantidad;
    });

     $('.add-to-encabezado').click(function(){
        var id_producto = $(this).closest('tr').find('.id_producto').text();
        var nom_prod = $(this).closest('tr').find('.nom_prod').text();
        var cantidad = $(this).closest('tr').find('input').val();
        window.location.href = "../controlador/agregarFactura.php?id_producto=" + id_producto + "&nom_prod=" + nom_prod + "&cantidad=" + cantidad;
    });
     
    $('.update-quantity').click(function(){
        var id_producto = $(this).closest('tr').find('.id_producto').text();
        var nom_prod = $(this).closest('tr').find('.nom_prod').text();
        var cantidad = $(this).closest('tr').find('input').val();
        window.location.href = "../controlador/actualizarFactura.php?id_producto=" + id_producto + "&nom_prod=" + nom_prod + "&cantidad=" + cantidad;
    });
});
</script>
 
</body>
</html>