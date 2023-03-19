<?php
include_once ('db/db.php');

class UsuarioDAO{
    public $db_con;

    public function __construct (){
        $this->db_con=Database::connect();
    }

    public function getAllUser($nombre, $contrasena){
        $stmt=$this->db_con->prepare("SELECT * FROM usuario WHERE nombreusuario='$nombre' AND contrasena='$contrasena'");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    }
?>