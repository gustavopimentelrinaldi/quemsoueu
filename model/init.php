<?php
	// constantes com as credenciais de acesso ao banco MySQL
	define('DB_HOST', '127.0.0.1:3306');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'whoami');
	
	// habilita todas as exibições de erros
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	require_once '../controller/connection.php';
?>