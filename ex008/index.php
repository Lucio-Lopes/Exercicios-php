<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Document</title>
    </head>
    <body>
        <?php

            $valor1 = $_GET['v1'] ?? 0;
            $valor2 = $_GET["v2"] ?? 0;
            $soma = $valor1 + $valor2;

        ?>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="v1">Valor 1</label>
                <input type="number" name="v1" id="v1">
                <label for="v2">Valor 2</label>
                <input type="number" name="v2" id="v2">
                <input type="submit" value="Somar">
            </form>
        </main>
        <section>
            <h2>Resultado da soma</h2>
            <?php
                echo "A soma é $soma";
            ?>
        </section>
    </body>
</html>