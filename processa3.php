<html>
<body>	
<?php
session_start();
include_once("conexao.php");


$EM_nome = filter_input(INPUT_POST, 'nomeconte', FILTER_SANITIZE_STRING);
$EM_razao_social = filter_input(INPUT_POST, 'nome_emp', FILTER_SANITIZE_STRING);
$EM_CNPJ = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$EM_Endereço = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$EM_telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$EM_ramo_de_atividade = filter_input(INPUT_POST, 'ramo_atividade', FILTER_SANITIZE_STRING);
$EM_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$EM_senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$EM_confsenha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO Empresa (EM_nome, EM_razao_social, EM_CNPJ, EM_Endereço, EM_telefone, EM_ramo_de_atividade, EM_email, EM_senha, EM_confsenha) VALUES ('$EM_nome', '$EM_razao_social', '$EM_CNPJ', '$EM_Endereço', '$EM_telefone', '$EM_ramo_de_atividade', '$EM_email', '$EM_senha', '$EM_confsenha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}

?>
</body>
</html>

