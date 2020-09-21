<?php
//conecxao
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";


//estou utilizando o mysqi por conta so suporte a programação procedural ja o PDO é orientado a objetos
$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

//verificando erros

if(mysqli_connect_error()):
	echo "Erro na conecxão: ".mysqli_connect_error();
endif;