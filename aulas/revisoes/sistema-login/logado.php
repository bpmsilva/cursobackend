<?php

session_start();

$USUARIO = 'bernardo';
$SENHA = '123';

$method = $_SERVER['REQUEST_METHOD'];

if (isset($_POST['sair'])) {
    $_SESSION = [];
    session_destroy();
    header("Location: http://localhost/cursobackend/aulas/revisoes/sistema-login/login.html");

    // O exit é necessário para que o código abaixo não seja executado.
    exit;
}

if ($method === "GET" && isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {
    echo "O usuário já está logado.";
    ?>
    <form action="http://localhost/cursobackend/aulas/revisoes/sistema-login/logado.php" method="POST">
        <input type="submit" value="Logout" name="sair">
    </form>
    <?php
    exit;
}

if ($method != "POST") {
    header("Location: http://localhost/cursobackend/aulas/revisoes/sistema-login/404.html");
    exit;
}

if (!isset($_POST["usuario"]) || !isset($_POST['senha'])) {
    echo "Não foram enviadas todas as informações necessárias.";
    echo '<a href="http://localhost/cursobackend/aulas/revisoes/sistema-login/login.html">Formulário</a>';
    exit;
}

if ($_POST["usuario"] === "" || $_POST['senha'] === "") {
    echo "Não foram enviadas todas as informações necessárias.";
    echo '<a href="http://localhost/cursobackend/aulas/revisoes/sistema-login/login.html">Formulário</a>';
    exit;
}

$usuario = strtolower($_POST["usuario"]);
$senha = $_POST["senha"];

if ($USUARIO === $usuario && $SENHA === $senha) {
    // O usuário logado.

    // o session_regenerate_id(true) é necessário para que o PHP gere um novo ID de sessão,
    // evitando que o usuário seja vítima de ataques de fixação de sessão.
    session_regenerate_id(true);
    $_SESSION["usuario"] = $usuario;

    header('Location: http://localhost/cursobackend/aulas/revisoes/sistema-login/logado.php');
    exit;    
} else {
    echo "Usuário ou senha inválidos";
}

?>