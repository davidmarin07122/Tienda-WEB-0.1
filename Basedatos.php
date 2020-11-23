<?php


class Basedatospr
{

	public $usuarioBD = "root";
	public $passwordBD ="";
	
	

	public function conectarBD1()
	{

		

		try {

		$datosBD = "mysql: host=localhost;dbname=productos1";

		$conexionBD = new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
		return ($conexionBD);

		} catch (PDOException $error) {
			echo ($error->getMessage());
		}

	}

	public function agregarDatos($consultaSQL){

		//1. Se debe estableser una conexion ala BD
		$conexionBD = $this->conectarBD1();

		//2. Preparar la consuta para insertar datos
		$consultaAgregarDatos=$conexionBD->prepare($consultaSQL);

		//3. Ejecutar la consulta
		$resultado = $consultaAgregarDatos ->execute();

		//4 . validar la operacion 
		if ($resultado) {

			echo "Exito al insertar los datos";

		}else{

			echo "ERROR";
		}
	}

	public function consultarDatos($consultaSQL){

		//1. Se debe estableser una conexion ala BD
			$conexionBD = $this->conectarBD1();

			//2. Preparar la consuta para insertar datos
			$consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

			//3. Indicar el metodo para traer los datos
			$consultaBuscarDatos-> setFetchMode(PDO::FETCH_ASSOC);

			//4. Ejecutar la consulta
			$resultado = $consultaBuscarDatos ->execute();

			//5. RETORNAR LOS DATOS CONSULTADOS
			return($consultaBuscarDatos->fetchAll());
	}

	public function eliminarDatos($consultaSQL){

		$conexionBD = $this->conectarBD1();

		$consultaEliminarDatos=$conexionBD->prepare($consultaSQL);

		$resultado= $consultaEliminarDatos->execute();

		if ($resultado) {
		echo "exito al Eliminar los Datos";

		}else
		
		echo "ERROR";
	}

	public function editarDatos($consultaSQL){

		$conexionBD = $this->conectarBD1();

		//2. Preparar la consuta para insertar datos
		$consultaEditarDatos=$conexionBD->prepare($consultaSQL);

		//3. Ejecutar la consulta
		$resultado = $consultaEditarDatos->execute();

		//4 . validar la operacion 
		if ($resultado) {

			echo "Exito al Editar los datos";

		}else{

			echo "ERROR";
		}
	}


}
