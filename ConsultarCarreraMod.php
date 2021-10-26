<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['cod_carrera']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$cod_carrera = $_POST['cod_carrera'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select codigo_carrera, nombre_carrera,Facultad  from alumnos.carrera where codigo_carrera = '$cod_carrera'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El carnet ingresado no existe");
	                window.location.href="ModificarCarrera.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Actualizar carrera</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tabla12.css" />
            		
            		
            		
            		
            	</head>
            	<body class="body1">
            		<center>
            			<br>
            			<img src="./Imagenes/cliente2.png" width="200px" height="140px">
						<h1>Actualizacion de  carrera</h1>

						<div id="main-container">
						<form action="ActualizarCarrera.php" method="post">
            			<table  cellspacing="10px" class="box">
							<thead>
							<tr>
							<th>Codigo Carrera</th><th>Nombre Carrera</th><th>Facultad</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>

						
  							 <td><?php echo '<input size="20" type="text" name="codigo_carrera" value="'.$resultSet['codigo_carrera'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="nombre_carrera" value="'.$resultSet['nombre_carrera'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="Facultad" value="'.$resultSet['Facultad'].'">'; ?> </td>
						    
								
																
							</tr>
							
							 
								
							</tr>
							<?php
								}
							?>



						</table>

						  <br>
						   <br>

							<tr>
							<td colspan="2" align="center">
	                			<input class="boton3"  type="submit" name="actualizar" value="actualizar">
	               			 </td>

	               			 </tr>

						</form>	
						</div>

						
						<br>
						<br>
						 


						<a href="MenuGestionCarreras.php">
						<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
							<div>
								<label>Regresar a menu gestion de carreras</label>
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