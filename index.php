<?php

require_once("Controladores/Mvc.Controlador.php");
require_once("Controladores/Cliente.Controlador.php");


require_once("Modelos/Mvc.Modelo.php");
require_once("Modelos/Cliente.Modelo.php");


$Mvc = new MvcControlador();
$Mvc -> llamadoPlantillaControlador();

 ?>
