<?php

    error_reporting(0);
    session_start();

    if (isset($_SESSION['acesso'])) {
        if ($_SESSION['acesso'] == 'OK') {
        } else {
            $status = 'Usuário não autenticado!';
            header('Location: index.php?status='.$status);
            session_destroy();
            exit;
        }
    } else {
        $status = 'Usuário não autenticado!';
        header('Location: index.php?status='.$status);
        session_destroy();
        exit;
    }

?>