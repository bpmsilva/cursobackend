<?php
    // Variáveis superglobais
    // $_SERVER
    echo "<h1>Variáveis Superglobais</h1>";
    echo '<h2>$_SERVER</h2>';
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    // $_GET
    echo '<h2>$_GET</h2>';
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    // $_POST
    echo '<h2>$_POST</h2>';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // $_FILES
    echo '<h2>$_FILES</h2>';
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // $_COOKIE
    echo '<h2>$_COOKIE</h2>';
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    // $_SESSION
    echo '<h2>$_SESSION</h2>';
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
