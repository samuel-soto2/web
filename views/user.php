<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../includes/login.php");
		die();
	}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
<link rel="stylesheet" href="../css/es.css">
    <title>Usuarios</title>
</head>

<div class="container is-fluid">
<div class="col-xs-12">
		<h1>Lista de usuarios</h1>
    <br>
		<div>
			<a class="btn btn-success" href="../index.php">Nuevo usuario 
      <i class="fa fa-plus"></i>
       </a>
       <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Log Out <i class="fa fa-power-off" aria-hidden="true"></i></a>
		</div>
        <br>




           <br>


			</form>
        
        
 
      <table class="table table-striped table-dark " id= "table_id">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

