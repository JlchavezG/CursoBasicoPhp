<?php 
// crear la clase producto 
class Producto {
    // declarar los datos 
    protected $Codigo;
    protected $Nombre;
    protected $NCorto;
    protected $tamaño;
    // declarar los metodos get
    public function getcodigo(){
        return $this->Codigo;
    }
    public function getnombre(){
        return $this->Nombre;
    }
    public function getncorto(){
        return $this->NCorto;
    }
    public function getTamaño(){
        return $this->tamaño;
    }
    // set  funciones
    function setCodigo($Codigo){
        $this->Codigo = $Codigo;
    } 
    function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }
    function setNcorto($NCorto){
        $this->NCorto = $NCorto;
    }
    function setTamaño($tamaño){
        $this->tamaño = $tamaño;
    }
    // crear la funcion mostrar 
    public function imprimir(){
        print "El producto es: ".$this->Codigo.""; 
       }
       public function __construct($row){
        $this->Codigo = $row['codigo'];
        $this->Nombre = $row['nombre'];
        $this->NCorto = $row['nombre_corto']; 
        $this->tamaño = $row['tamaño'];   
       }
    
}
// crear subclase 
class SubProducto extends Producto{
    protected $codigoP;
    protected $nombreP;
    protected $ncortoP;
    protected $tamañoP;
    // get metodos
    public function getcodigo(){
        return $this->codigoP;
    }
    public function getnombre(){
        return $this->nombreP;
    }
    public function getncorto(){
        return $this->ncortoP;
    }
    public function gettamaño(){
        return $this->tamaño;
    }
    // set funciones
    function setCodigo($codigoP){
        return $this->codigoP;
    }
    function setNombre($nombreP){
        return $this->nombreP;
    }
    function setNcorto($ncortoP){
        return $this->ncortoP;
    }
    function setTamaño($tamañoP){
        return $this->tamañoP;
    }
public function imprimirSubProducto(){
    print "El subproducto es :".$this->codigoP." y el nombre corto es: ".$this->ncortoP."";
}
public function __construct($codigoP, $nombreP, $ncortoP,$tamañoP){
    parent::__construct($producto);// constructor que hereda
    $this->codigoP;
    $this->nombreP;
    $this->ncortoP;
    $this->tamañoP;
}
}



?>