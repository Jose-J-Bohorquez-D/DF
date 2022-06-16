<?php 

require_once("Conexion_BD.php");

class ClienteModelo extends ConexionBD{
	#--------------------------------------------------
	/*		Mostrar tabla clientes Modelo	*/
	#--------------------------------------------------
	public static function mostrarClientesModelo($tabla){
		$stmt=ConexionBD::conectarbd()->prepare("SELECT * FROM $tabla");
		if ($stmt->execute()) {
			return $stmt->fetchAll();
		}else{
			return "error al consultar";
		}
	}
}

 ?>