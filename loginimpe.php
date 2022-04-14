<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
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
        <div class="col-md-8  offset-md-1" style=""><a class="btn navbar-btn ml-md-0 btn-light text-dark left:100px; ml-4">Login</a></div>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="background-image: url(&quot;https://static.pingendo.com/cover-bubble-dark.svg&quot;); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5 w-50" style="">
          <h1 class="mb-4"><b>Login&nbsp;<br></b>(Empresarial)</h1>
          <form style="" method="POST" action="Login4.php">
            <div class="form-group"> <input type="email" class="form-control" placeholder="Enter email" id="usuario" name="usuario"> </div>
            <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Password" id="senha" name="senha"> <small class="form-text text-muted text-right">
              </small> </div><a href="Escolhercadastro.php" class="">Criar conta<br></a><a href="reculperaconta.php"> Recuperar conta</a>
            <p>
            </p>
            <button type="submit" class="btn btn-primary" value="entrar" id="entrar" name="entrar">Entar</button>
          </form>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>