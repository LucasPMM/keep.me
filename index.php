<?php
    session_start();
    require "INCs/estaLogado.inc";
    echo "você está no index";
//Criar um cabeçalho que verifica se existe um usuario logado na sessão. Caso não tenha redirecionar para o login.php
?>

<br><a href="login/deslogar.php"> Sair</a>