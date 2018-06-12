<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Quem sou eu?</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //end-smoth-scrolling -->
	<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/login.css"/>
</head>

<body>
	<section id="login">
		<h1 class="title-head">Login</h1>
		<div class="grid text-center">
			<h3>Autentique-se</h3>
			<form action="../controller/usuario_controller.php" method="post">
				<div class="img-grid">
					<img src="assets/images/2.png" alt=" " class="img-responsive" />
				</div>
				<div class="input">
					<input type="email" id="email" name="email" placeholder="Email" required="" />
				</div>
				<div class="input">
					<input type="password" id="senha" name="senha" placeholder="Senha" required="" />
				</div>
				<input type="submit" value="login">
				<?php
					if($erro == 1){
						echo '<p style="color: #FF0000; background: #FFFFFF; width: 50%; margin: 20px auto 0; border-radius: 50px;">Usuário e ou senha inválido(s)</p>';
					}
				?>
			</form>
		</div>
	</section>
	
</body>
</html>