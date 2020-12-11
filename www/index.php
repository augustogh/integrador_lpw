<html>
	<head>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
      
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
	</script> 
	
	<script> 
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        function SW_ACC() { 
            show('login');

	</script> 

		<script> 
				$('.message a').click(function(){
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
			});

			} 
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

		<div id="cf">
			<img class="bottom" src="./img/img03.jpg" />
			<img class="top" src='./img/img04.jpg' />
		</div>

		<div class="login-page">
		<div class="form">
			<form class="login-form" action="./auth/control.php" method="POST" enctype="multipart/form-data">
				<input type="text" placeholder="usuario" name="usuario" value=""/>
				<input type="password" placeholder="contraseña" name="contraseña" value=""/>
				<button>login</button>
			</form>
		</div>
	</div>
		



	</body>
</html> 