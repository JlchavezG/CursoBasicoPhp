<?php 

// Tad es una lista o un arreglo 
// iniciar la lista 
// $alumnos = [];
// Insertar dentro de la lista 
// $alumnos[] = 'Josue';
// $alumnos[] = 'Oliver';
// $alumnos[] = 'Jose Luis';
$alumnos = array('Josue','Oliver','Jose luis');
// localizar las posiciones de la lista y saber el tipo de dato de la lista 
var_dump($alumnos);
echo "<br>";
// identificar a los elementos de la lista 
echo $alumnos[0];
$Elemento = count($alumnos);
echo "<br>";
echo $Elemento; 
for($i = 0; $i < $Elemento; $i++){
    echo "<br>";
    echo $alumnos[$i];
}
$alumnos[2]= 'Ricardo';
echo "<br>";
$nuevoAlumno = array_merge($alumnos,['Saul']);
var_dump($alumnos);
echo "<br>";
var_dump($nuevoAlumno);


?>