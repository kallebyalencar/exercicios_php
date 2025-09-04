<?php
// Conexão
require_once 'db_connect.php'; // require_once = importar um arquivo PHP dentro de outro arquivo

// Sessão

session_start();

// Botão Enviar
    if(isset($_POST['btn-entrar'])){ // quando clicar no botão enviar, precisa pegar esses dados
        $erros = [];
        $login = pg_escape_string($connect, $_POST['login']);
        $senha = pg_escape_string($connect, $_POST['senha']); // que o usuário digitou

        if(empty($login) OR empty($senha)){
            $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
        } else {
            $sql = "SELECT login FROM users WHERE login = '$login'"; // Se o login que digitar existe na base de dados
            $resultado = pg_query($connect, $sql); // resultado da consulta acima

            if(pg_num_rows($resultado) > 0){ // se o numero de linhas for > 0 é pq existe algum registro no banco de dados
                $senha = md5($senha);
                $sql = "SELECT * FROM users WHERE login = '$login' AND senha = '$senha'"; // se no banco de dados existe um login e uma senha igual a de que o usuário digitar
                $resultado = pg_query($connect, $sql); // resultado da consulta acima

                if(pg_num_rows($resultado) == 1){
                    $dados = pg_fetch_array($resultado); // converter esse resultado em array, e atribuir a variável dados
                    pg_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id_usuario'];
                    header('Location: home.php');
                }else{
                    $erros[] = "<li> Usuário e senha não conferem </li>";
                }

            } else {
                $erros[] = "<li> usuário inexistente </li>";
            }

        }
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

<?php 
if(!empty($erros)){ // se o array de erros n estiver vazio, significa que contém erro!
    foreach ($erros as $erro){
        echo $erro;
    }
}
?>
<hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <label for="login">Login:</label>
    <input type="text" name="login"> <br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha"> <br>

    <input type="submit" name="btn-entrar" value="Entrar">

    </form>
</body>
</html>