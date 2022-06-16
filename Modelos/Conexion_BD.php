<?php 


class ConexionBD{
	#--------------------------------------------------
	/*		interaccion con las paginas 		*/
	#--------------------------------------------------
	public static function conectarbd(){
		$dtsCon=new PDO("mysql:host=localhost;dbname=trucks2022","root","");
		#var_dump($dtsCon);
		return $dtsCon;
	} 
}


#test de la conexion 
#$c=new ConexionBD;
#$c->conectarbd();

 ?>