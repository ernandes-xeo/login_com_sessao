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

        ?>
    </head>
    <body>
        
        Aqui é o admin
        <?php echo $_SESSION['data'];        ?>

        </br>
        <a type="button" href="site.php">site</a>
        <a type="button" href="logoff.php">desconectar</a>
    </body>
</html>
