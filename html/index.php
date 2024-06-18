<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apache com PHP Docker</title>
</head>
<body>
    <h1>Olá, mundo!</h1>
    <p>Este é um servidor Apache com PHP rodando em um contêiner Docker II.</p>
    <?php
        echo "<p>Data e hora atual: " . date('Y-m-d H:i:s') . "</p>";
    ?>
</body>
</html>
