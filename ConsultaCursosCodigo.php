<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONSULTA DE CURSOS</title>
	 <link rel="stylesheet" type="text/css" href="Estilos/styles.css" />
	 <link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
</head>
<body class="body3">
	<center>
		<img src="./Imagenes/cursos.png" width="250px" height="180px">
		<h1 class="h1_c">CONSULTA DE CURSOS POR CARNET</h1>
		<form action="ConsultarCurso.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px" border="1">
	            <tr>
	            	<td>
	            		<label class="label_style">CODIGO CURSO</label>
	                </td>
	                <td>
	                    <input type="text" name="codigo_curso" width="30">
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                	<input class="boton3" type="submit" name="consultar" value="Consultar">
	                </td>
	            </tr>
        	</table>
		</form>

		<a href="MenuGestionCursos.php">
			<img class="zoom" src="imagenes/iconhome.png" width="50px" height="50px">
		<div>
			<label>Regresar a menu gestion de cursos</label>
		</div>
	   	</a>

	</center>
</body>
</html>