<?php
     /*recebdo os dados via post*/
	 $nome = $_POST["nome_completo"];
	 $idade = $_POST["idade"];
	 $sexo = $_POST["ButtonSexo"];
	 $eCivil = $_POST["EstadoCivil"];
	 $cpf = $_POST["cpf"];
	 $data = $_POST["data"];
	 $foto = $_POST["foto"]; /*esta com falha
	 // Notice: Undefined index: foto in C:\xampp\htdocs\tecwebmari\cadastra_usuario.php on line 9*/
 

    /*4. No arquivo cadastra_usuario.php conecte com o banco de dados (feito)*/
	/******conexao com banco *******/
	$conexao = mysql_connect("localhost", "root", "");
	$database = mysql_select_db("tecweb_trabalho",$conexao)or die("erro na base de dados: ".mysql_error());
	
	/******recebendo dados e inserindo na tabela *******/
	/***insira os dados enviados pelo formulário cadastroUsuario.php na tabela Usuario. (feito)******/
	$sql = "INSERT INTO usuario( nome,idade,sexo,ecivil,cpf,data) 
	values ('$nome',$idade,'$sexo','$eCivil',$cpf,$data)"; 
	
	/*****Finalizou a conexao********/
	$resultado = mysql_query($sql) or die(mysql_error());
	
	mysql_close($conexao);
	
	/*Apos inserir, mostre uma mensagem informando que os dados foram salvos com sucesso ( e um link para voltar para index.php*/
	/********Retornou mensagem *****/
	echo 'Usuário cadastrado com Sucesso!<br/>'
	.$nome.'<br/>Idade: '.$idade.'<br/>Sexo: '.$sexo.'<br/>Estado Civil: '.
	$eCivil.'<br/>CPF: '.$cpf.'<br/>Nascido em: '.$data.'<br/>'; 
     
	 /********volta para pagina inicial *****/
	echo '<a href="index.php">Clique Aqui para Retornar à Página Inicial</a>';

?>


