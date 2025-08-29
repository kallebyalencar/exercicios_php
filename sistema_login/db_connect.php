<?php
// conexão com o banco de dados

$host = "localhost";         // Endereço do servidor
$username = "postgres";       // Nome do usuário do PostgreSQL
$password = "Arrozcomfeij@o123"; // Senha do usuário
$db_name = "sistema_login";  // Nome do banco de dados

// Criar string de conexão
$conn_string = "host=$host dbname=$db_name user=$username password=$password";

// Conectar ao PostgreSQL
$connect = pg_connect($conn_string);

// Verificar se a conexão foi bem-sucedida
if (!$connect) {
    die("Falha na conexão: não foi possível conectar ao PostgreSQL");
} else {
    echo "Conexão realizada com sucesso!";
}
?>
