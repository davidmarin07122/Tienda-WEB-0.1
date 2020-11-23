<?php

	include("Basedatos.php");

	if (isset($_POST["botonEnvio"])) {


	$nombre1= $_POST["nombreproducto"];
	$marca1= $_POST["marcaproducto"];
	$precio1= $_POST["precio"];
	$descripcion1= $_POST["descripcion"];
	$imagen=$_POST["imagen"];


	
	$transaccion = new Basedatospr();

	$consultaSQL="INSERT INTO producto(nombre, marca, precio, descripcion,imagen) VALUES ('$nombre1','$marca1','$precio1','$descripcion1','$imagen')";

	$transaccion->agregarDatos($consultaSQL);

	header("location:index.php");
	

	}




?>