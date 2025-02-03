<?php 
function getDatabaseConnection() {
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'pokendb';

	//cria a conexão
	$connection = new mysqli($servername, $username, $password, $database);
	if($connection ->connect_error) {
		die('ERRO AO ESTABELECER UMA CONEXÃO COM O BANCO DE DADOS.'. $connection ->connect_error);
	}

	return $connection; //retorna a conexão com o banco de dados
}
?>