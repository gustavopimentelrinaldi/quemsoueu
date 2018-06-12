<?php
	require '../model/init.php';
	
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

	$passwordHash = sha1($senha);
	$PDO = db_connect();

	$sql = "SELECT id, nome, idade, nomeDoPet, cpf, rg, profissao, graduation, imagem, email FROM users WHERE email = :email AND senha = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':email', $email, PDO::PARAM_STR, 80);
	$stmt->bindParam(':senha', $passwordHash, PDO::PARAM_STR, 40);
	$stmt->execute();

	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(count($users) <= 0 ){
		header('Location: ../view/login.php?erro=1');
		exit;
	}

	$user = $users[0];

	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['user_name'] = $user['nome'];
	$_SESSION['user_age'] = $user['idade'];
	$_SESSION['user_pet'] = $user['nomeDoPet'];
	$_SESSION['user_cpf'] = $user['cpf'];
	$_SESSION['user_rg'] = $user['rg'];
	$_SESSION['user_ocupation'] = $user['profissao'];
	$_SESSION['user_graduation'] = $user['graduation'];
	$_SESSION['user_email'] = $user['email'];
	$_SESSION['user_imagem'] = $user['imagem'];
	header('Location: ../view/painel.php');
?>