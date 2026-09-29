<?php
    session_start(); // Inicia a sessão para acessar as variáveis de sessão

    // Exemplos de variáveis globais do PHP
    echo '<h1>Exemplos de variáveis globais do PHP</h1>';

    echo '<h2>$_SERVER</h2>';
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';

    echo '<h2>$_GET</h2>';
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';

    echo '<h2>$_POST</h2>';
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    echo '<h2>$_FILES</h2>';
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    echo '<h2>$_COOKIE</h2>';
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';

    echo '<h2>$_SESSION</h2>';
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
