<?php
require_once 'db_connect.php';

//verificando se o indice 'btn' cadastar existe na super glogal POST

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

	//comandos para inserir no bando de dados

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	//verificando de se conseguiu fazer essa query

	if(mysqli_query($connect, $sql)):
		header('Location: ../index.php?sucesso');
	else:
		header('Location: ../index.php?erro');
	endif;


endif;