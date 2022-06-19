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
	/*		Mostrar datos tabla clientes Modelo	*/
	#--------------------------------------------------
	public static function mostrarDatosPerfilClienteModelo($tabla,$idMstrDtosMdl){
		$stmt=ConexionBD::conectarbd()->prepare("SELECT * FROM $tabla WHERE id_cliente=:id_cli");
		$stmt->bindParam("id_cli",$idMstrDtosMdl);
		$stmt->execute();
		return $stmt->fetch();
	}

	#--------------------------------------------------
	/*		Mostrar datos de los vehiculos filtrados por cliente	*/
	#--------------------------------------------------
	public static function mostrarDatosTapVehiculosClienteModelo($tabla,$nombreEmpresa){
		$stmt=ConexionBD::conectarbd()->prepare("SELECT * FROM $tabla WHERE asignado_empresa=:nombre_empresa");
		$stmt->bindParam("nombre_empresa",$nombreEmpresa);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}#cirre de la clase

	

 ?>