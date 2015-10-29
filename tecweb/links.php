
<?php

include "funcoes.php"; 
 
echo iniciaPagina();
echo criaCabecalho();
echo criaMenu();

$links[0]["nome"] = "<h2>Links de Interesse</h2>";
$links[0]["url"] =  null;
$links[1]["nome"] = "<h3>infowester</h3></a>";
$links[1]["url"] = "<a href='http://www.infowester.com/ti.php'>"; 
$links[2]["nome"] = "<h3>wikipedia</h3></a>";
$links[2]["url"] = "<a href='http://pt.wikipedia.org/wiki/Tecnologia_da_informação'>"; 
$links[3]["nome"] = "<h3>tecnologia</h3></a>";
$links[3]["url"] = "<a href='http://tecnologia.terra.com.br'>"; 

echo "<div class='regiao3'>";

for($i=0; $i<=3; $i++){
		echo $links[$i]["url"].$links[$i]["nome"];
}

echo "</div>";


echo finalizaPagina();
?>
