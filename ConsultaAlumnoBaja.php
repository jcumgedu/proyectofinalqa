<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['carnet']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$carnet = $_POST['carnet'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select carnet, id_estado  from alumnos.alumnos where carnet = '$carnet'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El carnet ingresado no existe");
	                window.location.href="baja.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Dar de baja a alumno</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tablamod1.css"/>
            		
            		
            		
            	</head>
            	<body class="body7">
            		<center>
            			<img src="./Imagenes/eliminar.png" width="200px" height="175px">
						<h1>Baja de alumno</h1>

						<div id="main-container">
						<form action="actualizarestado.php" method="post">
            			<table cellspacing="10px" style="margin-top: 10px" border="2" style="margin-right:  10px" >
							<thead>
							<tr>
							<th>Nit</th><th>estado</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>

						
  							 <td><?php echo '<input size="20" type="text" name="carnet" value="'.$resultSet['carnet'].'">'; ?> </td>
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