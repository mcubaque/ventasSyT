<?php 


 ?>


<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="contacto Aldami">
    <meta name="author" content="Marco Cubaque">
    <title>Contacto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="css/shop-homepage.css" rel="stylesheet">
    

  </head>

  <body>

<div class="container-fluid"> 
  <div class="display-4">
   <a href="https://www.facebook.com/Aldami-Jeans-2000259026876609/"><i class="fab fa-facebook"></i></a>
   <a href="http://twitter.com"><i class="fab fa-twitter-square"></i></a>
   <a href="http://pinterest.com"><i class="fab fa-pinterest-square"></i></a>
   <a href="http://instagram.com"><i class="fab fa-instagram"></i></a>
   <a href="http://youtube.com"><i class="fab fa-youtube-square"></i></a>
  </div>
</div>

<!-- Formulario contacto -->
  <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3">
        <h2>Contactenos</h2>
        <p>
            Envíenos su mensaje y nos pondremos en contacto con usted cuanto antes.
        </p>
        <form role="form" method="post" action="../controlador/validarContacto.php" id="reused_form">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"  maxlength="50">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="text" class="form-control" id="email" name="email"
                    maxlength="50">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Telefono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required
                    maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name">
                        Mensaje:</label>
                    <textarea class="form-control" type="textarea" id="mensaje" name="mensaje" placeholder="Su mensaje aqui" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-danger btn-block" id="btnContactUs">Enviar </button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Su mensaje ha sido enviado con exito. En breve nos pondremos en contacto con usted!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Lo sentimos. Ha ocurrido un error en el envio del formulario.

        </div>
    </div>
</div>

    <!-- Footer -->
<div id="divPiePagina"><?php include "footer.php";?> </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

  </body>

</html>
