<?php 

class EnlacesPaginas{
	#--------------------------------------------------
	/*		interaccion con las paginas Modelo		*/
	#--------------------------------------------------
	public static function enlacesPaginasModelo($enlaceMdl){

		if ($enlaceMdl == "clientes" ||
			$enlaceMdl == "servicios" ||
			$enlaceMdl == "usuarios" ||
			$enlaceMdl == "vehiculos" ||
			$enlaceMdl == "reportes" ||
			$enlaceMdl == "tablaGeneralServicios" ) {

			$pagina="Vistas/Paginas/".$enlaceMdl.".php";

		}elseif ($enlaceMdl == "inicio") {
			$pagina="Vistas/Paginas/inicio.php";
		}else{
			$pagina="Vistas/Paginas/inicio.php";
		}

		return $pagina;
	}
}

 ?>