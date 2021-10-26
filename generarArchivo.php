<?php
	require("conexion.php");
	if(isset($_POST['consultar'])){
		if(strlen($_POST['nit']) > 1){
			$nit = $_POST['nit'];
			$consulta = "select nit_cliente, nombre, apellido, direccion, telefono, id_estado, (case when id_estado = 1 then 'activo' when id_estado = 0 then 'inactivo' END) AS estadoDescripcion from almacen.cliente where nit_cliente = '$nit'";
			$resultado = mysqli_query($conexion, $consulta);
			$headers = $resultado -> fetch_fields();
			foreach($headers as $header) {
			    $head[] = $header -> name;
			}
			$fp = fopen('php://output', 'w');
			if ($fp && $resultado) {
			    header('Content-Type: text/csv');
			    header('Content-Disposition: attachment; filename="export.csv"');
			    header('Pragma: no-cache');
			    header('Expires: 0');
			    fputcsv($fp, array_values($head)); 
			    while ($row = $resultado -> fetch_array(MYSQLI_NUM)) {
			        fputcsv($fp, array_values($row));
			    }
			    die;
			}
		} else{
			echo'<script type="text/javascript">
					alert("Debe ingresar el nit del cliente");
	                window.location.href="consultarCliente.php";
	                </script>';
		}
	}
?>