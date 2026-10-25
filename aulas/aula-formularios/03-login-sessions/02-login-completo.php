<?php
    session_start();

    // Mensagem de feedback
    $msg = '';

    // Variável para controlar o estado de login
    // Definida inicialmente como false por segurança
    $logged = false;

    if (isset($_POST['logout'])) {
        // Usuário solicitou logout
        $_SESSION = [];
        session_destroy();
        $logged = false;
        $msg = 'Você saiu da sua conta';
    } elseif (isset($_SESSION['username'])) {
        // Usuário já está logado e não solicitou logout
        // Como só há um usuário, o usuário é 'admin'
        $msg = 'Usuário já logado';
        $logged = true;
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Usuário está tentando fazer login
        if (isset($_POST['username']) && isset($_POST['password'])) {
            // Usuário forneceu credenciais
            $logged = false;
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username === 'admin' && $password === '1234') {
                session_regenerate_id(true);

                // Credenciais corretas
                $logged = true;
                $msg = 'Usuário logado com sucesso';
                $_SESSION['username'] = $username;
            } else {
                // Credenciais incorretas
                $logged = false;
                $msg = 'Usuário ou senha inválidos';
            }
        } else {
            // Usuário não forneceu todas as credenciais
            // Isso não deveria acontecer, pois os campos no front-end são obrigatórios
            // É possível que seja uma tentativa de burlar o sistema
            $logged = false;
            $msg = 'Por favor, preencha todos os campos'; 
        }
    } else {
        // Usuário não está logado e não solicitou logout
        // Possivelmente está acessando pelo método GET
        $logged = false;
        $msg = 'Por favor, faça login';
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h2>Página de Login</h2>
    <p><?php echo $msg; ?></p>
    <?php if ($logged): ?>
        <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <form method="POST" action="">
            <input type="submit" name="logout" value="Logout">
        </form>
    <?php else: ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>
