<?php
	require("./fpdf/fpdf.php");

	class PDF extends FPDF {
		// Cabecera de página
		function Header(){
		    $this->Image('./Imagenes/logo_umg.png', 15, 10, 20); // Agregamos imagen
		    $this->SetFont('Arial', 'B', 14);
		    $this->Cell(80); // Movernos a la derecha
		    $this->Cell(30, 10, 'ALUMNOS', 0, 0, 'C'); // Título
		    $this->Ln(25); // Salto de línea
		    
		}

		// Pie de página
		function Footer(){
		    $this->SetY(-15); // Posición: a 1,5 cm del final
		    $this->SetFont('Arial','I',8); // Arial italic 8
		    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C'); // Número de página
		}

		// Encabezados
		function Encabezado(int $a, int $b, string $c, int $d, int $e, string $f, int $g){
			$this -> Cell($a, $b, $c, $d, $e, $f, $g);
		}
	}
?>