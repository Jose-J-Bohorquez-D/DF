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

	#--------------------------------------------------
	/*		Mostrar tabla clientes Modelo	*/
	#--------------------------------------------------
	public static function mostrarDatosPerfilClienteModelo($tabla,$idMstrDtosMdl){
		$stmt=ConexionBD::conectarbd()->prepare("SELECT * FROM $tabla WHERE id_cliente=:id_cli");
		$stmt->bindParam("id_cli",$idMstrDtosMdl);
		$stmt->execute();
		return $stmt->fetch();
	}

}#cirre de la clase

	

 ?>