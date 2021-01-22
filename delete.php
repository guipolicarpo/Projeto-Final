<?php

    require_once 'conexao.php';

    if (isset($_GET['idcardapio'])) {
        $sql = 'delete from tbl_cardapio where idcardapio='.$_GET['idcardapio'].';';
        mysqli_query($conexao, $sql);

        $redirect = 'location: ../sistema.php';
    }

    if (isset($_GET['idunidade'])) {
        $sql = 'delete from tbl_unidade where idunidade='.$_GET['idunidade'].';';
        mysqli_query($conexao, $sql);

        $redirect = 'location: ../sistema.php?rel=U';
    }

    if (isset($_GET['idreserva'])) {
        $sql = 'delete from tbl_reserva where idreserva='.$_GET['idreserva'].';';
        mysqli_query($conexao, $sql);

        $redirect = 'location: ../sistema.php?rel=R';
    }

    if (isset($_GET['idemails'])) {
        $sql = 'delete from tbl_emails where idemails='.$_GET['idemails'].';';
        mysqli_query($conexao, $sql);

        $redirect = 'location: ../sistema.php?rel=E';
    }

    
    mysqli_close($conexao);

    header($redirect);
?>