<?php
require_once 'db_connect.php';

session_start();

// Pega o ID do usuário da sessão e força ser inteiro (segurança)
$id = (int) $_SESSION['id_usuario'];

// Consulta segura no PostgreSQL
$sql = "SELECT * FROM users WHERE id_usuario = $id";
$resultado = pg_query($connect, $sql);
pg_close($connect); // fechar conexão

// Verifica se a consulta foi executada corretamente
if(!$resultado){
    die("Erro na consulta: " . pg_last_error($connect));
}

// Verifica se retornou algum resultado
if(pg_num_rows($resultado) == 0){
    // Caso o usuário não exista no banco (não deveria acontecer)
    echo "Usuário não encontrado.";
    exit();
}

// Verificar

if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

// Converte o resultado em array
$dados = pg_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1>Olá <?php echo htmlspecialchars($dados['nome']); ?>!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>
