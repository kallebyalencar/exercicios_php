<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste formulário</title>
</head>
<body>

    <?php
    
        if(isset($_POST['enviar-form'])){
            // array de erros
            $erros = [];

            // Sanitize

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if (!filter_var($idade, FILTER_VALIDATE_INT)){
                $erros[] = "Idade precisa ser um inteiro";
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erros[] = "Email incorreto";
            }
            
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                $erros[] = "Url incorreto";
            }
           

            // exibindo mensagens
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo "<li> $erro </li>";
                }
            }else {
                echo "Parabéns seus dados estão corretos";
            }

        }
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Nome: <input type="text" name="nome" id="inome"> <br>
        Idade: <input type="text" name="idade" id="iidade"> <br>
        Email: <input type="email" name="email" id="iemail"> <br>
        URL: <input type="text" name="url" id="iurl"> <br>
        <button type="submit" name="enviar-form">
            Enviar
        </button>
        <br>
    </form>


</body>
</html>