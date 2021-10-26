<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['codigo_curso']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$codigo_curso = $_POST['codigo_curso'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select codigo_curso, codigo_carrera, nombre_curso, nota_minima from alumnos.cursos where codigo_curso = '$codigo_curso'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El curso ingresado no existe");
	                window.location.href="ConsultaCursosCodigo.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>CONSULTA DE CURSO</title>
            		<link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
            		<link rel="stylesheet" type="text/css" href="Estilos/tabla13.css" />
            		
            	</head>
            	<body class="body4">
            		<center>
            			<img src="./Imagenes/cursos.png" width="300px" height="200px">
						<h1>CONSULTA DE CURSO</h1>
						<div id="main-container">
            			<table cellspacing="10px" style="margin-top: 20px" border="1">
							<thead>
							<tr>
							<th>CODIGO</th><th>CODIGO CARRERA</th><th>NOMBRE CURSO</th><th>Nota Minima</th>
							</tr>
							</thead>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>
								<td><?php echo $resultSet['codigo_curso'] ?></td>
								<td><?php echo $resultSet['codigo_carrera'] ?></td>
								<td><?php echo $resultSet['nombre_curso'] ?></td>
								<td><?php echo $resultSet['nota_minima'] ?></td>
								
							</tr>
							<?php
								}
							?>
						</table>
						</div>


						<a href="MenuGestionCursos.php">
						<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
							<div>
								<label>Regresar a menu gestion de cursos</label>
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