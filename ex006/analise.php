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
            <h1>Analisador de numero</h1>
        </header>
        <section>
            <?php
                $num = $_POST["valor"] ?? 0;

                echo "<p>analisando o numero <strong>". number_format($num,2,",",".") . " </strong>informado pelo usuario</p>";

                $int = (int) $num;
                $fra = $num - $int;
                echo "<ul><li> A parte inteira do numero é <strong>". number_format($int,0,",",".")."</strong></li></ul>";
                echo "<ul><li> A parte fracionada do numero é <strong>". number_format($fra,2,",",".")."</strong></li></ul>";
            ?>
        </section>
    </body>
</html>