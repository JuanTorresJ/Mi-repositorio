 <?php

include_once('P1_A9_BDConfig.php');
include_once('P1_A9_BDConnection.php');

class Usuario{
public $id;
public $nombre;
public $edad;

function __construct(){

}


public function save(){
    try{
        $dbConnection = new DBConnection();

        if ($this->id) {
        
        $sql = "UPDATE cusuario set nombre = :nombre, edad = :edad WHERE id = :id";
        $statement = $dbConnection->conexion->prepare($sql);
        
        $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
        $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
        $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
        $statement->execute();
    }else{
        
        $sql = "INSERT INTO cusuario (nombre, edad) VALUES (:nombre, :edad)";
        $statement = $dbConnection->conexion->prepare($sql);

        $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
        $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
        $statement->execute();
        $this->id = intval($dbConnection->conexion->lastInsertId());
        }
        
        $dbConnection->cierreConexion();
        return true;
    }catch(PDOException $e){
        echo "Error al insertar: ". $e->getMessage();
        return false;
    }
}
public static function buscarUsuario($id){
     try{
        $dbConnection = new DBConnection();
        $sql = "SELECT * FROM cusuario WHERE id = :id";
        $statement = $dbConnection->conexion->prepare($sql);
        $statement->execute( [ ":id" => $id ] );

        $rows = $statement->fetchAll();
        $mUsuario = null;
        foreach ($rows as $row) {
  
            $mUsuario = new Usuario();

            $mUsuario->id =intval($row["id"]);
            $mUsuario->nombre = $row["nombre"];
            $mUsuario->edad =intval($row["edad"]);
       }
      
       //$mUsuario = $statement->fetchObject('Usuario');
        $dbConnection->cierreConexion();
       return $mUsuario;
    }catch(PDOException $e){
        echo "Error al buscar: ". $e->getMessage();
        return null;
    }
}

public static function all(){
     try{
        $dbConnection = new DBConnection();
        $sql = "SELECT * FROM cusuario";
        $statement = $dbConnection->conexion->prepare($sql);
       $statement->execute();
        $rows = $statement->fetchAll();

        $usuarios = [];
       foreach ($rows as $row) {
     
            $mUsuario = new Usuario();
            $mUsuario->id =intval($row["id"]);
            $mUsuario->nombre = $row["nombre"];
            $mUsuario->edad =intval($row["edad"]);
            array_push($usuarios, $mUsuario);
       }

        $dbConnection->cierreConexion();
       return $usuarios;
    }catch(PDOException $e){
        echo "Error al buscar: ". $e->getMessage();
        return null;
    }
}

public function delete(){
    try{
        $dbConnection = new DBConnection();
        $sql = "DELETE FROM  cusuario WHERE id = :id";
        $statement = $dbConnection->conexion->prepare($sql);
        $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
       
        $statement->execute();
        $dbConnection->cierreConexion();
        return true;
    }catch(PDOException $e){
        echo "Error al eliminar: ". $e->getMessage();
        exit;
    }
}

}