<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizar"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigo_carrera']) >= 1 && strlen($_POST['nombre_carrera']) >= 1 && strlen($_POST['Facultad']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $codigo_carrera = $_POST['codigo_carrera'];
            $nombre_carrera = $_POST['nombre_carrera'];
            $Facultad = $_POST['Facultad'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "update alumnos.carrera SET  nombre_carrera = '$nombre_carrera' , Facultad ='$Facultad' where codigo_carrera = '$codigo_carrera';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Carrera actualizada correctamente");
                    window.location.href="ModificarCarrera.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar la carrera");
                    window.location.href="ModificarCarrera.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="ModificarCarrera.php";
                    </script>';
        }
    }
?>
