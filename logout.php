<?php 
session_start();

//Limpa todas as variaveis da seção
$_SESSION = array();

header("location: index.php");
?>