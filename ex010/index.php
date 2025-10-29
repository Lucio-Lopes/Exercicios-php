<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Salario</title>
    </head>
    <body>
        <?php

            $valor1 = $_GET['v1'] ?? 0;
            $perc = $_GET['perc'];
            $resultado = $perc/100 *$valor1;
            $total = $resultado+$valor1;
        ?>
        <main>
            <h1>Reajustador de preço</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="v1">Preço</label>
                <input type="number" name="v1" id="v1">
                <label for="v1">Qual o percentual de reajuste? <span id="p"></span>%</label>
                <input type="range" name="perc" id="perc" oninput="mudaValor()">
                <input type="submit" value="Reajustar">
            </form>
        </main>
        <section>
            <?php
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "O produto que custava ".numfmt_format_currency($padrao,$valor1,"BRL")." com $perc% de aumento vai passar a custar ".numfmt_format_currency($padrao,$total,"BRL");
            ?>
        </section>
        <script>
            function mudaValor(){
                p.innerText = perc.value;
            }
        </script>
    </body>
</html>