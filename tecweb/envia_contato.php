<?php

	 $nome = $_POST["nome_completo"];
	 $email = $_POST["email"];
	 $telefone = $_POST["telefone"];
	 $assunto = $_POST["assunto"];
	 $mensagem = $_POST["mensagem"];

	 /******conexao com banco *******/
	 /*6. No arquivo envia_contato.php conecte com o banco de dados (feito)*/
	$conexao = mysql_connect("localhost", "root", ""); 
	$database = mysql_select_db("tecweb_trabalho");


	/******recebendo dados e inserindo na tabela *******/
	/***Insira os dados enviados pelo formulário contato.php na tabela Contato. (feito)******/
	$sql = "INSERT INTO contato(id, nome,email,assunto,telefone,mensagem) 
	values (null,'$nome','$email','$assunto','$telefone','$mensagem')"; 
	
	/*****Finalizou a conexao********/
	$resultado = mysql_query($sql) or die(mysql_error());
	mysql_free_result($resultado);
	mysql_close($conexao);
	
	
	/****teste de validação de contato**/
	
	/*****ATENÇÃO ESTA COM DUPLICIDADE NO FOR, A VARIAVEL MENSAGEM ESTA RETORNANDO DUAS VEZES***/
		if(ISSET($_POST["contato"])){
		 $contato  = $_POST["contato"];
		  
		  foreach( $contato  as $pos => $valor) {
				$mensagem=$mensagem.$valor;
			if ($valor== "telefone"){
				$mensagem=$mensagem." (".$telefone.")"." ou ";
			}
			if ($valor== "email"){
				$mensagem=$mensagem." (".$email.")   ";
			}
		 } 
	  } else {
		 echo "Nenhum metodo de retorno foi selecionado";
			 }
	$resultado = substr($mensagem,0,-3);
	/*O que estamos fazendo? Removemos o Ãºltimo caractere da variÃ¡vel 
	$valor, se quisermos remover uma quantidade maior, basta alterarmos o
	â€œ-1â€³ para o total que queremos.	 	 */
    
	
	/*****mostre uma mensagem informando que os dados foram salvos com sucesso (feito)*****/ 
	/********Retornou mensagem *****/
	echo "Usuário cadastrado com Sucesso!<br/>"
	."<br/>Nome:".$nome."<br/>E-mail: ".$email."<br/>Telefone: ".$telefone."<br/>Assunto: ".$assunto."<br/>Mensagem: ".$mensagem; 

	/****contato de retorno******/
	echo "<br/> Obrigada!!!<br/>"
	."<br/>Nome:".$nome."<br/> retornaremos o contato via <br/> ".$resultado."<br/>  "; 

	/********volta para pagina inicial *****/
	  /****Um link para voltar para index.php (feito)*****/
	echo "<br/> <a href='index.php'>Clique Aqui para Retornar à Página Inicial</a>"
?>

