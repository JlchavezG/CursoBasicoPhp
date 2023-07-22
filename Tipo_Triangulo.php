<?php 
if(isset($_POST['Boton'])){
 $Lado1 = $_POST['lado1'];
 $Lado2 = $_POST['lado2'];
 $Lado3 = $_POST['lado3'];
 if($Lado1 == $Lado2 and $Lado2 == $Lado3 and $Lado1 == $Lado3){
  echo "El triengulo es: Equilatero";
 }
 else if($Lado1 == $Lado2 || $Lado2 == $Lado3 || $Lado1 == $Lado3){
  echo "El triangulo es: Isoseles";
 }
 else if($Lado1 != $Lado2 and $Lado2 != $Lado3 and $Lado1 != $Lado3){
  echo "El triangulo es Escaleno";
 }
 else{
    echo "No es un triangulo";
 }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tipo deTriangulo</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input name="lado1" step="0.000001" type="number">
        <input name="lado2" step="0.000001" type="number">
        <input name="lado3" step="0.000001" type="number">
        <input type="submit" value="verificar" name="Boton">
    </form>
</body>
</html>