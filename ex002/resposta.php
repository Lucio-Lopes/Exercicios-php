<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>Atecessor e sucessor</h1>
        </header>
        <section>
            <?php
                $numero = $_GET["num"];
                $a = $numero-1;
                $s = $numero+1;
                echo "<p>O número escolhido foi $numero</p>";
                echo "<p>O antecessor é $a</p>";
                echo "<p>O sucessor é $s</p>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </section>
    </body>
</html>