<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Conversor 2.0</title>
    </head>
    <body>
        <header>
            <h1>Valor em dolar.</h1>
        </header>
        <?php
           
            $valor = $_GET["valor"];
             $inicio= date("m-d-Y", strtotime("-7 days"));
            $fim= date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao ';

            $dados = json_decode(file_get_contents($url),true);
            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $resultado = $valor / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<section>Seus <strong>". numfmt_format_currency($padrao,$valor,"BRL") . "</strong> reais equivalem a <strong>" . numfmt_format_currency($padrao,$resultado,"USD") . "</strong> dolares</section>";
        ?>
    </body>
</html>