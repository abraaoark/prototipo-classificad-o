<!DOCTYPE html>
<html>
<?php

include("conexao.php");

$consulta = "SELECT * FROM anuciante";
$con = $mysqli->query($consulta) or die ($mysqli->error);
?>

<head></head>

<body style="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css" style="">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
    <div class="container"> <a class="navbar-brand" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    <b>Classificadão</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="indexc.php">Inicio</a> </li>
         
          <li class="nav-item"> <a class="nav-link" href="Perfiluser.php"><i class="fa fa-user fa-fw"></i>Perfil</a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços&nbsp;</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="serviçosTIl.php">TI</a> <a class="dropdown-item" href="serviçosdomesticol.php">Serviços Domesticos</a> <a class="dropdown-item" href="servicosgeraisl.php">Serviço Gerais</a> <a class="dropdown-item" href="cuidadorl.php">Cuidadores&nbsp;</a><a class="dropdown-item" href="todososservicosl.php">Todos os serviço</a></div>
          </li>
        </ul>
      </div>
      <form class="form-inline my-0 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn my-2 my-sm-0  btn-primary" type="submit">Search</button>
      </form>
      <div class="row">
        <div class="col-md-8  offset-md-1" style=""><a class="btn navbar-btn ml-md-0 btn-light text-dark left:100px; ml-4" a="" href="../login.php">Logout</a></div>
      </div>
    </div>
  </nav>
  <?php while($dado = $con->fetch_array()){?>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
          <?php 
                include_once 'conexao.php';
                $query = "SELECT * FROM anuciante";
                $result = mysqli_query($link, $query);
               while($array = mysqli_fetch_assoc($result)){
          ?>
          
            <div class="col-md-6 col-lg-3 order-2 order-md-1 p-0"> <img class="img-fluid d-block my-4 img-thumbnail border border-info rounded-lg" src="src/<?=$array['nomeim']?>" style=""  width="150px"> <br> </div><?php } ?> 
            <div class="d-flex flex-column justify-content-center p-3 col-md-6 offset-lg-1 align-items-start order-1 order-md-2" style="">
              <h3><b><u>Perfil</u></b>:&nbsp;<br><br><b>Nome</b>:<?php echo $dado["AN_nome"];?>&nbsp;&nbsp;<br><br><b>Email</b>:<?php echo $dado["AN_email"];?>&nbsp;<br><br><b>Telefone</b>:<?php echo $dado["AN_telefone"];?>&nbsp;<br><br><b>Profissão</b>: Cuidadora de Idosos</h3>
              <a class="btn btn-primary" href="EditarPerfil.php"><i class="fa fa-user fa-fw"></i>Editar Perfil</a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
          <h1><b><u>Serviços Disponivel Pelo Usuario</u>:</b></h1>
          <p class="mb-0">"Olá !! Meu nome é Sarah , sou uma recém cuidadora de idosos. Lembrando que também exerço essa profissão, estando a disposição na região de Sul de Minas, mas precisamente entre os municípios de São Lourenço e Itamonte. Os telefones e emails para contato estão nesse site, caso queiram me contratar , informações por esses meios de comunicação." </p>
        </div>
        <div class="col-lg-4 p-3">
          <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block w-100" src="http://localhost/src/unnamed%20(2).jpg"> </div>
              <div class="carousel-item"> <img class="d-block w-100" src="http://localhost/src/unnamed (13).jpg"> </div>
              <div class="carousel-item"> <img class="d-block w-100" src="http://localhost/src/cuidador-de-idosos.jpg"> </div>
              <div class="carousel-item"> <img class="d-block w-100" src="http://localhost/default/src/unnamed (2).jpg"> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <b>&nbsp;Classificadão</b>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="index.php">Inicio</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Sobrel.php">Pergunta</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Perguntasl.php">sobre</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">© 2021 Classificadão. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>