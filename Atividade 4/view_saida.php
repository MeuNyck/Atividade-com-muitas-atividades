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
        <p>Aluno: <b><?= $nome ?></b></p>
        <br><br>
        <p>Nota 1: <b><?= $nota1 ?></b></p>
        <br>
        <p>Nota 2: <b><?= $nota2 ?></b></p>
        <br><br>
        <p>Média: <b><?= $media ?></b></p>
        <br><br>
        <p>Situação: <b><?= $resultado ?></b></p>
    </main>
</body>
</html>