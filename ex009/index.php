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
            $salarioMin = 1500;
            $resultado = $valor1/$salarioMin;
            $quant = (int)$resultado;
            $resto = $valor1-($quant*$salarioMin);
        ?>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="v1">Salario</label>
                <input type="number" name="v1" id="v1">
                <input type="submit" value="Calcular">
            </form>
        </main>
        <section>
            
            <?php
                echo "Quem recebe um salario de R$".number_format($valor1,2,",",".")." ganha $quant salarios minimo + R$".number_format($resto,2,",",".");
            ?>
        </section>
    </body>
</html>