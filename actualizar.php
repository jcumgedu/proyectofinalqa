<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["actualizar"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['carnet']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $carnet = $_POST['carnet'];
            $nombreAlumno = $_POST['nombre'];
            $apellidoAlumno = $_POST['apellido'];
            $direccionAlumno = $_POST['direccion'];
            $telefonoAlumno = $_POST['telefono'];
            $correoAlumno = $_POST['correo'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "update alumnos.alumnos SET  nombre = '$nombreAlumno' , apellido ='$apellidoAlumno', direccion = '$direccionAlumno', telefono = '$telefonoAlumno', correo ='$correoAlumno' where carnet = '$carnet';";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("alumno actualizado correctamente");
                    window.location.href="modificar.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al actualizar el alumno");
                    window.location.href="modificar.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="modificar.php";
                    </script>';
        }
    }
?>
