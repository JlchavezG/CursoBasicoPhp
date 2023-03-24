<?php 
// una practica calcule el promedio de 5 notas ó calificaciones verificando que los valores sean numericos y posteriormente indicar si esta aprobado
// o reprobado segun el valor asignado por el promedio
$Calificacion1 = 5;
$Calificacion2 = 5;
$Calificacion3 = 0;
$Calificacion4 = 2;
$Calificacion5 = 5;
$minimo = 7;
/*if(is_numeric($Calificacion1) && is_numeric($Calificacion2) && is_numeric($Calificacion3) && is_numeric($Calificacion4) && is_numeric($Calificacion5)){
    $promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
    if($promedio >= $minimo){
           echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas aprobado";
    }
    else{
          echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas no aprobado";
    }
}
else{
    $mensaje = "Alguno de los valores contenidos en las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
*/
if(!is_numeric($Calificacion1)){
   echo "El valor de la calificacion 1 es: ".$Calificacion1." no es un valor numerico";
}
else if(!is_numeric($Calificacion2)){
   echo "El valor de la calificacion 2 es: ".$Calificacion2." no es un valor numerico";
}
else if(!is_numeric($Calificacion3)){
  echo "El valor de la calificacion 3 es: ".$Calificacion3."  no es un valor numerico";
}
else if(!is_numeric($Calificacion4)){
    echo "El valor de la calificacion 4 es: ".$Calificacion4."  no es un valor numerico";
}
else if(!is_numeric($Calificacion5)){
    echo "El valor de la calificacion 5 es: ".$Calificacion5."  no es un valor numerico";
}
else{
  $promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
  if($promedio >= $minimo){
     echo "El promedio obtenido es de: ".$promedio." por lo tanto estas aprobado";
  }
  else{
    echo "El promedio obtenido es de: ".$promedio." por lo tanto estas no aprobado";
  }
}

?>