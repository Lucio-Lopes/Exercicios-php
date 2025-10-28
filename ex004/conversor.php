<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Conversor 1.0</title>
    </head>
    <body>
        <header>
            <h1>Valor em dolar.</h1>
        </header>
        <?php
            $cotacao = 5.38;
            $valor = $_GET["valor"];
            $resultado = $valor / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<section>Seus ". numfmt_format_currency($padrao,$valor,"BRL") . " reais equivalem a " . numfmt_format_currency($padrao,$resultado,"USDS") . " dolares</section>";
        ?>
    </body>
</html>