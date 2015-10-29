<?php
// recupera a sessao
session_start();

// verifica se esta autenticado
if(!ISSET($_SESSION["username"])) {
	header("location:index.php?msg=Acesso negado");
}
// home
echo "Olá, "

/*Usuário” no mesmo local, onde "Usuário" deve ser o nome cadastrado no banco de dados. Coloque também um botão para fazer o logout.
.$_SESSION["username"];*/


echo "<br/> <a href='logout.php'>Sair</a>"

?>