<?php
// verificar los lados para indentificar el tipo de triangulo 
if(isset($_POST['Btn'])){
$Lado1 = $_POST['lado1'];
$Lado2 = $_POST['lado2'];
$Lado3 = $_POST['lado3'];
// comparar los lados para determinar que tipo de triangulo es 
// todos los lados iguales = equilatero 
// triangulo ispseles 2 lados iguales uno desigual 
// que todos su lados son diferenetes escaleno 
if($Lado1 == $Lado2 and $Lado2 == $Lado3 and $Lado1 == $Lado3 ){
    
    echo "El triangulo es Equilatero";
}
else if($Lado1 == $Lado2 || $Lado2 == $Lado3 || $Lado1 == $Lado3){
    echo "El triangulo es isoseles";
}
else if($Lado1 != $Lado2 && $Lado2 != $Lado3 && $Lado1 != $Lado3){
   echo "Es un triangulo escaleno";
}
else{
  echo "No existen valores para determinar el tipo de triangulo";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tipo de triangulos</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="number" name="lado1" step="0.000001">
        <input type="number" name="lado2" step="0.000001">
        <input type="number" name="lado3" step="0.000001">
        <input type="submit" value="Verificar" name="Btn">
    </form>    
</body>
</html>