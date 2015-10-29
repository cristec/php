<!--- responsavel por carregar as funções -->
<?php

include "funcoes.php"; 
 
echo iniciaPagina();
echo criaCabecalho();
echo criaMenu();

?>

<!--- responsavel por carregar  a div que div em 3 partes  -->
<div class='regiao3'><h2 align='center'>Formulário de Pesquisa </h2>
 <?php 	
// Inicia a sessão
session_start();
 
// Verifica se a sessão do usuário não existe
if ( ! isset( $_SESSION['login'] ) && ! isset( $_SESSION['senha'] ) ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Você tem que está logado, para ter acesso a esse dados');
}
 
// Verifica se a sessão do usuário está vazia
if ( empty( $_SESSION['login'] ) && empty( $_SESSION['senha'] ) ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Sessão terminada, faça login novamente');
}
 
if ( $_SESSION['nome'] != $logado ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Você não é o usuário correto.');
}
 
/*
 * Se o seu código passar por todas as verificações acima
 * significa que a sessão existe, não está vazia
 * portanto, exibimos os dados na tela
 */
 echo 'Olá ' . $_SESSION['login']; 
	
	
?> 

<?php
// variaval em branco//
$nome = $cpf = $data = $resultado =$registro= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = test_input($_POST["nome"]);
   $cpf = test_input($_POST["cpf"]);
   $data = test_input($_POST["data"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<div class='regiao3'><h2 align='center'>Pesquisa de Usuário</h2>
 <?php
    echo" Bem vindo $logado"; 
?>
	
<form action="pesquisa.php" method="POST"
enctype="multipart/form-data" >
<table>
<tr><td>Nome:</td><td><input type="text" name="nome" maxlength="30" size="30"/></td></tr>

<tr><td>CPF:</td><td><input type="text"  name="cpf" maxlength="11" size="20"/></td></tr>

<tr><td>Data de nascimento:</td><td><input type="text" name="data" maxlength="10" size="10"/></td></tr>

<tr><td><input type="submit" value="Enviar"/></td></tr>
</table>
</form>
	
 <?php

if(ISSET($_POST["nome"]) or ISSET($_POST["cpf"]) or ISSET($_POST["data"])){
	$conexao = mysql_connect("localhost", "root", "");
	$database = mysql_select_db("tecweb_trabalho",$conexao)or die("erro na base de dados: ".mysql_error());
	
	 $resultado = mysql_query ("select * from usuario where nome like '$nome%' or cpf like '$cpf%' or data like'$data' "  );
	
	
	/*e exibir seus dados em uma tabela na região 3 da página contatos_enviados.php.*/
		echo "<table class='desenvolvedores' >
		<tr><td><strong>nome</strong></td>
		<td><strong>cpf</strong></td>
		<td><strong>data</strong></td>
		</tr>";
		while($registro = mysql_fetch_array($resultado)){
		echo "<tr><td>".$registro["nome"]."</td><td>".$registro['cpf']."</td><td>".$registro['data'].
		"</td></tr>";
	}
	echo "</table>"; 
}	
?>
</div>
<?php
	echo finalizaPagina();
?>
