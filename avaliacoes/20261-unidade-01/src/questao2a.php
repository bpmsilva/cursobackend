<?php

function saudacao($nome = "visitante") {
    return "Olá, $nome!";
}

echo "<h1>" . saudacao("João") . "</h1>";
echo "<h1>" . saudacao() . "</h1>";

?>