<div class="mb-form-quadro">
    <form action="functions/insert.php" method="POST">
        <?php
            require_once 'functions/conexao.php';
        ?>

        <div class="form-row">
            <div class="form-group col-md-3">
                <input id="" name="formcad-nomeunidade" type="text" class="form-control" id="" placeholder="Nome da Unidade (Ex: Unidade + Bairro)" required required>
            </div>
        </div>

        <div class="form-group">
            <label for="">Endereço da Unidade</label>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3 ">
                <input name="formcad-rua" type="text" class="form-control" id="" placeholder="Rua" required>
            </div>
            <div class="form-group col-md-3">
                <input name="formcad-bairro" type="text" class="form-control" id="" placeholder="Bairro"  required>
            </div>
            <div class="form-group col-md-1">
                <input name="formcad-numero" type="text" class="form-control" id="" placeholder="Número" required>
            </div>
            <div class="form-group col-md-3">
                <input name="formcad-cidade" type="text" class="form-control" id="" placeholder="Cidade" required>
            </div>
            <div class="form-group col-md-3">
                <input name="formcad-estado" type="text" class="form-control" id="" placeholder="Estado" required>
            </div>
            <div class="form-group col-md-2">
                <input name="formcad-cep" type="text" class="form-control" id="" placeholder="CEP" required>
            </div>
        </div>

        <div class="form-group">
            <label for="">Contato</label>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <input name="formcad-telefone" type="text" class="form-control" id="" placeholder="Telefone (Ex: (12) 99634-4685)" required>
            </div>
        </div>

        <div class="form-group">
            <label for="">Outros</label>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <input name="formcad-hfuncionamento" type="text" class="form-control" id="" placeholder="Hórario de Funcionamento (Ex: Dom a Dom - 13:00 às 23:30)" required>
            </div>

            <div class="form-group col-md-3">
                <input name="formcad-nmesas" type="text" class="form-control" id="" placeholder="Número de Mesas" required>
            </div>
        </div>

        <button name="formcad-unidade" type="submit" class="btn btn-success"> <i class="fas fa-keyboard"></i> Cadastrar</button>
        <button name="formlimpar-unidade" type="reset" class="btn btn-info"><i class="fas fa-broom"></i> Limpar</button>

    </form>
   
</div>