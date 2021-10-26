<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="Estilos/styles.css" />
     <link rel="stylesheet" type="text/css" href="Estilos/estilos2.css" />
</head>
<body class="body5">
	<center>
		<form action="validarLogin.php" method="post">
			<h1 class="h1_style">BIENVENIDO AL SISTEMA DE GESTION ACADEMICAS</h1>
            <img src="./Imagenes/graduado.png" class="img_style">
                <table class="table_style" cellspacing="20px">
                    <tr>
                        <td>
                            <label class="label_style">USUARIO</label>
                        </td>
                        <td>
                            <input class="input_style" type="text" name="usuario" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label_style">PASSWORD</label>
                        </td>
                        <td>
                            <input class="input_style" type="password" name="password" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input class="boton3" type="submit" name="ingreso" value="Ingresar">
                        </td>
                    </tr>
                </table>
            </form>
	</center>
</body>
</html>