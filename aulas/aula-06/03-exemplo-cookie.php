<?php
if (isset($_POST['tema']) && ($_POST['tema'] === 'escuro' || $_POST['tema'] === 'claro')) {
    // Cookie tem validade de 30 dias (30 dias * 24 horas * 60 minutos * 60 segundos)
    setcookie('tema', $_POST['tema'], time() + 30 * 24 * 60 * 60);

    // Redireciona para a mesma página para evitar reenvio do formulário
    // 303 é um código de redirecionamento
    header('Location: ./03-exemplo-cookie.php', true, 303);
    exit;
}

// Tema padrão é claro, caso o cookie não exista
$tema = $_COOKIE['tema'] ?? 'claro';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preferência de tema</title>
    <style>
        body { background: white; color: black; }
        body.escuro { background: #222; color: white; }
    </style>
</head>
<body class="<?= $tema === 'escuro' ? 'escuro' : 'claro' ?>">
    <h1>Escolha o tema da página</h1>
    <form action="./03-exemplo-cookie.php" method="post">
        <button type="submit" name="tema" value="claro">Tema claro</button>
        <button type="submit" name="tema" value="escuro">Tema escuro</button>
    </form>
</body>
</html>
