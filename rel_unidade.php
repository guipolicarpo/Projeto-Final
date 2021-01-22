<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<br>
<table class="table table-dark">
  <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Rua</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Cep</th>
        <th scope="col">Número</th>
        <th scope="col">Telefone</th>
        <th scope="col">Horário</th>
        <th scope="col">Número de mesas</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'functions/conexao.php';

            
        
            $sql = 'select * from tbl_unidade;';
            $resultado = mysqli_query($conexao, $sql);

            while ($linhas = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                echo '<th scope="row">'.$linhas['idunidade'].'</th>';
                echo '<td>'.$linhas['unidade_nome'].'</td>';
                echo '<td>'.$linhas['unidade_rua'].'</td>';
                echo '<td>'.$linhas['unidade_bairro'].'</td>';
                echo '<td>'.$linhas['unidade_cidade'].'</td>';
                echo '<td>'.$linhas['unidade_estado'].'</td>';
                echo '<td>'.$linhas['unidade_cep'].'</td>';
                echo '<td>'.$linhas['unidade_numero'].'</td>';
                echo '<td>'.$linhas['unidade_telefone'].'</td>';
                echo '<td>'.$linhas['unidade_horariof'].'</td>';
                echo '<td>'.$linhas['unidade_ndemesas'].'</td>';
                echo '<td><a href="functions/delete.php?idunidade='.$linhas['idunidade'].'"><i class="fas fa-trash-alt"></a></i></td>';
                echo '</tr>';
            }

            mysqli_close($conexao);

        ?>
    </tbody>
</table>