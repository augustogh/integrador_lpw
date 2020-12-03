<?php include ("./auth/sesion.php");?>
<?php
//usuario está logueado?
if ($_SESSION["autentificado"] != "SI") {
    //si no está logueado lo envío a la página de autentificación
    header("Location: ../index.php");
} 
else {
    //sino, calculamos el tiempo transcurrido
    $fechaGuardada = $_SESSION["ultimoAcceso"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));

    //comparamos el tiempo transcurrido
     if($tiempo_transcurrido >= 600) {
     //si pasaron 10 minutos o más
      session_destroy(); // destruyo la sesión
      header("Location: ../index.php"); //envío al usuario a la pag. de autenticación
      //sino, actualizo la fecha de la sesión
    }
    else {
    $_SESSION["ultimoAcceso"] = $ahora;
   }
}
?>
<html>
<body>
    <div class="coco">
        <!---<img class="arrow" src="assets/images/demo-arrow-up.png" alt="arrow" height="120">-->
        <h1>Facultad de medicina</h1>
        <ul>
            <li><a href="index.html" class="active">Basic</a></li>
            <li><a href="navigation-icons.html">Icons</a></li>
            <li><a href="navigation-dark.html">Icons Dark</a></li>
            <li><a href="navigation-round.html">Round</a></li>
        </ul>
    </div>
</body>
</html>