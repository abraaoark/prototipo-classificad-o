<!DOCTYPE html>
<html>


            
            
<head></head>

<body class="">
  <!--?php
include 'upload.php'
?-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="EDPerfil.css" style="">
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
  <div class="py-5 w-100 mx-2 ml-5 mr-5 border-right border-top" style="">
    <div class="container">
      <div class="row" style="">
        <br style=""><br style="">
        <div class="col-md-6" style="">
          <form method="POST" action="upload.php" enctype="multipart/form-data">
          <?php 
                include_once 'conexao.php';
                $query = "SELECT * FROM anuciante";
                $result = mysqli_query($link, $query);
               while($array = mysqli_fetch_assoc($result)){
          ?>
          
            <div class="col-md-3" style="float: right:210px; top:0x; left:30px; margin: 56px"><img class="img-fluid d-block my-1 mx-1 img-thumbnail" src="src/<?=$array['nomeim']?>" style=""  width="150px"> <br>
            
            </div> <?php } ?> 
              <div class="col-md-12">
                <input name = "arquivo" type="file">
                <br>
                <br>
                <button type="submit" class="btn btn-primary" id="arquivo" value="arquivo">salvar</button>
              </div>
            
          </form>
         
        </div>
       
        <div class="col-md-6">
          <form method="POST" action=".php" enctype="multipart/form-data" id="c_form-h" class="">
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Nome</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputmailh" placeholder="Seu nome" required="required"> </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" style="">E-mail</label>
              <div class="col-10 col-md-10" style=""><input type="email" class="form-control" id="inputpasswordh" placeholder="email@exemplo.com" required="required">
              </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" style="">Telefone</label>
              <div class="col-10 col-md-10" style=""><input type="text" class="form-control" id="inputpasswordh" placeholder="99 99999-9999" required="required">
              </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" style="">Profissão</label>
              <div class="col-10 col-md-10" style=""><input type="text" class="form-control" id="inputpasswordh" required="required">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <b>&nbsp;Classificadão</b>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="index.php">Inicio</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Perguntasl.php">Pergunta</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Sobrel.php">sobre</a> </li>
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