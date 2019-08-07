<?php
// inícializa a sessão
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'xeo' && $senha == 'xeo123') {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    $_SESSION['turma'] = "3TIA";
    header('location:site.php');
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
