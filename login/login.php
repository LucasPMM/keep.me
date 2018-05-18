<?php
    session_start();
    require "../INCs/controleLogin.inc";
?>

<form action="confereLogin.php"  method="post">
	User:
	<input type="text" name="user" required>
	Senha:
	<input type="text" name="senha" required>

	<input type="submit" value="Submit">
</form>
<br><a href="../cadastro/cadastro.php"> Cadastrar</a>
<?php
  	require "../utils/errors.inc";
?>