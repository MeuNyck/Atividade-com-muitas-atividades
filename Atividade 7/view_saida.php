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
        <p>Funcionário: <b><?= $nome ?></b></p>
        <br>
        <p>Cargo: <b><?= $cargo ?></b></p>
        <br><br>
        <p>Salário atual: <b>R$ <?= number_format($salario, 2, ",", ".") ?></b></p>
        <br>
        <p>Aumento: <b>R$ <?= number_format($aumento, 2, ",", ".") ?></b></p>
        <br><br>
        <p>Novo salário: <b>R$ <?= number_format($novoSalario, 2, ",", ".") ?></b></p>
    </main>
</body>
</html>