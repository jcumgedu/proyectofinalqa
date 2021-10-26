<?php
	require("conexion.php");
	require("pdf2.php");


			// Construcción del archivo pdf
			$pdf = new PDF(); // Instanciamos la clase pdf
			$pdf -> AddPage(); // Agregamos una pagina en blanco
			$pdf -> AliasNbPages(); // Agregamos el numero de pagina
			$pdf -> SetFont('Arial', '', 10); // Definimos el tipo de fuente y el tamaño
			$pdf -> Encabezado(25, 10, 'codigo_carrera', 1, 0, 'C', 0);
			$pdf -> Encabezado(30, 10, 'Nombre_carrera', 1, 0, 'C', 0);
			$pdf -> Encabezado(70, 10, 'Facultad', 1, 0, 'C', 0);
			$pdf -> Encabezado(30, 10, 'ESTADO', 1, 0, 'C', 0);
			$pdf -> Ln(); // Salto de línea
			$consulta = "select codigo_carrera, nombre_carrera, Facultad,   id_estado, (case when id_estado = 1 then 'activo' when id_estado = 0 then 'inactivo' END) AS id_estado from alumnos.carrera";
			$resultado = mysqli_query($conexion, $consulta);
			while($resultSet = mysqli_fetch_array($resultado)){
				$pdf -> Cell(25, 10, $resultSet['codigo_carrera'], 1, 0, 'C', 0);
				$pdf -> Cell(30, 10, $resultSet['nombre_carrera'], 1, 0, 'C', 0);
				$pdf -> Cell(70, 10, $resultSet['Facultad'], 1, 0, 'C', 0);
				$pdf -> Cell(30, 10, $resultSet['id_estado'], 1, 1, 'C', 0);
			}
			$pdf -> Output(); // Exportamos el pdf
		 
	
?>