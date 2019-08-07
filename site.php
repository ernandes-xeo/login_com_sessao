<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        session_start();
        if (!isset($_SESSION['usuario']) == true && 
                (!isset($_SESSION['senha']) == true)) {
            
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }

        $logado = $_SESSION['usuario'];
        $tuma = $_SESSION['turma'];
        //var_dump($_SESSION);
        ?>
    </head>
    <body>
        <?php
            echo 'Bem vindo ' . $logado . ' :)';
            echo "<h1> $tuma </h1>";
        ?>
        </br>
        <a type="button" href="logoff.php">desconectar</a>
    </body>
</html>
