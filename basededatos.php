<?php
require 'conf/conexiones.php';
$cantidad = $_POST["cantidad"];
$total = $cantidad * 3000;

$sql = " INSERT INTO ventas(valor) VALUES (".$total.")";
if($dbh->query($sql))
{
echo "venta reistrada: $" .$total; 
}else{
echo "error en la venta";
}


?>