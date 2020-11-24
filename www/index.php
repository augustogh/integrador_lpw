<html>
	<body>
		<title>TP2</title>
		<div>
			<h3>Datos Personales</h3>
		</div>
		<form action="dpersonal.php" method="POST" enctype="multipart/form-data">
			<table>
				<tbody>
					<tr>
						<td>&nbsp;Nombre:</td>
						<td>&nbsp;<input type="nombre" name="a_nombre" value=""/> <br/></td>
					</tr>
					<tr>
						<td>&nbsp;Apellido:</td>
						<td>&nbsp;<input type="apellido" name="b_apellido" value=""/><br/></td>
					</tr>
					<tr>
						<td>&nbsp;DNI:</td>
						<td>&nbsp;<input type="dni" name="b_dni" value=""/><br/></td>
					</tr>
					<tr>
						<td>&nbsp;Fecha de Nacimiento: </td>
						<td>&nbsp;<input type="dni" name="b_dni" value=""/><br/></td>
					</tr>
				</tbody>
			</table>
			<br/>
			<div>
				<label for="file" name="file" id="file" /> <label for="file">Archivo:</label>
				<br/> 
				<input type="file" name="file" id="file" />
				<br/>
				<input type="submit" name="submit" id="Submit" />
			</div>
	</body>
</html>