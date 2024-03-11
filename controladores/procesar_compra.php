<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cantidad = $_POST["cantidad"];
$costo = $_POST["costo"];
$hora = $_POST["hora"];

$costo_total = $cantidad * $costo;

echo "Compra de empanadas";
echo "Cantidad: $cantidad";
echo "Costo por empanada, $costo";
echo "Hora de la compra: $hora";
echo "Costo total: $costo_total";

}else {
    echo "No se recibio la comptra";
}


?>