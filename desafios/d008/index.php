<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Número</label>
        <input type="number" name="num" id="num" value="<?=$numero?>">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $rq = $numero ** (1/2);
        $rc = $numero ** (1/3);

        echo "<p>Analizando o <strong>numero $numero</strong>, temos:";
        echo "<ul><li>A sua raiz quadrada é ". number_format($rq, 3, ",", ".") ."</li>";
        echo "<li> a sua raiz cúbica é ". number_format($rc,  3, ",", ".") ."</li></ul>";
        ?>
    </section>
</body>
</html>