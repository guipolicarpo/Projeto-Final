<!-- Bootstrap - INICIO -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
<!-- Bootstrap - FIM -->
 <!-- Estilo da FERRAMENTA - INICIO -->
 <link rel="stylesheet" href="css/style.css">
<!-- Estilo da FERRAMENTA - FIM -->

<div id="div-form-login">
    <div class="div-form-login-container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-10">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="functions/login.php" method="post">
                        <h3 class="text-center text-dark">Informe suas Credenciais</h3>
                        <div class="form-group">
                            <label for="username" class="text-dark">Qual seu Usuário?</label><br>
                            <input type="text" name="campo-login" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Qual Sua Senha?</label><br>
                            <input type="password" name="campo-senha" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button  type="submit" name="index_login" class="btn btn-dark btn-md"> <i class="fas fa-sign-in-alt"></i> Entrar </button>
                            <button  type="button" name="index_home" class="btn btn-dark btn-md" onclick="window.location.href = 'index.php';" >Voltar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>