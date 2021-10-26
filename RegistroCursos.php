<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigocurso']) >= 1 && strlen($_POST['codigocarrera']) >= 1 && strlen($_POST['nombrecurso']) >= 1 ){
            //Asignamos los datos del formulario a variables locales
            $codigocurso = $_POST['codigocurso'];
            $codigocarrera = $_POST['codigocarrera'];
            $nombrecurso = $_POST['nombrecurso'];
            $notaminima = 61;
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "insert into alumnos.cursos (codigo_curso, codigo_carrera, nombre_curso,nota_minima,id_estado)
                    values ('$codigocurso', '$codigocarrera', '$nombrecurso','$notaminima','$idEstado')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Curso registrado correctamente");
                    window.location.href="FormularioCursos.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar curso");
                    window.location.href="FormularioCursos.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="FormularioCursos.php";
                    </script>';
        }
    }
?>
