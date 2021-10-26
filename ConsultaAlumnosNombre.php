<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONSULTA DE CLIENTE</title>
	 <link rel="stylesheet" type="text/css" href="Estilos/styles.css" />
	 <link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
</head>
<body class="body3">
	<center>
		<img src="./Imagenes/estudiante.png" width="250px" height="180px">
		<h1 class="h1_c">CONSULTA DE ALUMNO POR NOMBRE</h1>
		<form action="generarConsultaPdfNombre.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px" border="1">
	            <tr>
	            	<td>
	            		<label class="label_style">NOMBRE</label>
	                </td>
	                <td>
	                    <input type="text" name="nombre" width="30">
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                	<input class="boton3" type="submit" name="consultar" value="Consultar">
	                </td>
	            </tr>
        	</table>
		</form>

		<a href="menuPrincipal.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu principal</label>
		</div>
	   	</a>

	</center>
</body>
</html>