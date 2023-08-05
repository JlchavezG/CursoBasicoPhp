<?php 
// array numerico 
// asi se declara un array = variable + array  $arreglo = array();
$valor1 = 3; 
$valor2 = 5;  
$valor3 = 14;
$arreglo = array($valor1,$valor2,$valor3,$valor4); 
// el array contiene posiciones dadas desde 0 
// var_dump($arreglo);
// sacar el numero de elementos de un array
$longitud = count($arreglo);
// echo $longitud;
// recorrer el arreglo 
// un for se contruye for(variable de inicio; la variable a llegar o a rrecorrer; incremento o decremento)
for($i = 0; $i < $longitud; $i++){
    // donde se puede retomar el valor de cada elemento del arreglo 
    echo $arreglo[$i];
    echo "<br>";
}
echo "<br>";
echo $arreglo[2];
// arreglo asociativos 
$equipo = array("mariscal"=>'Angel',"linearo" => 'mario', "alacerrada"=>'ricardo');
foreach($equipo as $posicion=>$jugador){
    echo " El". $posicion. "es".$jugador;
}
// un array una dimencion 
/*echo "<br>";
$semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
echo "<br>";
echo $semana[0];
echo "<br>";
var_dump($semana);
echo "<br>";
$dias = count($semana);
for($z = 0; $z < $dias; $z++){
    echo "<br>";
    echo $semana[$z];
}
*/
echo "<br>";
$planetas = [];
$planetas[] = 'Venus';
$planetas[] = 'Tierra';
$planetas[] = 'Marte';
$planetas[] = 'Saturno';
$planetas[] = 'Urano';
$planetas[] = 'Neptuno';
$planetas[] = 'Pluton';
$semeolvido = array_merge($planetas,['Estrella Enana']);
var_dump($semeolvido);
echo "<br>";
echo "<br>";
echo count($semeolvido);
$planetas[1] = 'Terra';
echo "<br>";
var_dump($planetas);
unset($planetas[6]);
echo "<br>";
var_dump($planetas);
?>