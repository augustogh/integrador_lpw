<?
//iniciar sesión
session_start();

//Verifica que el usuario fue autentificado
if ($_SESSION["autentificado"] != "SI") {
    //si no existe, envio a la página de autentificacion
    header("Location: index.php");
    //finaliza el script
    exit();
}
?>
