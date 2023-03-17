<?php
include_once ('db/db.php');

class UsuarioDAO{
    public $db_con;

    public function __construct (){
        $this->db_con=Database::connect();
    }

    public function getAllUsers(){
        $stmt= $this->db_con->prepare("Select * from usuarios");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();
        $productos= array ();

        return $stmt->fetchAll();
    }
}