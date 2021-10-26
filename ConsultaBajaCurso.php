<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['codigo_curso']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$codigo_curso = $_POST['codigo_curso'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select codigo_curso, id_estado  from alumnos.cursos where codigo_curso = '$codigo_curso'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El codigo de carrera ingresado no existe");
	                window.location.href="BajaCursos.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Dar de baja un curso</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tablamod1.css"/>
            		
            		
            		
            	</head>
            	<body class="body7">
            		<center>
            			<img src="./Imagenes/eliminar.png" width="200px" height="175px">
						<h1>Baja de curso</h1>

						<div id="main-container">
						<form action="ActualizarEstadoCurso.php" method="post">
            			<table cellspacing="10px" style="margin-top: 10px" border="2" style="margin-right:  10px" >
							<thead>
							<tr>
							<th>codigo_curso</th><th>estado</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>

						
  							 <td><?php echo '<input size="20" type="text" name="codigo_curso" value="'.$resultSet['codigo_curso'].'">'; ?> </td>
						    <td><?php echo '<select name="estado">
  											<option value="1">activo</option>
  											<option value="0" selected>inactivo</option>
 											</select>'; ?>  
							</td>

						    
								
																
							</tr>
							
							 
								
							
							<?php
								}
							?>



						</table>
							<tr>
							<td colspan="2" align="center">
	                			<input class="boton3"  type="submit" name="actualizarestado" value="actualizar">
	               			 </td>

	               			 </tr>

						</form>	
						</div>

						


						<a href="menuPrincipal.php">
						<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px" >
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