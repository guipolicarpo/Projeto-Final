<?php
 session_start();
 session_destroy();
 header ('location: ../index.php?status=Sessão Encerrada com sucesso!');
?>