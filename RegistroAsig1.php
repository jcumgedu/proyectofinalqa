<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['cod_asignacion']) >= 1 && strlen($_POST['carnet']) >= 1 && strlen($_POST['descripcion']) >= 1 ){
            //Asignamos los datos del formulario a variables locales
            $cod_asignacion = $_POST['cod_asignacion'];
            $carnet = $_POST['carnet'];
            $descripcion = $_POST['descripcion'];

            //Definimos la consulta sql
            $sql = "insert into alumnos.asignaciones (cod_asignacion, carnet, descripcion)
                    values ('$cod_asignacion', '$carnet', '$descripcion')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Asignacion registrado correctamente");
                    window.location.href="FormularioAsignacion1.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar asignacion");
                    window.location.href="FormularioAsignacion1.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="FormularioAsignacion1.php";
                    </script>';
        }
    }
?>
