<?php
	// recupera a sessao
	session_start();
	// remove username da sessao
	unset($_SESSION['username']);
	
	// termina a sessao
	session_destroy();
	
	// redireciona para index.php
	header("location:index.php?msg=Usuário desconctado");
	
?>