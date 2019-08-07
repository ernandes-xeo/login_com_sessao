<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <style>
        /*
        *{
            margin: 0;
            padding: 0;                
        }
        form{
            width: 250px;
            height: auto;
            margin: 10px auto;
            padding: 5px 5px;
        }
        fieldset{
            padding: 10px;
        }
        
        fieldset legend{
            border: thin solid black;
            background: #dedede;
            padding: 8px;
        }
        label{
            width: 100%;
            display: block;
            margin: 10px 0 0;
        }
        */
    </style>
    <body>
        <form method="post" action="validarAcesso.php">
            <fieldset id="fieldLogin">
                <legend>Login</legend>
                <label>Usuario:</label>
                <input name="usuario" type="text" id="usuario"/>
                <label>Senha:</label>
                <input name="senha" type="password" id="senha"/>
                <input class="botao" type="submit" value="Logar"/>
            </fieldset>
        </form>
    </body>
</html>