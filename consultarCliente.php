<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['nit']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$nit = $_POST['nit'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select nit_cliente, nombre, apellido, direccion, telefono, correo from almacen.cliente where nit_cliente = '$nit'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El nit ingresado no existe");
	                window.location.href="consultaCliente.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>CONSULTA DE CLIENTES</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tabla.css" />
            	</head>
            	<body class="body4">
            		<center>
            			<img src="./Imagenes/cliente.png" width="500px" height="175px">
						<h1>CONSULTA DE CLIENTE</h1>
						<div id="main-container">
            			<table cellspacing="10px" style="margin-top: 20px" border="1">
							<thead>
							<tr>
							<th>Nit</th><th>Nombre</th><th>Apellido</th><th>direccion</th><th>telefono</th><th>correo</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>
								<td><?php echo $resultSet['nit_cliente'] ?></td>
								<td><?php echo $resultSet['nombre'] ?></td>
								<td><?php echo $resultSet['apellido'] ?></td>
								<td><?php echo $resultSet['direccion'] ?></td>
								<td><?php echo $resultSet['telefono'] ?></td>
								<td><?php echo $resultSet['correo'] ?></td>
							</tr>
							<?php
								}
							?>
						</table>
						</div>


						<a href="menuPrincipal.php">
						<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
							<div>
								<label>Regresar a menu principal</label>
							</div>
	   					</a>
            		</center>
            	</body>
            	</html>
            	<?php
            }
        }
    }
?>