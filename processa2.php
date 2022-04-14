<html>
<body>	
<?php
session_start();
include_once("conexao.php");



$CON_nome= filter_input(INPUT_POST, 'nome_contr', FILTER_SANITIZE_STRING);
$CON_RG = filter_input(INPUT_POST, 'RG_contr', FILTER_SANITIZE_STRING);
$CON_CPF = filter_input(INPUT_POST, 'CPF_contr', FILTER_SANITIZE_STRING);
$CON_endereço = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$CON_telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$CON_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$CON_senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$CON_confsenha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO Contratante (CON_nome, CON_RG, CON_CPF, CON_endereço, CON_telefone, CON_email, CON_senha, CON_confsenha) VALUES ('$CON_nome', '$CON_RG', '$CON_CPF', '$CON_endereço', '$CON_telefone', '$CON_email', '$CON_senha', '$CON_confsenha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: CadastroContr.php");
}

?>
</body>
</html>

