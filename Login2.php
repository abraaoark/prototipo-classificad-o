<?php
session_start();
include_once("conexao.php");
$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
  if (isset($entrar)) 
  	{
    $verifica = mysqli_query($conn," SELECT *  FROM  Anuciante  WHERE AN_email = '$usuario'  AND AN_senha = '$senha'") or die("erro ao selecionar");

		header("Location:login.php");
	if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }
 	 
	
      else
	  {
		header("Location:../perfil/indexc.php");
       
      }
	  


	}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//	


















?>

