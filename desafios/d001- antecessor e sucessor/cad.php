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
        <h1 style="text-align: center;">Resultado Final</h1>
        <?php
            $numero = $_GET["numero"] ?? "sem numero";
            $numerosucessor = $numero + 1;
            $numeroantecessor = $numero - 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é $numeroantecessor</p>";
            echo "<p>O seu sucessor é $numerosucessor</p>";
        ?>
        <p id="voltar"><a href="javascript:history.go(-1)">< - Voltar</a></p>
    </main>
</body>
</html>