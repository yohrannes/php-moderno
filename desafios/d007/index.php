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
        $salario = $_GET['sal'] ?? 0;
        $salariominimo = 1320 ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="$salario">
            <input type="submit" value="Calcular">
            <?php
            print "<p>Considerando o salário mínimo de <strong>$salariominimo</strong></p>";
            ?>
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        if ($salariominimo !==0){
        $quantsalmin = (int) ($salario / $salariominimo);
        $restante = (float) $salario - ($salariominimo*$quantsalmin);
        $restante = (float) $salario - ($salariominimo*$quantsalmin);

        print "<p>Quem recebe um salário de $salario e ganha <strong> $quantsalmin salários mínimos</strong> + $restante</p>";

        } else {
            echo "Erro Divisão por zero não é permitida";
        }

        ?>
    </section>
</body>
</html>