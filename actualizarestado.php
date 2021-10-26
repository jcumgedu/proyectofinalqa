<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizarestado"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['carnet']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $carnet = $_POST['carnet'];
           
            $idEstado =  $_POST['estado'];
            //Definimos la consulta sql
            $sql = "update alumnos.alumnos SET   id_estado = '$idEstado' 
            where carnet = '$carnet';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("alumno actualizado correctamente");
                    window.location.href="baja.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar el alumno");
                    window.location.href="baja.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="baja.php";
                    </script>';
        }
    }
?>
