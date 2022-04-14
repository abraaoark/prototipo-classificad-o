<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
    <div class="container"> <a class="navbar-brand" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
        <b>Classificadão</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="index.php">Inicio</a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços&nbsp;</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="serviçosTI.php">TI</a> <a class="dropdown-item" href="serviçosdomestico.php">Serviços Domesticos</a> <a class="dropdown-item" href="servicosgerais.php">Serviço Gerais</a> <a class="dropdown-item" href="cuidador.php">Cuidadores&nbsp;</a><a class="dropdown-item" href="todososservicos.php">Todos os serviço</a></div>
          </li>
        </ul>
      </div>
      <form class="form-inline my-0 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn my-2 my-sm-0 btn-primary" type="submit">Search</button>
      </form>
      <div class="row">
        <div class="col-md-8  offset-md-1" style=""><a class="btn navbar-btn ml-md-0 btn-light text-dark left:100px; ml-4" a="" href="login.php" >Login</a></div>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="">
    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-lg-6 col-10">
          <h1>Cadastrar</h1>
          <p class="mb-3">Insira as informações para a conclusão do cadastro em nosso site!!</p>
          <form class="text-left" method="POST" action="processa1.php">
            <div class="form-group"> <label for="nome_auto" style="">Nome Completo&nbsp;</label> <input type="text" class="form-control" id="nome_auto" name="nome_auto" placeholder="Seu nome" required=""> </div>
            <div class="form-group"> <label for="´RG">RG<br></label> <input type="text" class="form-control" id="RG" name="RG" placeholder="Seu RG" required=""> </div>
            <div class="form-group"> <label for="CPF">CPF</label> <input type="text" class="form-control" id="CPF" name="CPF" required="">
              <div class="form-group"> <label for="endereco">Endereço</label> <input type="text" class="form-control" id="endereco" name="endereco" required="">
                <div class="form-group"><label for="telefone">Telefone</label><input type="text" class="form-control" id="telefone" name="telefone" required=""></div>
              </div>
            </div>
            <div class="form-group"> <label for="email">Email</label> <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" required=""> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="senha">Senha</label> <input type="password" class="form-control" id="senha" name="senha" placeholder="" required=""> </div>
              <div class="form-group col-md-6"> <label for="senha">Confirmar Senha</label> <input type="password" class="form-control" id="senha" name="senha" placeholder="" required=""> </div>
            </div>
            <p> </p>
            <div class="form-check" style="" ><a a href="termo.php"> <input class="form-check-input" type="checkbox" id="form21" value="on" ><a a href="termo.php"> <a href="termo.php"> Ao clicar em cadastrar voce concorda com os termos e condições do serviço</a></div>
            <div class="form-group">
            </div> <button type="submit"  value="off" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <b>&nbsp;Classificadão</b>
          <ul class="nav mx-md-auto d-flex justify-content-center">
          <li class="nav-item"> <a class="nav-link active" href="index.php">Inicio</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Perguntas.php">Perguntas</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Sobre.php">Sobre&nbsp;</a> </li>
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