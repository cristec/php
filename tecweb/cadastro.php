
<?php

include "funcoes.php"; 
 
echo iniciaPagina();
echo criaCabecalho();
echo criaMenu();

?>

<div class='regiao3'><h2 align='center'>Cadrastro de usuário</h2>

<?php
// recupera a sessao
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

// home
echo "Olá, ".$_SESSION["login"];
echo "<br/> <a href='logout.php'>Sair</a>"

?>



<!--
// Inicia a sessão
session_start();
 
// Verifica se a sessão do usuário não existe
if ( ! isset( $_SESSION['usuario'] ) && ! isset( $_SESSION['senha'] ) ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Usuário não está logado');
}
 
// Verifica se a sessão do usuário está vazia
if ( empty( $_SESSION['usuario'] ) && empty( $_SESSION['senha'] ) ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Sessão terminada, faça login novamente');
}
 

 
// Verifica se a sessão do usuário está vazia
if ( $_SESSION['usuario'] != $logado ) {
	// Ação a ser executada: mata o script e manda uma mensagem
	exit('Você não é o usuário correto.');
}
 
/*
 * Se o seu código passar por todas as verificações acima
 * significa que a sessão existe, não está vazia
 * portanto, exibimos os dados na tela
 */
echo 'Olá ' . $_SESSION['login'] . ', forneça os seus dados abaixo.'; 
-->
	

<form action="cadastra_usuario.php" 
method="POST"
enctype="multipart/form-data" >

<table>
<tr>
<td>Nome Completo:</td><td><input type="text" name="nome_completo" maxlength="30" size="30"/></td>
</tr>

<tr>
<td>Idade:</td><td><input type="text" name="idade" maxlength="3"/></td>
</tr>

<tr>
<td>Sexo:</td><td><input type="radio" name="ButtonSexo" value="F"/> Feminino</br>
	          <input type="radio" name="ButtonSexo" value="M"/> Masculino</td>
</tr>

<tr>
<td>Estado Civil:</td>
<td>
<select name="EstadoCivil" multiple size="5">
		<option value='Solteiro'>Solteiro</option>
		<option value='Casado'>Casado</option>
		<option value='Separado'>Separado</option>
		<option value='Divorciado'>Divorciado</option>
		<option value='Viúvo'>Viúvo</option>
	</select>
</td>

<tr>	
<td>cpf:<td><input type="text" name="cpf" maxlength="11"/> </td>
</tr>

<tr>
<td>Data de nascimento:</td><td><input type="text" name="data" maxlength="10" size="10"/></td>
</tr>

<tr>
<td colspan="2"><input type="file" name="foto"></td></tr>
<tr><td><input type="submit" value="Enviar"/></td>
</tr>
</table>
</div>

<?php
echo finalizaPagina();
?>