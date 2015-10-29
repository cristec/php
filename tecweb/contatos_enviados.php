<<?php

include "funcoes.php"; 
 
echo iniciaPagina();
echo criaCabecalho();
echo criaMenu();

?>

<htlml>
<!---deve ter a mesma estrutura das paginas principais (as 3 regiões)--->
<div class='regiao3'><h2 align='center'>Contatos Enviados</h2> 
<?php
	    
		/*****EX 7******/
	   /******conexao com banco *******/	
	 /*conecte com o banco de dados (feito)*/
	$conexao = mysql_connect("localhost", "root", "")or die("Não foi possível conectar servidor: ".mysql_error()); 
	$database = mysql_select_db("tecweb_trabalho")or die("erro na base de dados: ".mysql_error());
	
	
	/****contatos enviados.php ---->>mostrar todos os contatos cadastrados no sistema.**/
	/**selecionar todos os contatos enviados cadastrados   (tabela contato) */
	$resultado = mysql_query ("select * from contato");
	
	
	/*e exibir seus dados em uma tabela na região 3 da página contatos_enviados.php.*/
	echo "<table class='desenvolvedores' >
		<tr><td><strong>id</strong></td>
		<td><strong>nome</strong></td>
		<td><strong>e-mail</strong></td>
		<td><strong>telefone</strong></td>
		<td><strong>assunto</strong></td>
		<td><strong>mensagem</strong></td>
		</tr>";
	while($registro = mysql_fetch_array($resultado)){
		echo "<tr><td>".$registro["id"]."</td><td>".$registro["nome"]."</td><td>".$registro["email"]."</td><td>".$registro["telefone"].
		"</td><td>".$registro["assunto"]."</td><td>".$registro["mensagem"].
		"</td></tr>";
	}
	echo "</table>"; 

     /*****Finalizou a conexao********/
    mysql_free_result($resultado);
	mysql_close($conexao);



?>
</div>
</html>
<?php
echo finalizaPagina();
?>