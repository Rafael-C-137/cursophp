<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['reaj']  ?? '0';   
    ?>
    <main>
        <h1>Reajuste de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=number_format($preco, 2, ",", ".")?>">

        <label for="reaj">Qual será o percentual do reajuste? (<strong><span id="p">?</span>%</strong>)</label>

        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

        <input type="submit" value="Reajustar">
    
        </form>
    </main>

    <section>
        <?php 
            $form = ($preco*$reajuste)/ 100;
            $valorAtl = $form + $preco;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <strong>R$<?=number_format($preco, 2, ",", ".")?> reais</strong>, com <strong><?=$reajuste?>
        % de aumento</strong> vai passar a custar <strong>R$<?=number_format($valorAtl, 2, ",", ".")?> reais</strong> a partir de agora.</p>
    </section>
    <script>

        mudaValor()

        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>