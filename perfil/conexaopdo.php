<?php 
    session_start();
    const host = 'localhost';
    const dbname = 'tgp';
    const user = 'root';
    const senha = '';


    $link = mysqli_connect("127.0.0.1", "root", "", NULL, "3306", NULL)
        or die(mysqli_error());

mysqli_select_db($link, "projetoalbum") or die(mysqli_error($link));

    try {
        $pdo = new PDO('mysql:host='.host.';dbname='.dbname.'', user, senha, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Vai mostrar erros caso exista.
    }catch (Exception $e) { /*Pegue a exception e coloque na variável $e */
        echo 'Erro ao conectar ao banco de dados';
        echo $e;
    } 
?>