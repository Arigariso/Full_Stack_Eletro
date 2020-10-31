<?php
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$bancodados = "fseletro"; 
	$conn = mysqli_connect($servidor, $login, $senha, $bancodados);
 
    if (!$conn) {
        die ("Falha na conexão com o BD " . mysqli_connect_error());
	}	
	
	if(isset($_POST['nome']) && isset($_POST['msg'])) {
		$nome = $_POST['nome'];
		$msg = $_POST['msg'];

		$sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
		$result = $conn->query($sql);
	}
