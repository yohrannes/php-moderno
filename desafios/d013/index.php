<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <label for="saque">Qual o valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="saque" id="saque" step="5" required>
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
    </main>
    <section>
        <h2>Saque de R$[??] realizado</h2>
        <p>O caixa eletrônico vai te</p>
    </section>
</body>
</html>