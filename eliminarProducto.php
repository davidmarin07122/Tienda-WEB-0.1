<?php 

//1. INCLUIR EL ARCHIVO BASEDATOS
include("Basedatos.php");

//2. RECIBA EL ID A ELIMINAR
$id=$_GET["id"];

//3. crear un objeto (sacar copia) de la clase baseDtos
$transaccion= new Basedatospr();

//4. crear una comsulta SQL para eliminar datos
$consultaSQL="DELETE FROM producto WHERE idProducto='$id'";


//5. ejecute el metodo eliminarusuario
$transaccion->eliminarDatos($consultaSQL);

header("location:listadoproductos.php");



 ?>