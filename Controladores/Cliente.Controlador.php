<?php 

class ClienteControlador{
	#--------------------------------------------------
	/*		Mostrar tabla clientes 	controlador	*/
	#--------------------------------------------------
	public function mostrarClientes(){
		$respuesta=ClienteModelo::mostrarClientesModelo("clientes");
		#test var_dump($respuesta);
		foreach ($respuesta as $value) {
			echo '
				<tr>
					<td>
<a href="index.php?action=detalleCliente&idCliMstrDtos='.$value["id_cliente"].'" class="btn btn-primary btn-sm">PROFILE</a>
<button class="btn btn-warning btn-sm">EDIT</button>
<button class="btn btn-danger btn-sm">DEL</button>
					</td>
					<td>'.$value["nombre_empresa"].'</td>
				    <td>'.$value["nombre_cliente"].'</td>
				    <td>'.$value["direccion"].'</td>
				    <td>'.$value["numero_lic_emp"].'</td>
				    <td>'.$value["tel1"].'</td>
				    <td>'.$value["tel2"].'</td>
				    <td>'.$value["email1"].'</td>
				    <td>'.$value["email2"].'</td>
				    <td>'.$value["id_cgpe"].'</td>
				    <td>'.$value["ifta_number"].'</td>
				    <td>'.$value["tax_id_number_ein"].'</td>
				    <td>'.$value["ny_permit"].'</td>
				    <td>'.$value["nm_permit"].'</td>
				    <td>'.$value["ky_permit"].'</td>
				</tr>
				';						
		}
	}

	#--------------------------------------------------
	/*		Mostrar datos en el tap del perfil del cliente	*/
	#--------------------------------------------------
	public function mostrarDatosTapPerfilCliente(){
		if (isset($_GET["idCliMstrDtos"])) {
			$idMstrDtosCtr=$_GET["idCliMstrDtos"];
			#echo $idMstrDtosCtr;
			$respuesta2=ClienteModelo::mostrarDatosPerfilClienteModelo("clientes",$idMstrDtosCtr);
			#var_dump($respuesta2);
			echo('
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<label>Address:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["direccion"].'" disabled><br>

			<label>LIC EMP #:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["numero_lic_emp"].'" disabled><br>

			<label>PHONE 1:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["tel1"].'" disabled><br>
		</div>
		<div class="col">
			<label>PHONE 2 :</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["tel2"].'" disabled><br>

			<label>E-MAIL 1:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["email1"].'" disabled><br>

			<label>E-MAIL 2:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["email2"].'" disabled><br>
		</div>
		<div class="col">
			<label>ID CGPE:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["id_cgpe"].'" disabled><br>

			<label># IFTA:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["ifta_number"].'" disabled><br>

			<label>TAX ID:</label>
			<input type="" name="" class="form-control" value="'.$respuesta2["tax_id_number_ein"].'" disabled><br>
		</div>
	</div>
</div>
			');
			

		}
	}

	#--------------------------------------------------
	/*		Mostrar datos en el tap izq de perfil del cliente	*/
	#--------------------------------------------------
	public function mostrarDatosPerfilCliente(){
		if (isset($_GET["idCliMstrDtos"])) {
			$idMstrDtosCtr=$_GET["idCliMstrDtos"];
			#echo $idMstrDtosCtr;
			$respuesta2=ClienteModelo::mostrarDatosPerfilClienteModelo("clientes",$idMstrDtosCtr);
			#var_dump($respuesta2);
			echo('
			<h4 class="profile-username text-center">'.$respuesta2["nombre_empresa"].'</h4>
            <p class="text-muted text-center">'.$respuesta2["nombre_cliente"].'</p>
            <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
			');
		}
	}

}#cierre de la clase

 ?>