<?php
    session_start();
    $login = $_POST["user"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
 
    $host = "localhost";
    $usuariodb = "root";
    $senhadb = "";
    $db = "keepme";
    $tabela = "usuarios";

    $conexao = new mysqli($host, $usuariodb, $senhadb, $db);

    $query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE user='".$login."'");

    if(mysqli_num_rows($query) > 0){//usuario ja existente
        //retornar para a pagina anterior informando que o usuario já exite!
        $_SESSION['error'] = 3; //usuário já existe
        $redirect = "cadastro.php";
        header("location:$redirect");
    }else{//cadastrar novo usuario
        $sql = "INSERT INTO usuarios (user, senha, email)
        VALUES ('$login', '$senha', '$email')";        
        if ($conexao->query($sql) === TRUE) {//Usuario Cadastrado com sucesso!
            //ir para a pagina de login
            $redirect = "../login/login.php";
            header("location:$redirect");
        } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
        }
    }
    $conexao->close();
?>