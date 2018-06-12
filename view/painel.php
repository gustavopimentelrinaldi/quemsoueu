<?php
	session_start();

	?>
<!DOCTYPE html>
<html>

<head>
	<title>Infos</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/painel.css"/>
	<!-- //web font -->
</head>

<body>
	<h1>Suas informações</h1>
	<div class="main-agileits">
		<div class="inner-w3-agile">
			<div class="left-section">
				<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['user_imagem']) . '" />';?>
				<div class="grids">
					<div class="g1">
						<h6>
							<span>448</span>Tweets</h6>
					</div>
					<div class="g2">
						<h6>
							<span>600</span>Followers</h6>
					</div>
					<div class="g3">
						<h6>
							<span>218</span>Following</h6>
					</div>
				</div>
			</div>
			<div class="right-w3-agile">
				<div class="right-info">
					<h2><?php echo $_SESSION['user_name']; ?></h2>
					<span class="designation">Profissão: <?php echo $_SESSION['user_ocupation']; ?></span>
					<p class="para-wthree">
						<a href="#"><?php echo $_SESSION['user_email']; ?></a><br>
						<a href="#">CPF: <?php echo $_SESSION['user_cpf']; ?></a><br>
						<a href="#">RG: <?php echo $_SESSION['user_rg']; ?></a><br>
					</p>
					<p class="para-wthree">Olá, Você é o <?php echo $_SESSION['user_name']; ?>, tem <?php echo $_SESSION['user_age']; ?> anos, o nome do seu animal de estimação é <?php echo $_SESSION['user_pet']; ?> e você tem a gradução <?php echo $_SESSION['user_graduation']; ?>!</p>
					<a href="../controller/logout_controller.php">Sair</a>
				</div>
				
			</div>
		</div>
	</div>
</body>

</html>
