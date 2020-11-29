<html>
	<head>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
      
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
    </script> 
	</head>
	<body >
	<header>
        <section class="wrapper">
			<nav>
				<ul>
					<li><a href="#home">inicio</a></li>
					<li><a href="#news">novedades</a></li>
					<li><a href="#contact">contacto</a></li>
					<li style="float:right"><a class="active" href="#login" onClick="SW_ACC()">ingreso</a></li>
				</ul>
			</nav>
		</section>
	</header>
	
    <script> 
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        function SW_ACC() { 
            show('login');
        } 
    </script> 
    </script> 
<!--
		<div id="cf">
			<img class="bottom" src="./img/img03.jpg" />
			<img class="top" src='./img/img04.jpg' />
		</div>
	-->


	<nav class="contacc" >
		<div class="acceso" id="login">
		<form action="head.php" method="POST" enctype="multipart/form-data">
				<table>
					<tbody>
						<tr>
							<td>&nbsp;Usuario:</td>
							<td>&nbsp;<input type="nombre" name="a_nombre" value=""/> <br/></td>
						</tr>
						<tr>
							<td>&nbsp;Contraseña:</td>
							<td>&nbsp;<input type="apellido" name="b_apellido" value=""/><br/></td>
						</tr>

					</tbody>
				</table>
		</div>
	</nav>

	</body>
</html> 