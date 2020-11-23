<?php  

include("Basedatos.php");

if (isset($_POST["botonEditar"])) {


	$nombre1=$_POST["nombreEditar"];
	$descripcion1=$_POST["descripcionEditar"];
	$precio1=$_POST["precioEditar"];
	$imagen1=$_POST["imagenEditar"];

	$id=$_GET["id"];


	$transaccion= new Basedatospr();


	$consultaSQL="UPDATE producto SET nombre='$nombre1',descripcion='$descripcion1',precio='$precio1',imagen='$imagen1' WHERE idProducto='$id'";


	$transaccion->editarDatos($consultaSQL);

	header("location:listadoproductos.php");




}