<?php
	require("conexion.php");
	require("pdf4.php");


			// Construcción del archivo pdf
			$pdf = new PDF(); // Instanciamos la clase pdf
			$pdf -> AddPage(); // Agregamos una pagina en blanco
			$pdf -> AliasNbPages(); // Agregamos el numero de pagina
			$pdf -> SetFont('Arial', '', 10); // Definimos el tipo de fuente y el tamaño
			$pdf -> Encabezado(60, 10, 'CODIGO_CARRERA', 1, 0, 'C', 0);
			$pdf -> Encabezado(60, 10, 'NOMBRE_CARRERA', 1, 0, 'C', 0);
			$pdf -> Encabezado(60, 10, 'NOMBRE_CURSO', 1, 0, 'C', 0);


			$consulta = "select cursos.codigo_carrera, carrera.nombre_carrera,cursos.nombre_curso FROM cursos ,carrera WHERE cursos.codigo_carrera = carrera.codigo_carrera ORDER BY carrera.nombre_carrera ASC";
			$resultado = mysqli_query($conexion, $consulta);
			while($resultSet = mysqli_fetch_array($resultado)){
				$pdf -> Ln(); // Salto de línea
				$pdf -> Cell(60, 10, $resultSet['codigo_carrera'], 1, 0, 'C', 0);
				$pdf -> Cell(60, 10, $resultSet['nombre_carrera'], 1, 0, 'C', 0);
				$pdf -> Cell(60, 10, $resultSet['nombre_curso'], 1, 0, 'C', 0);

			}
			$pdf -> Output(); // Exportamos el pdf
		 
	
?>