<?php
  require'./conexao.php';

$sql_busca = "SELECT * FROM imagem_perfil";
$mostrar = mysqli_query($conn, $sql_busca);
$qtd_arquivo = mysqli_num_rows($mostrar);
$msg_sem = ($qtd_arquivo<=0)?"NÃO HÁ ARQUIVOS NO SISTEMA!" : "";
?>
<head lang="pt-br">
<meta charset="UTF-8">
<p><?=$msg_sem?></p>
<div class="fuffy">
<?php
$arquivo = mysqli_fetch_array($mostrar);
$arquivo = $arquivo['arquivo'];
$sql = mysqli_query($conn, "SELECT * FROM imagem_perfil where codigo = '100'");
while($aux = mysqli_fetch_assoc($sql))
{
echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
echo "<p style='left: 1365px; top: 365px' id='texto'>".$aux["statu"]."</p>";
 }
 ?>
 <div class="drean">