<?php

include_once("views/View.php");

class UsersController {
    public function iniciosesion (){
        View::show("iniciosesion");
    }
    public function validariniciosesion (){
        $errores=array();
        if (isset($_POST['insertar'])) {
            //if (!isset($_POST['nombreusuario']));
            //    $errores['nombreusuario']="El nombre no es correcto";
            //if (!isset($_POST['contrasena']));
            //    $errores['contrasena']="La contraseña no es correcta";
            //if (empty($errores)){
                include_once('models/usuarios.php');
                $uDAO=new UsuarioDAO();
                if (empty($uDAO->getAllUser($_POST['nombreusuario'],$_POST['contrasena']))){
                    $errores['global']="El usuario no esta registrado.";
                    View::show("iniciosesion",$errores);
                } else {
                include_once('models/productos.php');
                $pDAO=new ProductoDAO();
                $products=$pDAO->getAllProducts();
                $pDAO=null;
                $_SESSION['usuario']=$_POST['nombreusuario'];
                View::show("showProducts", $products);
                }
        } else {
            View::show("iniciosesion",$errores);
        }
    }
    public function cerrarsesion(){
        session_destroy();
        include_once('models/productos.php');
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }
}
//}
