<?php

include_once 'conexao.php';

$arquivo = @$_FILES["arquivo"]["name"];
$tipo = @$_FILES["arquivo"]["type"];
$dir = "src/";
$mimeTypes = array("image/jpeg", "image/jpg", "image/png", "image/bmp", "image/gif");
$path = $dir.$arquivo;
$AN_ID = 3;


/* * **************** SALVAR FUNÇÃO FUNCIONANDO ************** */

    if (is_file(@$_FILES["arquivo"]["tmp_name"])) {
        if (file_exists($dir . $arquivo)) {
            $cont = 0;
            while (file_exists("src/[$cont]$arquivo")) {
                $cont++;
            }
            $arquivo = "[$cont]$arquivo";
        }

        if (in_array($tipo, $mimeTypes)) {
           
            //$query = ("INSERT INTO anuciante (nomeim, path) VALUES ('$arquivo','$path') WHERE $AN_ID");
              $query = ("UPDATE anuciante SET nomeim='$arquivo', path='$path' ");
 
            if (mysqli_query($link, $query)) {
                if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir . $arquivo)) {
                    echo "<script>alert('Arquivo enviado com sucesso');location='EditarPerfil.php'</script>";
                }
            }
        } else {
            echo "<script>alert('Tipo de arquivo inválido');location='index.php'</script>";
        }
    }
















//if(isset($_FILES['arquivo']))
//{
// $arquivo = $_FILES['arquivo'];

// if($arquivo['error'])
// die("Falha na comunicaçao");

//if($arquivo['size']>2097152)
// die("Arquivo muito grande");

//$pasta ="src/";
//$nomedoarquivo = $arquivo['name'];
//$novonomearquivo = uniqid();
//$extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

//if($extensao != "jpg" && $extensao !="png")
// die("arquivo errado");

///$path = $pasta.$novonomearquivo.".".$extensao;
//$deu_certo = move_uploaded_file($arquivo["tmp_name"],$path);

// if($deu_certo)
// {
// $mysqli->query("INSERT INTO anuciante (nomeim, path) VALUES ('$nomedoarquivo','$path')")or die($mysqli->error);

// header("Location: EditarPerfil.php");

// }
//else
//echo"<p>deu errado</p>";

//}