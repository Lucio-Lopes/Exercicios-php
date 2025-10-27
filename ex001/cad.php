<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Resultado</title>
    </head>
    <body>
        <header>
            <h1>Resultado</h1>
        </header>
        <section>
            <?php
                if($_GET["nome"] == null || $_GET["sobrenome"] == null){
                    echo 'Sem dados do usuario';
                }else{
                    $nome = $_GET["nome"];
                    $sobrenome = $_REQUEST["sobrenome"];
                    echo "Bem vindo $nome $sobrenome";
                }
            ?>
        </section>
    </body>
</html>