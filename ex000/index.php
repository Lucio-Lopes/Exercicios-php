<?php
session_start();

// Se ainda não existe o horário de início, define agora
if (!isset($_SESSION['inicio_acesso'])) {
    $_SESSION['inicio_acesso'] = time();
}

// Calcula o tempo decorrido
$tempo_atual = time();
$tempo_decorrido = $tempo_atual - $_SESSION['inicio_acesso'];

// Converte segundos em formato legível
$horas = floor($tempo_decorrido / 3600);
$minutos = floor(($tempo_decorrido % 3600) / 60);
$segundos = $tempo_decorrido % 60;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tempo de Acesso</title>
    <meta http-equiv="refresh" content="1"> <!-- Atualiza a página a cada 1 segundo -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding-top: 50px;
        }
        .tempo {
            background: #0078d7;
            color: white;
            display: inline-block;
            padding: 20px 40px;
            border-radius: 10px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Contador de Tempo de Acesso</h1>
    <div class="tempo">
        <?php
        echo sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);
        ?>
    </div>

    <p>Tempo desde que você entrou nesta sessão.</p>
</body>
</html>