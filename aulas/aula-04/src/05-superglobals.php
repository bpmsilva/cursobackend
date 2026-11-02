<h1>Título do Site!</h1>

<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === "GET" && !isset($_SESSION['identificao'])):

?>

    <h2>A requisição veio do método GET<h2>
    <form action="./superglobals.php" method="POST">
        <input type="text" name="identificao">
        <input type="submit" value="Enviar!">
    </form>

<?php
else:
    // POST
    if (!isset($_SESSION['identificao'])) {
        $_SESSION['identificao'] = $_POST["identificao"];
    }
?>
    <h2>A requisição veio do método POST<h2>
    <h2>Olá <?= $_SESSION["identificao"] ?> </h2>

<?php endif ?>
