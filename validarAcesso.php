<?php
// inícializa a sessão
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



if($usuario == 'xeo' && $senha == '12345') {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    $_SESSION['turma'] = "3TIA";
    $_SESSION['data'] = "07/08/19";
    header('location:site.php');
} else {
    unset($_SESSION['usuario']); // destrui a variavel
    unset($_SESSION['senha']);
    header('location:index.php');
}
