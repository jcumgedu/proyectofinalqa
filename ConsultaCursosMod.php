<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['codigo_curso']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$codigo_curso = $_POST['codigo_curso'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select codigo_curso,nombre_curso,nota_minima  from alumnos.cursos where codigo_curso = '$codigo_curso'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El codigo de curso ingresado no existe");
	                window.location.href="ModificarCursos.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Actualizar curso</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tabla12.css" />
            		
            		
            		
            		
            	</head>
            	<body class="body1">
            		<center>
            			<br>
            			<img src="./Imagenes/cliente2.png" width="200px" height="140px">
						<h1>Actualizacion de  curso</h1>

						<div id="main-container">
						<form action="ActualizarCurso.php" method="post">
            			<table  cellspacing="10px" class="box">
							<thead>
							<tr>
							<th>Codigo Curso</th><th>Nombre Curso</th><th>Nota minima</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>

						
  							 <td><?php echo '<input size="20" type="text" name="codigo_curso" value="'.$resultSet['codigo_curso'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="nombre_curso" value="'.$resultSet['nombre_curso'].'">'; ?> </td>
						    <td><?php echo '<input size="20" type="text" name="nota_minima" value="'.$resultSet['nota_minima'].'">'; ?> </td>
						    
								
																
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