<?php
// Define o fuso horário padrão (ajuste para o seu fuso horário, se necessário)
date_default_timezone_set('America/Sao_Paulo');

// Obtém a hora atual
$hora = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio Dinâmico em PHP e JavaScript</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #282c34;
            color: #61dafb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .relogio {
            font-size: 4em;
            background-color: #20232a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .relogio span {
            display: block;
            font-size: 0.4em;
            margin-top: -0.2em;
        }
    </style>
</head>
<body>
    <div class="relogio" id="relogio">
        <?php echo $hora; ?>
        <span id="subtitulo">Hora Atual</span>
    </div>

    <script>
        function atualizarRelogio() {
            const relogio = document.getElementById('relogio');
            const agora = new Date();
            const horas = agora.getHours().toString().padStart(2, '0');
            const minutos = agora.getMinutes().toString().padStart(2, '0');
            const segundos = agora.getSeconds().toString().padStart(2, '0');

            relogio.textContent = `${horas}:${minutos}:${segundos}`;
        }

        // Atualiza o relógio imediatamente
        atualizarRelogio();

        // Atualiza o relógio a cada segundo
        setInterval(atualizarRelogio, 1000);
    </script>
</body>
</html>
