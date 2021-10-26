<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['carnet']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $carnetAlumno = $_POST['carnet'];
            $nombreAlumno = $_POST['nombre'];
            $apellidoAlumno = $_POST['apellido'];
            $direccionAlumno = $_POST['direccion'];
            $telefonoAlumno = $_POST['telefono'];
            $correoAlumno = $_POST['correo'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "insert into alumnos.alumnos (carnet, nombre, apellido, direccion, telefono, correo, id_estado)
                    values ('$carnetAlumno', '$nombreAlumno', '$apellidoAlumno', '$direccionAlumno', '$telefonoAlumno', '$correoAlumno', '$idEstado')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Alumno registrado correctamente");
                    window.location.href="formulario.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar Alumno");
                    window.location.href="formulario.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="formulario.php";
                    </script>';
        }
    }
?>
