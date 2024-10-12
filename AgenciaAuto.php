<?php 
 // crear la clases base 
 class Vehiculo{
    // datos de la clase o atributos 
    protected $marca;
    protected $modelo;
    protected $ann; 
    protected $precio;
    protected $color;
    // crear el objeto 
    // crear un constructor 
    public function __construct($marca,$modelo,$ann, $precio,$color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->ann = $ann;
        $this->color = $color;
    }
    // crear los metodos las funciones 
    public function ontenerInfo(){
        return "Marca: $this->marca, Modelo: $this->modelo, Precio: $this->precio, Año: $this->ann, Color: $this->color";
    }
    public function aplicarDescuento($descuento){
        $this->precio -= $descuento;  
    }
 }
 // crear la clase derivada auto 
    class Auto extends Vehiculo{
        private $tipoTransmicion;
        public function __construct($marca, $modelo,$precio,$ann,$color,$tipoTransmicion)
        {
            parent::__construct($marca,$modelo,$precio,$ann,$color);
            $this->tipoTransmicion = $tipoTransmicion;
        }
        public function ontenerInfo()
        {
            return parent::ontenerInfo().",TipoTransmision: $this->tipoTransmicion";
        }
    }
    // crear la clase derivada camioneta 
    class Camioneta extends Vehiculo{
        private $capacidadCarga;
        public function __construct($marca, $modelo,$precio,$ann,$color,$capacidadCarga)
        {
            parent::__construct($marca,$modelo,$precio,$color);
            $this->capacidadCarga = $capacidadCarga;
        }
        public function ontenerInfo()
        {
            return parent::ontenerInfo().",Capacidad de carga: $this->capacidadCarga Kg";
        }
    }
    // crear la clase cliente
    class Cliente{
        private $nombre;
        private $edad;
        private $correo;
        private $direccion;

        public function __construct($nombre,$edad,$correo,$direccion)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->correo = $correo;
            $this->direccion = $direccion;
        }
        public function comprarVehiculo($vehiculo){
            echo "$this->nombre de quien compro el vehiculo: ".$vehiculo->ontenerInfo();
        }
    } 
    class Empleado{

    }
// ejemplo de crear los objetos ya con datos 
$miAuto = new Auto("Toyota","Corolla",365000,2025,"Rojo mate","Automaticos");
$Micamioneta = new Camioneta("Toyota","Alandria",600000,"2025","Negra",2000);
$cliente = new cliente("Mario",34,"ramon@gmail.com","Xochimilco");
$cliente->comprarVehiculo($miAuto);
echo "<br>";
$cliente->comprarVehiculo($Micamioneta);
$miEmpleado = new Empleado();






?>