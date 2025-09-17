<?php
// Criptografia - Já existem técnicas para quebrar

// $senha = "teste";

// $novaSenha = base64_encode($senha);
// echo "base64: ".$novaSenha. "<br>";
// echo "Sua senha é: " . base64_decode($novaSenha);

// echo "<hr>";

// echo "Md5: " . md5($senha) . "<br>";
// echo "Sha1: " . sha1($senha);

// -----------------------------

$senha = 123456;
$senha_db = '$2y$10$yEJp3lYPUnKJtzZekc2FfeG491OJ3tNxffUjZK8W9vXsXCtxYXVf6';

if(password_verify($senha, $senha_db)){
    echo "Senha válida!";
}else {
    echo "Senha Inválida";
}

// $options = [
//     'cost' => 10
// ];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);



?>