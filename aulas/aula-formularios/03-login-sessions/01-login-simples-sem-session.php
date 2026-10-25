<?php
    $usuario = "roberval";
    $senha   = "ifba";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        if (isset($_GET["usuario"]) && isset($_GET["senha"])) {
            if ($_GET["usuario"] === $usuario && $_GET["senha"] === $senha) {
                $logado = true;
                echo "Senha e usuário corretos.<br>";
            } else {
                $logado = false;
                echo "Senha ou usuário incorretos.<br>";
            }
        }?>
        <?php if ($logado === false): ?>
            <form action="login2.php" method="GET">
                <div>
                    <input type="text" name="usuario">
                </div>
                <div>
                    <input type="password" name="senha">
                </div>
                <input type="submit" value="Enviar">
            </form>
        <?php endif ?>
</body>
</html>