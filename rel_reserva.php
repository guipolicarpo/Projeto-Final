
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<br>
<table class="table table-dark">
  <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Tamanho da Mesa</th>
        <th scope="col">Data</th>
        <th scope="col">Horário</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'functions/conexao.php';

            
        
            $sql = 'select * from tbl_reserva;';

            $resultado = mysqli_query($conexao, $sql);

            while ($linhas = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<th scope="row">'.$linhas['idreserva'].'</th>';
            echo '<td>'.$linhas['reserva_tamanhomesa'].'</td>';
            echo '<td>'.$linhas['reserva_data'].'</td>';
            echo '<td>'.$linhas['reserva_horario'].'</td>';
            echo '<td>'.$linhas['reserva_nome'].'</td>';
            echo '<td>'.$linhas['reserva_email'].'</td>';
            echo '<td>'.$linhas['reserva_telefone'].'</td>';
            echo '<td><a href="functions/delete.php?idreserva='.$linhas['idreserva'].'"><i class="fas fa-trash-alt"></a></i></td>';
            echo '</tr>';
            }

            mysqli_close($conexao);

        ?>
    </tbody>
</table>