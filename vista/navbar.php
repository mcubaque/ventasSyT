<!DOCTYPE html>
<html lang="es">
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ventas SyT">
    <meta name="author" content="mcubaque">
    <title>Navbar SyT</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="css/shop-homepage.css" rel="stylesheet">
   <style>
     span{
      color: white;
      font-family: verdana;
      font-size: 15px;
     }
   </style>
</head>

<body>
	<!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <a class="navbar-brand" href="ventas.php">Inicio</a>
        <a class="navbar-brand" href="../vista/logout.php">Salir</a>
      <div class="container">
        <div class="col-md-4 logo">
        <span class="lema"> 
          <span class="navbar-brand glyphicon glyphicon-user"><span class="">Bienvenido:</span><?php echo $_SESSION['user']?></
          <span>
        </span>

      </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="contactI.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</body>
</html>