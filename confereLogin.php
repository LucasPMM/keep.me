<?php
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
        }
        else{ //retornara para o login.php e informar que a senha está errada
            echo "senha errada";
        }
    }else{//usuario inexistente
        //retornar para a pagina de login e informar que o nome de usuario está incorreto
    }
    $conexao->close();
?>