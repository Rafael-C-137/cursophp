<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Resultado final</h1>
        <?php
            $n = $_GET["num"] ?? 0;
            echo "<br>O número escolhido foi<strong>$n</strong>!";
            echo "<br>O seu <em>antecessor<em> é <strong>". $n -1 ."</strong>!";
            echo "<br>O seu <em>sucessor<em> é <strong>". $n + 1 ."</strong>!";
        ?>
        <button onclick="javascript:window.location.href='index.html'">
        &#x2b05; Voltar</button>
    </main>
</body>
</html>