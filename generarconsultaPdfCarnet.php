<?php
	require("conexion.php");
	require("pdf.php");

	if(isset($_POST['consultar'])){
		if(strlen($_POST['carnet']) > 1){
			$carnet = $_POST['carnet'];
			// Construcción del archivo pdf
			$pdf = new PDF(); // Instanciamos la clase pdf
			$pdf -> AddPage(); // Agregamos una pagina en blanco
			$pdf -> AliasNbPages(); // Agregamos el numero de pagina
			$pdf -> SetFont('Arial', '', 10); // Definimos el tipo de fuente y el tamaño
			$pdf -> Encabezado(25, 10, 'CARNET', 1, 0, 'C', 0);
			$pdf -> Encabezado(30, 10, 'NOMBRE', 1, 0, 'C', 0);
			$pdf -> Encabezado(30, 10, 'APELLIDO', 1, 0, 'C', 0);
			$pdf -> Encabezado(70, 10, 'DIRECCION', 1, 0, 'C', 0);
			$pdf -> Encabezado(30, 10, 'ESTADO', 1, 0, 'C', 0);
			$pdf -> Ln(); // Salto de línea
			$consulta = "select carnet, nombre, apellido, direccion, telefono, id_estado, (case when id_estado = 1 then 'activo' when id_estado = 0 then 'inactivo' END) AS id_estado from alumnos.alumnos where carnet =  '$carnet'";
			$resultado = mysqli_query($conexion, $consulta);
			while($resultSet = mysqli_fetch_array($resultado)){
				$pdf -> Cell(25, 10, $resultSet['carnet'], 1, 0, 'C', 0);
				$pdf -> Cell(30, 10, $resultSet['nombre'], 1, 0, 'C', 0);
				$pdf -> Cell(30, 10, $resultSet['apellido'], 1, 0, 'C', 0);
				$pdf -> Cell(70, 10, $resultSet['direccion'], 1, 0, 'C', 0);
				$pdf -> Cell(30, 10, $resultSet['id_estado'], 1, 1, 'C', 0);
			}
			$pdf -> Output(); // Exportamos el pdf
		} else{
			echo'<script type="text/javascript">
					alert("Debe ingresar el carnet del alumno");
	                window.location.href="ConsultaNombre.php";
	                </script>';
		}
	}
?>