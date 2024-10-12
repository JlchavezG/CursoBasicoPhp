<?php 
 if(isset($_POST['btnSumar'])){
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $suma = $numero1 + $numero2;
  echo "el valor de la suma es: ".$suma;
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con Php</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <input type="number" name="numero1" placeholder="Digita numero" required> +
          <input type="number" name="numero2" placeholder="Digita Numero" required>
          <input type="submit" value="Sumar" name="btnSumar">
    </form>

</body>
</html>