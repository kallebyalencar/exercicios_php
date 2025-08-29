<?php
// Botão Enviar
    if(isset($_POST['btn-entrar'])){
        echo "Clicou";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Loguin</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <label for="login">Login:</label>
    <input type="text" name="login"> <br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha"> <br>

    <input type="submit" name="btn-entrar" value="Entrar">

    </form>
</body>
</html>