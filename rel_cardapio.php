<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<br>
<table class="table table-dark">
  <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Código</th>
        <th scope="col">Imagem</th>
        <th scope="col">Tipo</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'functions/conexao.php';

            if ($_GET['car'] == 'L') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Lanche";';
            }

            if ($_GET['car'] == 'P') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Pastel";';
            }

            if ($_GET['car'] == 'POR') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Porção";';
            }

            if ($_GET['car'] == 'B') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Bebida";';
            }

            if ($_GET['car'] == 'S') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Sorvete";';
            }

            if ($_GET['car'] == 'SAL') {
                $sql = 'select * from tbl_cardapio where cardapio_tipo="Salgado";';
            }

            $resultado = mysqli_query($conexao, $sql);

                while ($linhas = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<th scope="row">'.$linhas['idcardapio'].'</th>';
                    echo '<td>'.$linhas['cardapio_codigo'].'</td>';
                    echo '<td>'.$linhas['cardapio_image'].'</td>';
                    echo '<td>'.$linhas['cardapio_tipo'].'</td>';
                    echo '<td>'.$linhas['cardapio_nome'].'</td>';
                    echo '<td>'.$linhas['cardapio_descricao'].'</td>';
                    echo '<td>R$ '.number_format($linhas['cardapio_preco'], 2, ',', '.').'</td>';
                    echo '<td><a href="functions/delete.php?idcardapio='.$linhas['idcardapio'].'"><i class="fas fa-trash-alt"></a></i></td>';
                    echo '</tr>';
                }
            

            mysqli_close($conexao);
        ?>
    </tbody>
</table>