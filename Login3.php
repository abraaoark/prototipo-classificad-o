<?php
session_start();
include_once("conexao.php");
$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
  if (isset($entrar)) 
  	{
	$verifica = mysqli_query($conn," SELECT *  FROM  contratante  WHERE CON_email ='$usuario' AND CON_senha = '$senha'") or die("erro ao selecionar");
	
	
	
	header("Location:logincontr.php");
	if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='logincontr.php';</script>";
        die();
      }
 	 
	
      else
	  {
		header("Location:../perfil/indexc.php");
       
      }
	  


	}
    //$verifica3 = mysqli_query($conn," SELECT *  FROM  Anuciante  WHERE EMP_email ='$usuario' AND EMP_senha = '$senha'") or die("erro ao selecionar");