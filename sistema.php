<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap - FIM -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

 <!-- Estilo da FERRAMENTA - INICIO -->
 <link rel="stylesheet" href="css/style.css">
<!-- Estilo da FERRAMENTA - FIM -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Tela Admin</title>
</head>
<body id="TelaSistema">
  <?php
    require_once 'functions/valida.php';
  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded" style="color:" >
  <a class="navbar-brand" href="sistema.php">PROJETO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-keyboard"></i> Cadastro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            echo '<a class="dropdown-item" href="sistema.php?menu=U"><i class="fas fa-home"></i> Unidade</a>';
            echo '<a class="dropdown-item" href="sistema.php?menu=C"><i class="fas fa-utensils"></i> Cardápio</a>';
          ?>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bars"></i> Relatório
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            echo '<a class="dropdown-item" href="sistema.php?rel=U"><i class="fas fa-home"></i> Unidade</a>';
            echo '<a class="dropdown-item" href="sistema.php?rel=R"><i class="fas fa-book"></i> Reservas</a>';
            echo '<a class="dropdown-item" href="sistema.php?rel=E"><i class="fas fa-envelope"></i> Email de Clientes</a>';
          ?>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-clipboard-list"></i> Cardápio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            echo '<a class="dropdown-item" href="sistema.php?car=L"><i class="fas fa-hamburger"></i> Lanches</a>';
            echo '<a class="dropdown-item" href="sistema.php?car=P"><i class="fas fa-cheese"></i> Pasteis</a>';
            echo '<a class="dropdown-item" href="sistema.php?car=POR"><i class="fas fa-bacon"></i> Porção</a>';
            echo '<a class="dropdown-item" href="sistema.php?car=B"><i class="fas fa-wine-glass"></i> Bebidas</a>';
            echo '<a class="dropdown-item" href="sistema.php?car=S"><i class="fas fa-ice-cream"></i> Sorvetes</a>';
            echo '<a class="dropdown-item" href="sistema.php?car=SAL"><i class="fas fa-egg"></i> Salgados</a>';

          ?>

        </div>
      </li>
     

    
    </ul>
    <div id="sair">
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="functions/sair.php"><button type="button" class="btn btn-danger"> <i class="fas fa-sign-out-alt"></i>  Sair</button></a>
      </div>
  </div>
</nav>

<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 'U') {
        include 'form_cadunidade.php';
    }

    if ($_GET['menu'] == 'C') {
        include 'form_cadcardapio.php';
    }


}

if (isset($_GET['rel'])) {

  if ($_GET['rel'] == 'U') {
      include 'rel_unidade.php';
  }

  if ($_GET['rel'] == 'R') {
    include 'rel_reserva.php';
  }

  if ($_GET['rel'] == 'E') {
    include 'rel_email.php';
  }
}

if (isset($_GET['car'])) {
  if ($_GET['car'] == 'L') {
    include_once 'rel_cardapio.php';
  }  
  if ($_GET['car'] == 'P') {
    include_once 'rel_cardapio.php';
  }  
  if ($_GET['car'] == 'POR') {
    include_once 'rel_cardapio.php';
  }  
  if ($_GET['car'] == 'B') {
    include_once 'rel_cardapio.php';
  }  
  if ($_GET['car'] == 'S') {
    include_once 'rel_cardapio.php';
  }  
  if ($_GET['car'] == 'SAL') {
    include_once 'rel_cardapio.php';
  }  
}

?>
    
</body>
</html>