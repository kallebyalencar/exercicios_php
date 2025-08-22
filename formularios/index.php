<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste formulário</title>
</head>
<body>

    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome" id="inome"> <br>
        Email: <input type="email" name="email" id="iemail"> <br>
        <button type="submit">
            Enviar
        </button>
        <br>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>

</body>
</html>