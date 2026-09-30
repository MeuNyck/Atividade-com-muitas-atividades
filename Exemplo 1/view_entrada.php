<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 - Processamento de dados</title>
</head>
<body>
    <header> 
        <h1>Formulário de Cadastro</h1>
    </header>
    <main>
        <form action="logicaControler.php" method="POST">
            <label for="nome">Nome:</label>
            <br><br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            <label for="idade">Idade:</label>
            <br><br>
            <input type="number" id="idade" name="idade">
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>