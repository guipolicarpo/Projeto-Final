<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<br>
<table class="table table-dark">
  <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'functions/conexao.php';

            
        
            $sql = 'select * from tbl_emails;';

            $resultado = mysqli_query($conexao, $sql);

            while ($linhas = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<th scope="row">'.$linhas['idemails'].'</th>';
            echo '<td>'.$linhas['emails_cliente'].'</td>';
            echo '<td><a href="functions/delete.php?idemails='.$linhas['idemails'].'"><i class="fas fa-trash-alt"></a></i></td>';
            echo '</tr>';
            }

            mysqli_close($conexao);

        ?>
    </tbody>
</table>