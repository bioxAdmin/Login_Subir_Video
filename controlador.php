<?php

if(!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and clave='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo('<div class="alert alert-danger">ACCESSO DENEGADO</div>');
        }
        
    }
    
}

?>