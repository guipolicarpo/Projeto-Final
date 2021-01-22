<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Projeto | Reserva</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">PROJETO</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Cardápio</a></li>
	        	<li class="nav-item"><a href="reservation.php" class="nav-link">Reserva</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contato</a></li>
            <li class="nav-item"><a href="telalogin.php" class="nav-link">Admin</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jfif');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Faça uma Reserva</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reserva <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section><br><br><br>
	
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url(images/bg_6.jpg);"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Reservar uma mesa</span>
	            <h2 class="mb-4">Solicite uma reserva abaixo</h2>
	          </div>
            <form action="functions/insert.php" method="POST">
              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Unidade</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="reserva-unidade" id="" class="form-control">
                      <?php
                          include_once('functions/conexao.php');

                          $sql = 'select * from tbl_unidade;';
                          $resultado = mysqli_query($conexao, $sql);

                          echo '<option value="">Escolha uma Unidade</option>';
                          while ($linhas = mysqli_fetch_assoc($resultado)) {                      
                            echo '<option value="'.$linhas['idunidade'].'">'.$linhas['unidade_nome'].'</option>';
                          }
                      ?>
            
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nome</label>
                    <input name="reserva-nome" type="text" class="form-control" placeholder="Seu nome">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input name="reserva-email" type="text" class="form-control" placeholder="Seu Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Telefone</label>
                    <input name="reserva-telefone" type="text" class="form-control" placeholder="Celular/Whatsapp">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Data</label>
                    <input name="reserva-data" type="date" class="form-control" id="" placeholder="Data">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Horário</label>
                    <input name="reserva-horario" type="time" class="form-control" id="" placeholder="Horário">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Número de Pessoas</label>
                    <div  class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="reserva-npessoas" id="" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Atenção!</h4>
  <p>Ao solicitar uma reserva de mesa, em caso de cancelamento ou duvídas, entre em contato conosco.</p>
</div>
                  <div class="form-group">
                    <input name="reserva-solicitar" type="submit" value="Solicitar" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section><br><br><br>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horário de Funcionamento</h2>
              <ul class="list-unstyled open-hours">
              <?php
                   include_once('functions/conexao.php');

                   $sql = 'select * from tbl_unidade;';
                   $resultado = mysqli_query($conexao, $sql);

                   while ($linhas = mysqli_fetch_assoc($resultado)) {                      
                    echo'<li class="d-flex"><span>'.$linhas['unidade_nome'].'</span><span>'.$linhas['unidade_horariof'].'</span></li>';
                   }
               ?>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Redes Sociais</h2>
              <p>Nos siga nas Redes Sociais e acompanhe todas nossas novidades.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.twitter.com/" target="_blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/" target="_blank"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.youtube.com/" target="_blank"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Para receber nossas novidades e promoções digite seu email abaixo.</p>
              <form action="functions/insert.php" method="POST" class="subscribe-form">
                <div class="form-group">
                  <input name="formreserva-email" type="text" class="form-control mb-2 text-center" placeholder="Digite seu email">
                  <input name="btreserva-email" type="submit" value="Receber" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/" target="_blank" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>