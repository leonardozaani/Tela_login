<?php
require_once 'classes/Sessao.php';

Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Área Restrita</title></head>
<body>
<h2>Bem-vindo, <?php echo $usuario->getNome(); ?>!</h2>
<p>Seu e-mail: <?php echo $usuario->getEmail(); ?></p>
<?php if (isset($_COOKIE['email'])): ?>
    <p>(Lembrado no cookie): <?php echo $_COOKIE['email']; ?></p>
<?php endif; ?>
<a href="logout.php">Logout</a>
</body>
</html>