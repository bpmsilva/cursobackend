<?php

    session_start();

    function loadForm() {
        // Código HTML do formulário de login
        echo '<form action="login.php" method="post">';
        echo '<input type="text" name="username">';
        echo '<input type="password" name="password">';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }

    function loadLogout() {
        // Código HTML do formulário de logout
        echo '<form action="login.php" method="post">';
        echo '<input type="hidden" name="logout" value="1">';
        echo '<input type="submit" value="Sair">';
        echo '</form>';
    }

    if (isset($_POST['logout'])) {
        // Faz logout do usuário se a variável de logout estiver definida
        $_SESSION = [];
        session_destroy();

        // Exibe mensagem de logout e carrega o formulário de login
        echo "<h1>Você saiu do sistema!</h1>";
        loadForm();
        exit;
    }

    if (isset($_SESSION['username'])) {
        // Se o usuário já estiver logado, exibe uma mensagem e o formulário de logout
        // Por motivos de simplificação:
        //     - Não estamos verificando mudanças no banco de dados
        //     - Não estamos implementando um tempo limite de inatividade
        //     - Não estamos escapando os dados do usuário para exibição
        echo "<h1>Você já está logado como " . $_SESSION['username'] . "</h1>";
        loadLogout();
    } else if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == '' || $_POST['password'] == '') {
            echo "<h1>Usuário e senha não podem ser vazios!</h1>";
            loadForm();
            exit;
        }

        // devemos verificar se o usuário e senha estão corretos        
        $pdo = new PDO('mysql:host=localhost;dbname=loja-informatica', 'root', '');
        // Por motivos de simplificação, não estamos utilizando prepared statements,
        // o que é altamente recomendado para evitar SQL Injection
        $stmt = $pdo->query(
            "SELECT * FROM funcionarios WHERE email = '{$_POST['username']}' AND senha = '{$_POST['password']}'"
        );

        if ($stmt->rowCount() > 0) {
            // login bem sucedido
            $_SESSION['username'] = $_POST['username'];
            echo "<h1>Login bem sucedido!</h1>";
            loadLogout();
        } else {
            // login falhou
            echo "<h1>Login falhou!</h1>";
            loadForm();
        }
    } else {
        loadForm();
    }
?>