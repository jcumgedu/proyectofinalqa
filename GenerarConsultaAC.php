<?php
	require("conexion.php");
	require("pdf3.php");


			// Construcción del archivo pdf
			$pdf = new PDF(); // Instanciamos la clase pdf
			$pdf -> AddPage(); // Agregamos una pagina en blanco
			$pdf -> AliasNbPages(); // Agregamos el numero de pagina
			$pdf -> SetFont('Arial', '', 10); // Definimos el tipo de fuente y el tamaño
			$pdf -> Encabezado(80, 10, 'TOTAL_ALUMNOS', 1, 0, 'C', 0);
			$pdf -> Encabezado(80, 10, 'NOMBRE_CURSO', 1, 0, 'C', 0);


			$consulta = "select COUNT(asignacion_detalle.codigo_curso) AS TOTAL_ALUMNOS,cursos.nombre_curso, cursos.codigo_curso FROM alumnos.asignaciones, alumnos.asignacion_detalle,alumnos.alumnos, alumnos.cursos WHERE asignaciones.cod_asignacion = asignacion_detalle.cod_asignacion AND  alumnos.carnet = asignaciones.carnet AND cursos.codigo_curso = asignacion_detalle.codigo_curso group by cursos.codigo_curso";
			$resultado = mysqli_query($conexion, $consulta);
			while($resultSet = mysqli_fetch_array($resultado)){
				$pdf -> Ln(); // Salto de línea
				$pdf -> Cell(80, 10, $resultSet['TOTAL_ALUMNOS'], 1, 0, 'C', 0);
				$pdf -> Cell(80, 10, $resultSet['nombre_curso'], 1, 0, 'C', 0);

			}
			$pdf -> Output(); // Exportamos el pdf
		 
	
?>