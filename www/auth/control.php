<?php
//vemos si el usuario y contraseña es váildo
if ($_POST["usuario"]=="admin" && $_POST["contraseña"]=="admin"){
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    $_SESSION["autentificado"]= "SI";
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
    header ("Location: ../humanidades/head.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: index.php?errorusuario=si");
}
?>