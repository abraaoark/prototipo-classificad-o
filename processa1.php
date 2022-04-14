<html>
<body>	
<?php
session_start();
include_once("conexao.php");

$AN_nome = filter_input(INPUT_POST, 'nome_auto', FILTER_SANITIZE_STRING);
$AN_RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
$AN_CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$AN_endereço = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$AN_telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$AN_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$AN_senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$AN_confsenha = filter_input(INPUT_POST, 'AN_confsenha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO Anuciante (AN_nome  , AN_RG, AN_CPF, AN_endereço, AN_telefone, AN_email, AN_senha, AN_confsenha) VALUES ('$AN_nome', '$AN_RG', '$AN_CPF', '$AN_endereço', '$AN_telefone', '$AN_email', '$AN_senha', '$AN_confsenha')";
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

