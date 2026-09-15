<?php
    $horario = date("H");
    if ($horario >= 0 && $horario < 12) {
        $saudacao = "Bom dia!";
    } elseif ($horario >= 12 && $horario < 18) {
        $saudacao = "Boa tarde!";
    } else {
        $saudacao = "Boa noite!";
    }
?>
    <h1 style="color: red;"><?php echo $saudacao; ?> Tudo bem com você?</h1>
