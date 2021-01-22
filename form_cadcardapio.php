<?php

    require_once 'sistema.php';

?>
<div class="mb-form-quadro">
    <form enctype="multipart/form-data" action="functions/insert.php" method="POST">
        <?php
            require_once 'functions/conexao.php';
        ?>
        <div class="form-group-sm">
            <label for="">Cadastre o produto</label>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="formcad-codigo" type="text" class="form-control" id="" placeholder="Código (Ex: 2 Primeiras letras + Número = la01)" required>
            </div> 
        </div>


        <!-- INÍCIO - Formrow -->
        <div class="form-row">
        <div class="form-group col-md-6">
                    <div  class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="formcad-tipo"  id="" class="form-control">
                      <option value="Tipo">Tipo</option>
                        <option value="Lanche">Lanche</option>
                        <option value="Bebida">Bebida</option>
                        <option value="Porção">Porção</option>
                        <option value="Pastel">Pastel</option>
                        <option value="Salgado">Salgado</option>
                        <option value="Sorvete">Sorvete</option>
                    </select>
                    </div>
                </div>
            
            <!-- INÍCIO - Formgroup -->
            <div class="form-group-sm col-md-6">
                <input name="formcad-nome" type="text" class="form-control" id="" placeholder="Nome (Ex: X-Salada)" required>
            </div>
            <!-- FIM - Formgroup -->
            
            <div class="form-group-sm col-md-6">
                <input name="formcad-descricao" type="text" class="form-control" id="" placeholder="Descrição (Ex: Pão, Hamburguer, Alface, Tomate, Queijo...)" required>
            </div>

            <div class="form-group-sm col-md-6">
                <input name="formcad-preco" type="text" class="form-control" id="" placeholder="Preço (Ex: 7,50)" required>
            </div>

        </div><br>

        <div class="form-group col-md-3">
        <label for="">Escolha a Foto Ilustrativa do Produto</label>
        <input type="file" name="formcad-imagem" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="col-md-12 mt-3">
                <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Atenção!</h4>
  <p>* Código * Cadastrar os códigos dos produtos em sequência! (Ex: la01, la02, la03...) Consulte o Relatório em casa de dúvidas!.</p>
  <p>* Imagem Ilustrativa * Cadastrar as imagens com nome em sequência! (Ex: lanche1, lanche2, lanche3...) Consulte o Relatório em casa de dúvidas!.</p>
</div>


    <button name="formcad-cardapio" type="submit" class="btn btn-success"><i class="fas fa-keyboard"></i> Cadastrar</button>
    <button name="formlimpar-cardapio" type="reset" class="btn btn-info"><i class="fas fa-broom"></i> Limpar</button>
    <button name="formalterar-cardapio" type="submit" class="btn btn-warning"><i class="fas fa-exchange-alt"></i> Alterar</button> &nbsp; Altere pelo código do produto!

    </form>

 
</div>