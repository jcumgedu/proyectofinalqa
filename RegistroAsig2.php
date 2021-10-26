<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['id_asigdetalle']) >= 1 && strlen($_POST['cod_asignacion']) >= 1 && strlen($_POST['codigo_curso']) >= 1 && strlen($_POST['descripcion']) >= 1 ){
            //Asignamos los datos del formulario a variables locales
            $id_asigdetalle = $_POST['id_asigdetalle'];
            $cod_asignacion = $_POST['cod_asignacion'];
            $codigo_curso = $_POST['codigo_curso'];
            $descripcion = $_POST['descripcion'];
        
            //Definimos la consulta sql
            $sql = "insert into alumnos.asignacion_detalle (id_asigdetalle, cod_asignacion, codigo_curso,descripcion)
                    values ('$id_asigdetalle', '$cod_asignacion', '$codigo_curso','$descripcion')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Asignacion  registrado correctamente");
                    window.location.href="FormularioAsignacion2.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar Asignacion");
                    window.location.href="FormularioAsignacion2.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="FormularioAsignacion2.php";
                    </script>';
        }
    }
?>
