<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão.</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <?php
        $dividendo = $valor1;
        $divisor = $valor2;

        if ($divisor !==0){
        $quociente = (int) ($dividendo / $divisor);
        $resto = $dividendo % $divisor;

        echo "Dividendo: $dividendo<br>";
        echo "Divisor: $divisor<br>";
        echo "Quiciente: $quociente<br>";
        echo "Resto: $resto";
        } else {
            echo "Erro: Divisão por zero não é permitida";
        }
        ?>
    </section>
</body>
</html>