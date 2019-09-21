<?php 
extract ($_POST);
if (!isset($_POST['x']))
	$x=0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio de Sesion</title>	
</head>
<body>
	 <?php include "Vista/login.php" ?> 
</body>
</html>