<?php
date_default_timezone_set('UTC');


function iniciaPagina() { 
echo "<html><head><meta charset='utf-8'>";
echo "<html><head><title>Trabalho 3</title>";
echo "<link rel='stylesheet' type='text/css' href='estilo.css'/>";
echo "</head><body>";
}


function criaCabecalho() {
echo "<div class='reg1'><div/>";
 echo" Olá $logado"; 
}

function finalizaPagina(){
echo "</body>
<footer>
Produced by OurGroup
</footer>
</html>";
}



function criaMenu(){
	     	echo "<div class='login'>";

// corpo da página principal
 echo '<form action="login1.php" method="POST">
		Usuario : <input name="login" value="'.$login.'"><br>
		Senha : <input type="password" name="senha" value="'.$senha.'"><br>
		<input type="submit" value="Login"><br>
		<input type="checkbox" name="lembrarLogin" value="1" '.$lebrarSenha.'> Lembrar login
		</form>';
	
$mm[0][0] = "<a href='index.php'>Página Inicial</a>";
$mm[0][1] = null;
$mm[0][2] = null;
$mm[1][0] = "Usuários";
$mm[1][1] = "<a href='pesquisa.php'>Pesquisa</a>";
$mm[1][2] = "<a href='cadastro.php'>Cadastro</a>";
$mm[2][0] = "<a href='links.php'>Links de Interesse</a>";
$mm[2][1] = null;
$mm[2][2] = null;
$mm[3][0] = "Informações";
$mm[3][1] = "<a href='contato.php'>Contato</a>"; 
$mm[3][2] = "<a href='sobre.php'>Sobre</a>";

echo "<div class='menu'><ul>";

for($i=0; $i<=3; $i++){
	for($j=0; $j<=2; $j++){
		
		if($j==0){
		echo "<li>".$mm[$i][$j];
		
		}
		if($j==1 and $mm[$i][$j]!=null){
			echo "<ol><li>".$mm[$i][$j]."</li>";
		}
		if($j==2 and $mm[$i][$j]!=null){
			echo "<li>".$mm[$i][$j]."</li></ol></li>";
		}
	echo "</li>";		
	}
}

echo "</ul></div>";

}


?>