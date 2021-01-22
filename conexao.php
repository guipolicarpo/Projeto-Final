<?php
    $conexao = mysqli_connect('localhost', 'projeto', 'P@ssw0rd', 'projeto') or die ('Não foi possível se conectar a Base de Dados!');
    mysqli_query($conexao, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>