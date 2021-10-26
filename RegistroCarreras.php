<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['codigocarrera']) >= 1 && strlen($_POST['nombrecarrera']) >= 1 && strlen($_POST['facultad']) >= 1 ){
            //Asignamos los datos del formulario a variables locales
            $codigocarrera = $_POST['codigocarrera'];
            $nombrecarrera = $_POST['nombrecarrera'];
            $facultad = $_POST['facultad'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "insert into alumnos.carrera (codigo_carrera, nombre_carrera, Facultad,id_estado)
                    values ('$codigocarrera', '$nombrecarrera', '$facultad','$idEstado')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Carrera registrado correctamente");
                    window.location.href="FormularioCarreras.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar Carrera");
                    window.location.href="FormularioCarreras.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="FormularioCarreras.php";
                    </script>';
        }
    }
?>
