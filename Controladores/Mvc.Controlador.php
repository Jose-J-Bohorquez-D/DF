<?php

class MvcControlador{

	#--------------------------------------------------
	/*		Llamado a la plantilla 		*/
	#--------------------------------------------------
	public function llamadoPlantillaControlador(){
		require_once("Vistas/Plantilla.php");
	}

	#--------------------------------------------------
	/*		interaccion con las paginas 		*/
	#--------------------------------------------------
	public function enlacesPaginasControlador(){
		if (isset($_GET["action"])) {
			$enlacesControlador = $_GET["action"];
		}else{
			$enlacesControlador = "inicio";
		}
		#echo $enlacesControlador;
		$respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);
		include $respuesta;
	}
}

 ?>
