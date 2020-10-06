<a href = "index.php">Inicio</a><br> <br>

<?php

class Persona{
    public $nombre;
    public $edad;

    function __construct(){}

    public function saluda(){
        echo "Hola mucho gusto, me llamo $this->nombre <br>";
    }
    
    public function respondeSaludo($nombreInterlocutor){
        echo "Hola mucho gusto $nombreInterlocutor, me llamo $this->nombre <br>";
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edadEntrada){
        $this->edad = $edadEntrada;
    }

    public static function getMayoriaEdad(){
        return self::$mayoriaEdad;
    }
}

