<?php
    session_start();
    require '../usuario/class_user.inc';
    $login = $_POST["user"];
    $senha = $_POST["senha"];
 
    $host = "localhost";
    $usuariodb = "root";
    $senhadb = "";
    $db = "keepme";
    $tabela = "usuarios";

    $conexao = new mysqli($host, $usuariodb, $senhadb, $db);

    $query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE user='".$login."'");

    if(mysqli_num_rows($query) > 0){//existe o usuario e é necessario verificar a senha
        
        $sql = "SELECT user, senha FROM usuarios WHERE user='".$login."'";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();

        if($row["senha"] == $senha){
            //inicia a sessão e manda para o index.php
            //Coloca o usuario na sessao
            $usuario = new User($nome_arq, $email_arq, $login_arq, $senha_arq, $carteira_arq);
            $_SESSION['user'] = $usuario;
            $_SESSION['login_store'] = $login;
            $_SESSION['senha_store'] = $senha;
            $redirect = "../index.php";
            header("location:$redirect");
        }
        else{ //retornara para o login.php e informar que a senha está errada
            $_SESSION['error'] = 1; //senha incorreta
            $redirect = "login.php";
            header("location:$redirect");
        }
    }else{//retornara para o login.php e informar que o usuario é inexistente
        $_SESSION['error'] = 2; //usuario inexistente
        $redirect = "login.php";
        header("location:$redirect");
    }
    $conexao->close();
?>