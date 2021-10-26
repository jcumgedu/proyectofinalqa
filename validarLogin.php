<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["ingreso"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1){
        	//Asignamos los datos del formulario a variables locales
            $user = $_POST['usuario'];
            $pass = $_POST['password'];
            //Definimos la consulta sql y la ejecutamos
            $sql = "select login_name, id_estado, id_rol from almacen.usuario where login_name = '$user' and password = '$pass'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){ 
				echo'<script type="text/javascript">
					alert("Usuario y/o contraseña incorrectos");
	                window.location.href="login.php";
	                </script>';
            } else {
            	$resultSet = mysqli_fetch_array($resultado);
	            $idEstado = $resultSet['id_estado'];
	            $idRol = $resultSet['id_rol'];
	            if($idEstado == 1 && $idRol == 1){
	            	echo'<script type="text/javascript">
	                    window.location.href="menuPrincipal.php";
	                    </script>';
            	}
            }
        } else {
        	echo'<script type="text/javascript">
                alert("Debe llenar todos los campos");
                window.location.href="login.php";
                </script>';
        }
    }
?>