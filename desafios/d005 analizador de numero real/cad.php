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
        <h1 style="text-align: center;">Analisador de número Real</h1>
        <?php
            $numero = $_GET["numero"] ?? "sem numero";
            $numerointeiro = intval($numero);
            $numerofractal = abs(fmod($numero, 1));
            echo "<p>Analisando o número <strong>$numero</strong> informado pelo usuário:</p>";
            echo "
            <ul>
                <li>A parte inteira do numerio é $numerointeiro</li>
                <li>A parte fracionária do numerio é $numerofractal</li>
            </ul>";
        ?>
        <p id="voltar"><a href="javascript:history.go(-1)">< - Voltar</a></p>
    </main>
</body>
</html>
<li></li>