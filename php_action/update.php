<?php
//iniciando a session
session_start();
require_once 'db_connect.php';

//verificando se o indice 'btn' cadastar existe na super glogal POST

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

	//filtando o campo id (hidden)

	$id = mysqli_escape_string($connect, $_POST['id']);


	//comandos para inserir no bando de dados

	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE  id = '$id'";

	//verificando de se conseguiu fazer essa query

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!!!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!!!";
		header('Location: ../index.php');
	endif;
endif;