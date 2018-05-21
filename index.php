<?php
    require "usuario/class_user.inc";
    session_start();
    require "INCs/estaLogado.inc";
    $usuario = $_SESSION['user'];    
?>
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <div class="navbar">
        <nav> 
            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                    <div class="background">
                    <img src="img/backuser.jpg">
                    </div>
                    <img class="circle" src="img/panda.png">
                    <span class="white-text name"> <?=$usuario->nome?> </span>
                    <span class="white-text email"> <?=$usuario->email?> </span>
                </div></li>
                <li><a href="#!"><i class="material-icons">cloud</i>Perfil</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="login/deslogar.php">Sair</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons fa-9x">menu</i></a>
        </nav>
    </div>

	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>