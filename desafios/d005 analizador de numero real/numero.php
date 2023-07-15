<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 style="text-align: center;">Analisador de número Real</h1>
        <?php
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

            $int = (int)$num;
            $fra = $num - $int;

            // 3,14 == int 3 == 3,14 - 3 == 0,14

            echo "<ul><li> A parte interia do munero é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";

            echo "<li> A parte fracionária do munero é <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">< - Voltar</button>
    </main>
</body>
</html>
<li></li>