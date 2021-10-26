<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizarestado"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigo_carrera']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $codigo_carrera = $_POST['codigo_carrera'];
           
            $idEstado =  $_POST['estado'];
            //Definimos la consulta sql
            $sql = "update alumnos.carrera SET   id_estado = '$idEstado' 
            where codigo_carrera = '$codigo_carrera';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("carrera actualizado correctamente");
                    window.location.href="MenuGestionCarreras.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar la carrera");
                    window.location.href="MenuGestionCarreras.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="MenuGestionCarreras.php";
                    </script>';
        }
    }
?>
