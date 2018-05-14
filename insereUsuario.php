<?php
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
        echo "user already exists";

    }else{//cadastrar novo usuario
        $sql = "INSERT INTO usuarios (user, senha, email)
        VALUES ('$login', '$senha', '$email')";        
        if ($conexao->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
        }
        
    }
    $conexao->close();

?>