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
        "pdf"
    ];
    $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION); // Aqui você pega a extensão do arquivo enviado. Especificando o nome do input e o índice. PATHINFO_EXTENSION é justamente para pegar apenas a extensão.

    if(in_array($extensao, $formatos_permitidos)){ // Verifica se a extensão do arquivo está dentro da lista permitida.
        $pasta = "arquivos/"; // Define a pasta onde o arquivo será salvo.
        $temporario = $_FILES['arquivo']['tmp_name']; // Essa variável guarda o caminho temporário "tmp_name" do arquivo no servidor.
        $novoNome = uniqid() . ".$extensao"; // Cria um novo nome único para o arquivo, evitando sobreposição. ex: 64f1a2c3d9 Depois concatena com a extensão (.png, .jpg, etc.).

        if(move_uploaded_file($temporario, $pasta.$novoNome)){ // mover o arquivo temporário para pasta, junto com o novo nome
            $mensagem = "Upload feito com sucesso!";
        }else {
            echo $mensagem = "Erro! Não foi possível fazer upload";
        }

    }else {
        $mensagem = "Formato Inválido";
    }

    echo $mensagem;

}

?>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> <!--o formulário “se envia para ele mesmo”, e você pode tratar os dados no mesmo script. multipart/form-data Significa que os dados do formulário serão enviados em partes separadas (multipart), permitindo enviar textos e arquivos juntos.-->

    <input type="file" name="arquivo" id="iarquivo"> <br>
    <input type="submit" name="enviar-formulario" value="Enviar">

</form>

</body>
</html>