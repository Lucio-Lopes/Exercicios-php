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
            <h1>Gerador de números aleátorios</h1>
        </header>
        <section>
            <?php
                $min = 0;
                $max = 100;
                $num = mt_rand($min,$max);
                echo "<p>Gerando um número aleátorio entre $min e $max... <br>O valor gerado foi <strong>$num</strong></p>";
            ?>
            <button onclick="javascript:document.location.reload()">Gerar novo</button>
        </section>
    </body>
</html>