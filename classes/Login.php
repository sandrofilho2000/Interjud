<?php

 class Login
 {
	if(empty($_POST['email']) || empty($_POST['senha'])){
		header('Location: ../index.php');
		exit();
	}

	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$_SESSION['email'] = $email;

	$query = "select * from users where email = '{$email}' and senha = MD5('{$senha}')";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);


	if($row==1){
		$_SESSION['usuario'] = $email;
		header('Location: ../painel.php');
		exit();
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: ../index.php');
		exit();
	}

}

?>