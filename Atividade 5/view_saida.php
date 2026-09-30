<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olha o resultado ai</title>
</head>
<body>
    <header>
        <h1>Resultado:</h1>
    </header>
    <main>
        <p>Cliente: <b><?= $nome ?></b></p>
        <p>Produto: <b><?= $nomeP ?></b></p>
        <br>
        <p>Quantidade: <b><?= $quantidade ?></b></p>
        <p>Preço unitário: <b>R$ <?= number_format($preco, 2, ",", ".") ?></b></p>
        <br>
        <p>Subtotal: <b>R$ <?= number_format($subtotal, 2, ",", ".") ?></b></p>
        <p>Desconto: <b>R$ <?= number_format($desconto, 2, ",", ".") ?></b></p>
        <br>
        <p>Total: <b>R$ <?= number_format($total, 2, ",", ".") ?></b></p>
    </main>
</body>
</html>