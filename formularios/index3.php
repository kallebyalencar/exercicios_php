<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Upload de Arquivos</title>
</head>
<body>

<?php

if(isset($_POST['enviar-formulario'])){
    $formatos_permitidos = [
        "png",
        "jpeg",
        "jpg",
        "gif",
        "pdf", 
    ];

    $quantidade_arquivos = count($_FILES['arquivo']['name']); // quantos arquivos temos na superglobal FILES
    $contador = 0; // repetições nesse loop

    while($contador < $quantidade_arquivos){ // enquanto contador 0 < arquivos vai repetir isso 👇
    
    $extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION); // adicionado contador

    if(in_array($extensao, $formatos_permitidos)){ 
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'][$contador]; // adicionado contador
        $novoNome = uniqid() . ".$extensao"; 

        if(move_uploaded_file($temporario, $pasta.$novoNome)){ 
            echo "Upload feito com sucesso para $pasta$novoNome<br>";
        }else {
            echo "Erro ao enviar o arquivo temporário $temporario";
        }

    }else {
        echo "$extensao não é permitida <br>";
    }

    $contador++;

    }
}

?>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 

    <input type="file" name="arquivo[]" id="iarquivo" multiple> <br> <!--Multiple: selecionar mais de um arquivo / e precisa ser array -->
    <input type="submit" name="enviar-formulario" value="Enviar">

</form>

</body>
</html>