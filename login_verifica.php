<?php
	@session_start();
	if(!isset($_SESSION["codigo_professor"]) || !isset($_SESSION["senha"])){
		echo "Efetue login novamente! <a href='./'>Clique aqui</a>";
		exit();
	}
?>

