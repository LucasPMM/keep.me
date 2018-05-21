<?php
    session_start();
    require "../INCs/controleLogin.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<div class="container">
		
		<div class="row card-panel z-depth-5 center-align">
			<div class="row">
				<a class="btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
			</div>
			<form class="col s12" action="confereLogin.php"  method="post">
				<div class="row">
					<div class="input-field">
						<input placeholder="Nome" id="first_name" type="text" class="validate" name="user" required>
						<label for="first_name">Usuário</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<input id="password" type="password" class="validate" name="senha" required>
						<label for="password">Senha</label>
					</div>
				</div>
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>					
			</form>
			<div class="row">
				<a href="../cadastro/cadastro.php">
					<button class="btn waves-effect waves-light" type="submit">Cadastrar
						<i class="material-icons right"></i>
					</button>	
				</a>
			</div>
			<?php
				require "../utils/errors.inc";
			?>
		</div>
	</div>

	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>