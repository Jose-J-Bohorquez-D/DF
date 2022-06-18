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
						<a href="index.php?action=detalleCliente" class="btn btn-primary btn-sm">Profile</a>
						<button class="btn btn-warning btn-sm">Edit</button>
						<button class="btn btn-danger btn-sm">Elim</button>
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
}

 ?>