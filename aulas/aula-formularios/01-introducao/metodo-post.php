<h1>Formulário enviado com POST!</h1>
<?= var_dump($_POST); ?>

<?php
    // Boa prática: não exiba dados do usuário sem antes sanitizá-los
    echo htmlspecialchars($_POST["mensagem"]);
?>

<script>
    // Executa a mensagem enviada pelo formulário
    <?= $_POST["mensagem"]; ?>
</script>
