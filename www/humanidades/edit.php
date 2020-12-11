
<html> 
    <head>
      <link rel="stylesheet" href="../css/table_style.css">
      <?php include("./conexion.php"); ?>        
    </head>

    <body>
		<!--encabezados-->
		<table border=1 class="flat-table flat-table-3"> 
			<tr>
			<!--colspan toma las columnas para extender el tamaño de la celda-->
				<th colspan=7> Alumnos Facultad de Medicina</th> 
			</tr>		
			<tr>
				<th> ID </th>
				<th> apellido y nombre </th>
				<th> Direccion </th> 
				<th> Email </th>
				<th> Ciudad </th>
				<th> Provincia </th>
				<th> Carrera </th>
			</tr>
		</table>

	<?php
		/* consulta */
		function muestra_alumnos($resultados){
			if ($resultados !=NULL) {
				echo "- Apellido y Nombre: ".$resultados['apellido y nombre']."<br/> ";
				echo "- Dirección: ".$resultados['direccion']."<br/>";
				echo "- eMail: ".$resultados['email']."<br/>";
				echo "- Ciudad: ".$resultados['ciudad']."<br/>";
				echo "- Provincia: ".$resultados['provincia']."<br/>";
				echo "- Carrera: ".$resultados['id_carrera']."<br/>";
			}
			//else {echo "<br/>No hay más datos: <br/>".$resultados;}
				
		}




		
		$link = conecta();
		//$link->set_charset("utf8");
		mysqli_select_db($link, "medicina_tmp");
		$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
		
		$result = mysqli_query($link, "SELECT * FROM alumnos");
		$extraido1= mysqli_fetch_array($result);
		muestra_alumnos($extraido1);
		$extraido2= mysqli_fetch_array($result);
		muestra_alumnos($extraido2);
		$extraido3= mysqli_fetch_array($result);
		muestra_alumnos($extraido3);
		$extraido4= mysqli_fetch_array($result);
		muestra_alumnos($extraido4);
		$extraido5= mysqli_fetch_array($result);
		muestra_alumnos($extraido5);
		$extraido6= mysqli_fetch_array($result);
		muestra_alumnos($extraido6);
		mysqli_free_result($result);
		mysqli_close($link);

		/*
		while (($fila = mysqli_fetch_array($result))!=NULL){
			muestra_alumnos(mysqli_fetch_array($result));
		}
		 */

	?>
