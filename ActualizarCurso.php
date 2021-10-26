<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizar"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigo_curso']) >= 1 && strlen($_POST['nombre_curso']) >= 1 && strlen($_POST['nota_minima']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $codigo_curso = $_POST['codigo_curso'];
            $nombre_curso = $_POST['nombre_curso'];
            $nota_minima = $_POST['nota_minima'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "update alumnos.cursos SET  nombre_curso = '$nombre_curso' , nota_minima ='$nota_minima' where codigo_curso = '$codigo_curso';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("curso actualizado correctamente");
                    window.location.href="ModificarCursos.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar el curso");
                    window.location.href="ModificarCursos.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="ModificarCursos.php";
                    </script>';
        }
    }
?>
