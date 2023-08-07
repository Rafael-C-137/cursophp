<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
    <?php 
        $cotação = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dólar = $real / $cotação;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . "
         equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
         
        ?>
        <button onclick="javascript:window.location.href='index.html'">
        &#x2b05; Voltar</button>
    </main>
</body>
</html>