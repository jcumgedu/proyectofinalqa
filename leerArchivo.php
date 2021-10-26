<?php 
$readCsv = array_map('str_getcsv', file("export.csv")); 
?> 
<html> 
 <table border="1"> 
 <?php 
 //recorremos filas del csv
 foreach ($readCsv as $itemCsv) {
   echo '<tr>'; 
   //recorremos celdas del csv 
    foreach ($itemCsv as $elementoItemCSV) {
     echo '<td>'; 
     //mostramos la celda 
     echo $elementoItemCSV; 
     echo '</td>'; 
    } 
    echo '</tr>'; 
   } 
  ?> 
 </table> 
</html> 