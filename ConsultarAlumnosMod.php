<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['carnet']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$carnet = $_POST['carnet'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select carnet, nombre, apellido, direccion, telefono, correo from alumnos.alumnos where carnet = '$carnet'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El carnet ingresado no existe");
	                window.location.href="modificar.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Actualizar Alumno</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tablamodc.css" />
            		
            		
            		
            	</head>
            	<body class="body1">
            		<center>
            			<br>
            			<img src="./Imagenes/cliente2.png" width="200px" height="140px">
						<h1>Actualizacion de  alumnos</h1>

						<div id="main-container">
						<form action="actualizar.php" method="post">
            			<table cellspacing="10px" style="margin-top: 10px" border="2" style="margin-right:  10px" >
							<thead>
							<tr>
							<th>Carnet</th><th>Nombre</th><th>Apellido</th><th>direccion</th><th>telefono</th><th>correo</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>

						
  							 <td><?php echo '<input size="20" type="text" name="carnet" value="'.$resultSet['carnet'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="nombre" value="'.$resultSet['nombre'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="apellido" value="'.$resultSet['apellido'].'">'; ?> </td>
						    <td><?php echo '<input  size="20" type="text" name="direccion" value="'.$resultSet['direccion'].'">'; ?> </td>
						    <td><?php echo '<input  size="20" type="text" name="telefono" value="'.$resultSet['telefono'].'">'; ?> </td>
						    <td><?php echo '<input  size="20" type="email" name="correo" value="'.$resultSet['correo'].'">'; ?> </td>
								
																
							</tr>
							
							 
								
							</tr>
							<?php
								}
							?>



						</table>
							<tr>
							<td colspan="2" align="center">
	                			<input class="boton3"  type="submit" name="actualizar" value="actualizar">
	               			 </td>

	               			 </tr>

						</form>	
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