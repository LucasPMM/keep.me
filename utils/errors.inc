<?php
    require "functions.php";
    if(Errors()){
        $resposta = Errors();
        $_SESSION['error'] = "valido";
?>
    <div>
        <span><?=$resposta?></span>
    </div>
<?php
    }
?>