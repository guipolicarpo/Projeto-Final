<?php
    session_start();

    require_once 'conexao.php';

    $bd_acesso = '';


    $query = 'select usuario_login, usuario_senha from tbl_usuario where usuario_login="'.$_POST['campo-login'].'" and usuario_senha="'.md5($_POST['campo-senha']).'";';


    $result = mysqli_query($conexao, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $bd_login = $row['usuario_login'];
        $bd_acesso = 'OK';
    }

    if ($bd_acesso == 'OK') {
        $_SESSION['login'] = $bd_login;
        $_SESSION['acesso']= $bd_acesso;
        header('Location: ../sistema.php');
        exit;
    }
    $status = 'LOGIN e/ou SENHA incorretas !';
    header('Location: ../telalogin.php?status='.$status);
?>