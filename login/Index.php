<?php
header("Location: login.php");
exit;


/cadastro.php
--------------
<!DOCTYPE html>
<html>
<head><title>Cadastro</title></head>
<body>
<h2>Cadastro</h2>
<form action="processa_cadastro.php" method="POST">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>