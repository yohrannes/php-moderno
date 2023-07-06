<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 style="text-align: center;">Trabalhando com números aleatórios</h1>
        <?php
            $numero = $_GET["numero"] ?? "sem numero";
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        ?>
        <input type="submit" value="Gerar outro">
    </main>
</body>
</html>