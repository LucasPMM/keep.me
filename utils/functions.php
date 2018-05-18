<?php

function Analisa_Erro($erro){
    if($erro == 1) // senha incorreta
        return "Senha incorreta.";
    else if($erro == 2) // usuario inexistente
        return "Usuario inexistente.";
    else if($erro == 3) // usuario já existe
        return "Usuario já existe.";
}

function Errors(){
    if(isset($_SESSION['error'])){
        if($_SESSION['error']=="valido"){
            return null;
        }
        $resposta = Analisa_Erro($_SESSION['error']);
        return $resposta;
    }
    else
        return null;
}

?>