<?php 
// declarar las variables 
$NombreCliente = "Uhab Coapa";
$NombreEmisor = "Zorros";
$Producto1 = "Crema";
$Producto2 = "Gel";
$Producto3 = "Shampoo";
$Producto4 = "Libreta";
$Precio1 = 50;
$Precio2 = 25;
$Precio3 = 99;
$Precio4 = 55;
$iva = .16;
$fecha = date('d-m-y');
echo "Datos de Factura a Nombre de: ".$NombreCliente."<br>";
$productos = array($Producto1 => $Precio1,
                   $Producto2 => $Precio2,
                   $Producto3 => $Precio3,
                   $Producto4 => $Precio4);
foreach($productos as $producto => $precio){
        echo "El Producto: ".$producto." con el Precio: ".$precio."<br>";
}
$suma = $Precio1 + $Precio2 + $Precio3 + $Precio4; 
echo "El total de los productos son: ".$suma."<br>";
$total = $suma * $iva."<br>";
$GranTotal = $suma + $total;
echo $GranTotal;

?>