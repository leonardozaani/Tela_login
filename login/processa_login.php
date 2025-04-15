<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = Autenticador::autenticar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if (isset($_POST['lembrar'])) {
        setcookie("email", $usuario->getEmail(), time() + 3600, "/");
    }

    header("Location: dashboard.php");
    exit;
} else {
    echo "<p>Login inválido</p>";
    echo "<a href='login.php'>Voltar</a>";
}
