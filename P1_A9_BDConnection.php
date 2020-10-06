<?php
include_once('P1_A9_BDConfig.php');

class DBConnection{
    public $conexion;

function __construct(){
    try{
        $this->conexion = new PDO(
            "mysql:host=" . BDConfig::$DBSERVER .
            ";dbname=" . BDConfig::$DBNAME,
            BDConfig::$DBUSER,
            BDConfig::$DBPASSWORD
        );
    
$this->conexion->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

    }catch(PDOException $e){
            echo "Error al conectar con la BD: " . $e->getMessage();
            exit;
    }
}
    public function cierreConexion(){
        $this->conexion = null;
    }

}
