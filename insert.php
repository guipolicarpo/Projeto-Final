<?php
    error_reporting(0);
    require_once 'conexao.php';
    session_start();

    if (isset($_POST['formcad-unidade'])) {
        
        $unidade_nome = $_POST['formcad-nomeunidade'];
        $unidade_rua = $_POST['formcad-rua'];
        $unidade_bairro = $_POST['formcad-bairro'];
        $unidade_cidade = $_POST['formcad-cidade'];
        $unidade_estado = $_POST['formcad-estado'];
        $unidade_cep = $_POST['formcad-cep'];
        $unidade_numero = $_POST['formcad-numero'];
        $unidade_telefone = $_POST['formcad-telefone'];
        $unidade_horarioof = $_POST['formcad-hfuncionamento'];
        $unidade_ndemesas = $_POST['formcad-nmesas'];

        $sql = 'insert into tbl_unidade(unidade_nome, unidade_rua, unidade_bairro, unidade_cidade, unidade_estado, unidade_cep, unidade_numero, unidade_telefone, unidade_horariof, unidade_ndemesas) values ("'.$unidade_nome.'", "'.$unidade_rua.'", "'.$unidade_bairro.'", "'.$unidade_cidade.'", "'.$unidade_estado.'", "'.$unidade_cep.'", "'.$unidade_numero.'", "'.$unidade_telefone.'", "'.$unidade_horarioof.'", "'.$unidade_ndemesas.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../sistema.php?menu=U';
    }


    if (isset($_POST['formcad-cardapio'])) {

        $cardapio_codigo = $_POST['formcad-codigo'];
        $cardapio_tipo = $_POST['formcad-tipo'];
        $cardapio_nome = $_POST['formcad-nome'];
        $cardapio_descricao = $_POST['formcad-descricao'];
        $cardapio_preco = $_POST['formcad-preco'];

        //Carregar Imagem via HTTP
        $cardapio_imagem = $_FILES['formcad-imagem'] ['tmp_name'];  // Nome Temporario 
        $imagem_tamanho = $_FILES['formcad-imagem'] ['size'];      // tamanho
        $imagem_tipo = $_FILES['formcad-imagem'] ['type'];         // tipo
        $imagem_nome = $_FILES['formcad-imagem'] ['name'];         // nome

        $diretorio_upload = '../images/cardapio/';
        $imagem_upload = $diretorio_upload.basename($imagem_nome);

        if (move_uploaded_file($_FILES['formcad-imagem']['tmp_name'], $imagem_upload)) {
            echo 'Imagem Carregada com Sucesso!';
    
        } else {
            echo 'Erro ao Carregar Imagem!';
        }

        $sql = 'insert into tbl_cardapio (cardapio_codigo, cardapio_tipo, cardapio_nome, cardapio_descricao, cardapio_preco, cardapio_image) values ("'.$cardapio_codigo.'", "'.$cardapio_tipo.'", "'.$cardapio_nome.'", "'.$cardapio_descricao.'", '.str_replace(',', '.', $cardapio_preco).', "'.basename($imagem_nome).'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../sistema.php?menu=C';
    }

    if (isset($_POST['formalterar-cardapio'])) {

        $cardapio_codigo = $_POST['formcad-codigo'];
        $cardapio_tipo = $_POST['formcad-tipo'];
        $cardapio_nome = $_POST['formcad-nome'];
        $cardapio_descricao = $_POST['formcad-descricao'];
        $cardapio_preco = $_POST['formcad-preco'];

        //Carregar Imagem via HTTP
        $cardapio_imagem = $_FILES['formcad-imagem'] ['tmp_name'];  // Nome Temporario 
        $imagem_tamanho = $_FILES['formcad-imagem'] ['size'];      // tamanho
        $imagem_tipo = $_FILES['formcad-imagem'] ['type'];         // tipo
        $imagem_nome = $_FILES['formcad-imagem'] ['name'];         // nome

        $diretorio_upload = '../images/cardapio/';
        $imagem_upload = $diretorio_upload.basename($imagem_nome);

        if (move_uploaded_file($_FILES['formcad-imagem']['tmp_name'], $imagem_upload)) {
            echo 'Imagem Carregada com Sucesso!';
    
        } else {
            echo 'Erro ao Carregar Imagem!';
        }

        $sql = 'update tbl_cardapio set cardapio_tipo="'.$cardapio_tipo.'", cardapio_nome="'.$cardapio_nome.'", cardapio_descricao="'.$cardapio_descricao.'", cardapio_preco='.str_replace(',' ,'.' ,$cardapio_preco).', cardapio_image="'.basename($imagem_nome).'" where cardapio_codigo="'.$cardapio_codigo.'";';
        mysqli_query($conexao, $sql);


        mysqli_error($conexao);
        $redirect = 'location: ../sistema.php?menu=C';
    }

    if (isset($_POST['reserva-solicitar'])) {
        $reserva_unidade = $_POST['reserva-unidade'];
        $reserva_nome = $_POST['reserva-nome'];
        $reserva_email = $_POST['reserva-email'];
        $reserva_telefone = $_POST['reserva-telefone'];
        $reserva_data = $_POST['reserva-data'];
        $reserva_horario = $_POST['reserva-horario'];
        $reserva_npessoas = $_POST['reserva-npessoas'];

        $sql = 'insert into tbl_reserva(reserva_fkunidade, reserva_tamanhomesa, reserva_data, reserva_horario, reserva_nome, reserva_email, reserva_telefone) values ("'.$reserva_unidade.'", '.$reserva_npessoas.', "'.$reserva_data.'", "'.$reserva_horario.'", "'.$reserva_nome.'", "'.$reserva_email.'", "'.$reserva_telefone.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../reservation.php';
    }

    if (isset($_POST['btindex-email'])) {
        $enviar_email = $_POST['formindex-email'];

        $sql = 'insert into tbl_emails(emails_cliente) values ("'.$enviar_email.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../index.php';
    }

    if (isset($_POST['btcardapio-email'])) {
        $enviar_email = $_POST['formcardapio-email'];

        $sql = 'insert into tbl_emails(emails_cliente) values ("'.$enviar_email.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../menu.php';
    }

    if (isset($_POST['btreserva-email'])) {
        $enviar_email = $_POST['formreserva-email'];

        $sql = 'insert into tbl_emails(emails_cliente) values ("'.$enviar_email.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../reservation.php';
    }

    if (isset($_POST['btcontato-email'])) {
        $enviar_email = $_POST['formcontato-email'];

        $sql = 'insert into tbl_emails(emails_cliente) values ("'.$enviar_email.'");';
        mysqli_query($conexao, $sql);
        $redirect = 'location: ../contact.php';
    }

    mysqli_close($conexao);
    header($redirect);

?>