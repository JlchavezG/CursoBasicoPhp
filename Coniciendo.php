<?php 
  
    /*
      Tipos de dato
         Boolean: almacenas valores de verdadero y falso 
         Intenger: Entero
         Float: Numeros con decimales utilizan el punto de simal como un separador 
         String: Cadena de caracteres 
      Tipos de datos compuestos 
         array : se utililiza para almacenar varios valore
         object : almacena  objetos dentro de php 
      Tipos de datos especiales 
         resource: hace referencia a recursos (archivos abiertos o conexiones establecidas)
         null: in valor nulo       
    */ 
    // primero se declara con un signo $ -> nombre o identificador (mayuscas y minusculas)
    // $8variable = erronea
    // $_8variable = correcto 
    // $variable8 = correcto 
    // $8_variable = erronea
    $numero = 55.45;
    $Nombre = "Jose Luis";
    $MiVariable;
    $MiVariable = "Ya le di un valor";
    echo $numero; 
    echo $Nombre;
    echo $MiVariable;
?>