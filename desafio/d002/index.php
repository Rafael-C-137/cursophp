<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <main>
        <h1>Sorteador de números</h1>
        <?php
            $min = 1;
            $max = 500;
            $num = mt_rand($min, $max);
            echo "<p>O valor gerado foi: <strong>$num<strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar outro</button>
    </main>   
</body>
</html>