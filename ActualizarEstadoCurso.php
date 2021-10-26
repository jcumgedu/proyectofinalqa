<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizarestado"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigo_curso']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $codigo_curso = $_POST['codigo_curso'];
           
            $idEstado =  $_POST['estado'];
            //Definimos la consulta sql
            $sql = "update alumnos.cursos SET   id_estado = '$idEstado' 
            where codigo_curso = '$codigo_curso';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Curso actualizado correctamente");
                    window.location.href="BajaCursos.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar el curso");
                    window.location.href="BajaCursos.php";
                    </script>';
            }


        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="BajaCursos.php";
                    </script>';
        }
    }
?>
