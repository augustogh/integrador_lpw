<?php include ("../auth/sesion.php");?>
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
<head>
    <link rel="stylesheet" href="../css/app_style.css">
</head>
<body>
   <!-- menu -->
   <main>
        <h1>
            Facultad de Medicina
            <span> with cool links </span>
        </h1>
        <input type="checkbox" id="myInput">
        <label for="myInput">
            <span class="bar top"></span>
            <span class="bar middle"></span>
            <span class="bar bottom"></span>
            </label>
        <aside>
            <div class="aside-section aside-left">
                <div class="aside-content">
                    <p> Gestión de Alumnos</p>
                    <button class="button"> <a href="../index.php">inicio</a></button>
                </div>
            </div>
            <div class="aside-section aside-right">
                <ul class="aside-list">
                    <li><a href="" class="aside-anchor">lista de Ingresantes</a></li>
                    <li><a href="" class="aside-anchor">ata de ingresante</a></li>
                    <li><a href="" class="aside-anchor">baja de ingresante</a></li>
                    <li><a href="" class="aside-anchor">modificar ingresante</a></li>
                    <li><a href="" class="aside-anchor">volver</a></li>
                </ul>
            </div>
        </aside>
    </main>
<!-- fin menu -->
</body>
</html>