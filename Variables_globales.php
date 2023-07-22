<?php 
/* 
Superglobals = son variables internas que estan disponibles siempre en todos los ambitos
$Globals = Hace referencia a todas las variables disponibles en el ambito global
$_SERVER = Informacion del entorno del servidor y de ejecucion 
$_GET = Variables HTTP GET
$_POST = Variable POST de HTTP
$_FILES = Variables de manejo de ficheros
$_Request = VARIABLES http REQUEST
$_SESSION = Variables de sesion 
$_ENV = Variables de entorno 
$_COOKIE = cookies HTTP
$php_errormsg = El mensaje anterior de error
primer ejemplo de archivos requeridos 
 $a = 1;
 include 'b.inc';

$a = 1; // ambito global 
function ejemplo(){
    echo $a; // referencia a una variable del ambito local
}
ejemplo();

$a = 1;
$b = 2;
function suma(){
   global $a , $b;
   $b = $a + $b;
}
suma();
echo $b;

$a = 1;
$b = 2;
function suma(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
suma();
echo $b;
*/
if(isset($_POST['Boton'])){
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Fecha = $_POST['FechaNac'];
$Email = $_POST['Email'];
if($Nombre == ""){
  echo "Coloca informacion en el campo nombre";
}
else if($Apellidos == ""){
  echo "Coloca informacion en el campo Apellidos";
}
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <title>Variables | Super variables</title>
    </head>
    <body>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <input type="text" name="Nombre" id="Nom" placeholder="Nombre">
         <input type="text" name="Apellidos" id="Ap" placeholder="Apellidos">
         <input type="date" name="FechaNac" id="FecNac">
         <input type="email" name="Email" id="Email">
         <input type="submit" value="Recuperar" name="Boton">
       </form>
    </body>
</html>