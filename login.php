<form action="confereLogin.php"  method="post">
  User:
  <input type="text" name="user" required>
  Senha:
  <input type="text" name="senha" required>

  <input type="submit" value="Submit">
</form>

<?php
  require "errors.inc";
?>