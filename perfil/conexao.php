<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "tgp";


$link = mysqli_connect("localhost", "root", "", NULL, "3306", NULL)
        or die(mysqli_error());

mysqli_select_db($link, "tgp") or die(mysqli_error($link));

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>