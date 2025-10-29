<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <main>
            <?php
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["TESTE"] = "funcionou";
                var_dump($_SESSION);
            ?>
        </main>
    </body>
</html>