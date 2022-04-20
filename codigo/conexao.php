<?php
//Variavel que armazena o nome/endereço do servidor
$host   = "localhost";

//Variavel que armazena o usuario do BANCO DE DADOS
$user   = "root";

//Variavel que armazena a senha do BANCO DE DADOS
$pass   = "1234";

//Variavel que armazena o nome do BANCO DE DADOS
$dbname = "aa";

//Variavel que armazena a porta do BANCO DE DADOS
$port   = 3306;
//Se tiver só um BANCO DE DADOS no computador, não necessita dessa variavel

//Variavel que armazena a função new PDO() que vai ser a responsavel por link
//O php com qualquer BANCO DE DADOS 
$conn   = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);
//Nessa função, no valor dos () começa dizendo qual é o BANCO DE DADOS
//Junto do seu host e logo após diznedo que é = a minha variavel que possui
//O valor do meu servidor

//Após ter identificado qual é o BANCO DE DADOS e qual servidor ele se encontra,
//Em sequida identifica qual é a sua porta, pela variavel com valor de sua porta (OPCIONAL)

//E por fim identifica qual é o banco de dados que o PDO tem que utilizar,
//Logo após o usuario e por fim a senha.

?>