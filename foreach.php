<?php 
// foreach(expresion_del_arreglo as $variable)
// sentencia
// foreach(expresion as $variable => $valor)
// sentencias 
$leguajes = array("PHP","C++","Python","Ruby",".Net","ASP","JavaScript","C","Fox_Pro");
foreach($leguajes as $lenguaje ){
    echo $lenguaje."<br>";
}
echo "<br>";
$leguajesO = array("PHP" => "POO","C++" => "POO","Python"=>"POO","Ruby"=>"POO",".Net"=>"Estruct",
"ASP"=>"POO","JavScript"=>"Estruct");
foreach($leguajesO as $valida=>$valores){
 echo "Los lenguajes son: ".$valida." de tipo: ".$valores."<br>";
} 
echo "<br>";
$Numeros = array(
    "42",
    1989,
    0x525,
    13456709,
    "2x15",
    "no es numero",
    array(),
    null
);
foreach($Numeros as $elemento){
    if(is_numeric($elemento)){
        echo var_export($elemento, true)."El dato es Numerico <br>", PHP_EOL;
    }
    else{
        echo var_export($elemento, true)."El dato no es Numerico <br>", PHP_EOL;
    }
}

?>