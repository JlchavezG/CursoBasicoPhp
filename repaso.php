<?php
function registro(){
if(isset($_POST['btn'])){
$Nombre = $_POST['nombre'];
$Fecha = $_POST['fecha'];
$Edad = $_POST['edad'];
$Email = $_POST['email'];
$Total = 500;
$factura = array($Nombre,$Fecha,$Edad,$Email,$Total);
var_dump($factura);
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica de Recuperacion Lenguajes d Programacin II</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="nombre" placeholder="Digita tu Nombre">
    <input type="date" name="fecha">
    <input type="number" min="1" max="100" name="edad" >
    <input type="email" name="email" placeholder="Digita tu Email">
    <input type="submit" name="btn" value="Guardar">
   </form>
   <?php registro(); ?>
</body>
</html>