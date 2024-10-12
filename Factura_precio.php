<?php 
// validar la accion y proceso de lista 
if(isset($_POST['btnGuardar'])){
// declarar las variables 
$FProducto = $_POST['producto'];
$FCantidad = $_POST['cantidad'];
$FPrecio = $_POST['precio'];
$factura = array($FProducto, $FCantidad, $FPrecio);
$Total = $FCantidad * $FPrecio;
echo "El producto seleccionado es: ".$FProducto." La cantidad es: ".$FCantidad." EL Precio es de: ".$FPrecio." El total es: ".$Total;
echo var_dump($factura);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factura con Precio</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="producto">Tipo de producto</label>
        <select name="producto" required>
            <option value="">Selecciona un producto</option>
            <option value="Aceite">Aceite</option>
            <option value="Aceite">Cereal</option>
            <option value="Aceite">Agua</option>
            <option value="Aceite">Cafe</option>
        </select><br>
        <label for="cantidad">Selecciona la cantidad del productp</label>
        <input type="number" name="cantidad" min="1" max="10">
        <input type="number" name="precio" placeholder="digita el precio">

        <input type="submit" value="Guardar" name="btnGuardar">
    </form>
</body>
</html>